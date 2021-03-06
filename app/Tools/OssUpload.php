<?php

namespace App\Tools;

require_once __DIR__."/../Helpers/Alioss/autoload.php";
use OSS\OssClient;
use OSS\Core\OssException;

class OssUpload
{

    private $ossClient    = null;

    private $bucket       = null;

    CONST OSS_CACHE_KEY   = 'OSS_FILE_CRC_PRE_';

    public static function getConfig(){

    	return [
		    //篮球
		    'fightbasket' => [
		    	'accessKeyId'     => 'LTAINKFfsAvf1fKN',
		        'accessKeySecret' => 'N8t90sbX38nsqKCdw6ZSa0xkReqzns',
		        'bucket'          => 'fightbasket',
		        'endpoint'        => 'oss-cn-beijing.aliyuncs.com',
		    ],
		    //个人
		    'fightzero'	=> [
		    	'accessKeyId'     => 'LTAINKFfsAvf1fKN',
		        'accessKeySecret' => 'N8t90sbX38nsqKCdw6ZSa0xkReqzns',
		        'bucket'          => 'fightzero',
		        'endpoint'        => 'oss-cn-beijing.aliyuncs.com',
		    ],

		];
    }

    /**
     * @param 	string  $oss_config
     * @throws 	\Exception
     * @desc  	传入$bucket会修改配置,将文件存入对应的bucket中,默认bucket为'9douyu'
     */
    public function __construct( $type = "fightbasket" )
    {
        
        $config    		= self::getConfig();
        if($type == "fightbasket"){
			$config 	= $config["fightbasket"];
        }else{
        	$config 	= $config["fightzero"];
        }

        $this->bucket   = $config['bucket'];
        $endpoint       = $config['endpoint'];
        $accessKeyId    = $config['accessKeyId'];
        $accessKeySecret= $config['accessKeySecret'];
        try {
            $this->ossClient = new OssClient($accessKeyId, $accessKeySecret, $endpoint);
        } catch (OssException $e) {
            \Log::error(__METHOD__.'Error',[$e->getMessage()]);
            throw new \Exception($e->getMessage());
        }
    }


    /**
     * @desc 	上传文件到oss,生成oss保存路径和对应crc32路径码,写入oss_file_path表,返回crc32码
     * @param 	array 	$file  		$_FILES 表单上传的文件
     * @param 	string 	$nameSpace 	默认nameSpace为uploads,
     			如果想进行细分,请以'a/b/c'格式传入nameSpace,如:'resources/pdf'
     * @return 	array
     * 
     **/
    public function putFile( $file, $fileName="",$nameSpace = 'uploads')
    {

        //判断文件
        if(empty($file['tmp_name'])){
            
            return "FAIL";
        
        }

        //处理nameSpace
        $nameSpace 	= $this->applyPathSuffix($nameSpace);
        //文件名
        $fileName 	= $fileName ? $fileName : date('YmdHis') . '-' . uniqid();

        //构建oss存储路径
        $object 	= $nameSpace.'/'.$fileName;

        try{

            $OssClient 	= $this->ossClient;
            $exist 		= $OssClient->doesObjectExist($this->bucket, $object);
            $OssClient->uploadFile($this->bucket,$object,$file['tmp_name']);

            $fileInfo 	= [
                'path' 	=> substr($object, 0, strrpos($object,'/')),
                'name' 	=> $fileName,
            ];

            return $fileInfo;

        }catch (OssException $e) {
            return "FAIL";
        }

    }

    /**
     * @param 	string $localDirectory 需要上传的文件目录
     * @param 	string $prefix         上传到oss后的object前缀,不能以'/'开头
     * @param 	bool   $recursive      是否递归的上传localDirectory下的子目录内容
     * @return 	array
     * @desc                         	上传整个目录文件
     */
    public function uploadDir($localDirectory, $prefix, $recursive=true)
    {

        if(!$localDirectory || !$prefix){
            return "FAIL";
        }

        try{

            $ossClient = $this->ossClient;

            $ossClient->uploadDir($this->bucket, $prefix, $localDirectory, $exclude = '.|..|.svn|.git', $recursive);

            return "SUCCESS";

        }catch(\Exception $e){
            \Log::error(__METHOD__.'Error',[$e->getMessage()]);
            return "FAIL";
        }
    }

    /**
     * @param 	string $contents    需要上传的内存中的内容,如果是需要追加内容的文件,请使用appendFile方法
     * @param 	string $object      存储路径和文件名 如:'uploads/qrcode/xxx.png'
     * @return 	bool
     * @desc 保存内存中的内容(二进制流)如二维码,txt文件
     */
    public function writeFile($contents, $object)
    {

        $object 	= $this->applyPathSuffix($object);

        try{

            $ossClient = $this->ossClient;

            $ossClient->putObject($this->bucket,$object,$contents);

            return true;

        }catch(\Exception $e){

            return false;
        }

    }

    /**
     * @param 	string $path
     * @param 	bool $type   如果type为true 说明path不是crc码,不需要读库,返回oss全路径
     * @return 	bool|array  oss_path type
     * @desc 	获取oss文件的全路径和文件类型(未用)
     */
    public function getFileUrl($path, $type = false)
    {
        if($type){
            $url= 'https://'.$this->bucket.'.'.self::endpoint.'/'.$path;
            return $url;
        }

        $data 	= self::getOssCacheByCrc($path);

        if( !empty($data) ){
            return $data;
        }

        try{

            $ossModel = new OssModel();

            $result   = $ossModel->getFileUrl($path);

            self::setOssCacheByCrc($path, $result);

            return 	$result;

        }catch (\Exception $e) {
            \Log::error(__METHOD__.'Error',[$e->getMessage()]);
            return false;

        }

    }

    /**
     * @param 	string $path
     * @return 	bool|string
     * @desc    获取文件内容并保存在内存中
     */
    public function getObject($path)
    {
        $path 		= $this->applyPathSuffix($path);

        $ossClient 	= $this->ossClient;

        try{
            $content= $ossClient->getObject($this->bucket, $path);
        } catch(OssException $e) {
            \Log::error(__METHOD__.'Error',[$e->getMessage()]);
            return false;
        }

        return $content;
    }

    /**
     * @param 	string $path
     * @return 	bool|string
     * @desc 	获取文件meta信息
     */
    public function getObjectMeta($path)
    {
        $ossClient 		= $this->ossClient;

        try {
            $objectMeta = $ossClient->getObjectMeta($this->bucket, $path);
        } catch (OssException $e) {
            return false;
        }
        return $objectMeta;
    }

    /**
     * @param 	string $path
     * @return 	bool|string
     * @desc 	生成GetObject的签名url,主要用于私有权限下的读访问控制
     */
    public function getSignUrl($path)
    {
        $timeout	= 300;
        $object 	= $this->applyPathSuffix($path);
        $oss 		= $this->ossClient;
        try{
            $exit 	= $this->checkPathExit($object);
            if($exit){
                return $oss->signUrl($this->bucket, $object, $timeout);
            }
        } catch(OssException $e) {
            \Log::error(__METHOD__.'Error',[$e->getMessage()]);
            return false;

        }
    }

    /**
     * @param 	string $object
     * @return 	bool
     * @desc 	删除对象(未用)
     */
    public function delete($object)
    {
        $object 	= $this->applyPathSuffix($object);
        try{

            $oss 	= $this->ossClient;

            $oss->deleteObject($this->bucket, $object);

        }catch (OssException $e) {
            \Log::error(__METHOD__.'Error',[$e->getMessage()]);
            return 	false;

        }
        return true;

    }

    /**
     * @param 	$crc
     * @param 	array $data
     * @return 	bool
     * @desc 	设置缓存
     */
    private static function setOssCacheByCrc($crc, $data=[]){

        $cacheKey 	= self::OSS_CACHE_KEY.$crc;

        if( !empty($data) && is_array($data) ){

            \Cache::put($cacheKey, json_encode($data), 30);

        }

        return true;

    }

    /**
     * @param 	$crc
     * @return 	bool|mixed
     * @desc 	获取缓存
     */
    private static function getOssCacheByCrc($crc){

        $cacheKey 	= self::OSS_CACHE_KEY.$crc;

        $jsonData 	= \Cache::get($cacheKey);

        if( !empty($jsonData) && json_decode($jsonData, true) ){

            return json_decode($jsonData, true);

        }

        return false;

    }

    /**
     * @param 	string $path
     * @return 	bool  存在返回true,不存在返回false
     * @throws 	\Exception
     * @desc         判断oss中是否存在此object
     */
    public function checkPathExit($path)
    {
        $object 		= $this->applyPathSuffix($path);
        try {
            $ossClient 	= $this->ossClient;
            return $ossClient->doesObjectExist($this->bucket, $object);
        } catch (OssException $e) {
            \Log::error(__METHOD__.'Error',[$e->getMessage()]);
            throw new \Exception($e->getMessage());

        }

    }

    /**
     * @param 	string $nameSpace
     * @return 	string
     * @desc 	处理命名空间,去除$nameSpace前后的'/'
     */
    private function applyPathSuffix($nameSpace)
    {
        return trim($nameSpace, '\\/');
    }

}