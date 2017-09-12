<?php

namespace App\Http\Models;

use App\Tools\ToolArray;
use Storage;
use App\Tools\OssUpload;

class ImgsModel extends BaseModel
{


    /**
     * @desc    上传本地
     **/
    public static function upLocal( $file , $savePath="uploads" ){

        // 文件是否上传成功
        if ($file->isValid()) {
            // 获取文件相关信息
            $originalName   = $file->getClientOriginalName();       // 文件原名
            $ext            = $file->getClientOriginalExtension();  // 扩展名
            $realPath       = $file->getRealPath();                 // 临时文件的绝对路径
            $type           = $file->getClientMimeType();           // image/jpeg

            // 上传文件
            //$filename      = date('YmdHis') . '-' . uniqid() . '.' . $ext;
            // 使用我们新建的uploads本地存储空间（目录）
            $bool = \Storage::disk($savePath)->put($originalName, file_get_contents($realPath));

            if($bool){
                return $originalName;
            }
        }

        return "FAIL";

    }

    /**
     * @desc    上传OSS
     **/
    public static function upOss($images, $filename=""){
        $filename   = $filename ? $filename : date('YmdHis') . '-' . uniqid() . '.jpg';

        $ossUp      = new OssUpload();
        foreach ($images as $key=>$image){

            if($image['error'] != 0){
                continue;
            }

            $result     = $ossUp->putFile($image, $filename);

            if($result == "FAIL" ){
                return "FAIL";
            }else{
                $path   = $result['path'];
                $name   = $result['name'];
                return $name;
            }

        }

    }



    /**
     * @desc    写入数据
     *
     * imgkey   -   tags
     *  BASKET  -   BASKET
     *  用户ID       BASKETUSER
     *  比赛ID       BASKET
     *  BASKETGIRL  BASKETGIRL
     *  BEAUTIFUL   GIRL
     *  BLOGID      BLOG
     *
     **/
    public static function imgAddDo( $param=[] ){

        $paramData["imgkey"]    = !empty($param["imgkey"])  ? $param["imgkey"]  : "";
        $paramData["imgval"]    = !empty($param["imgval"])  ? $param["imgval"]  : "";
        $paramData["remark"]    = !empty($param["remark"])  ? $param["remark"]  : "";
        $paramData["tags"]      = !empty($param["tags"])    ? $param["tags"]    : "";

        $res    = \DB::table("imgs")->insert( $paramData );

        return  $res;

    }


    /**
     * @desc    获取列表
     **/
    public static function getImgsList( $tags = "BASKET" ){

        if($tags == "ALL" || empty($tags)){
            $result = \DB::table("imgs")
                ->get();
        }else{
            $result = \DB::table("imgs")
                ->where("tags", $tags)
                ->get();
        }

        $result = ToolArray::objectToArray($result);

        return $result;
    }

}

?>