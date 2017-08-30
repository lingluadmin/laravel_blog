<?php
/**
 * @desc    管理
 *
 **/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Tools\OssUpload;

class ManagerController extends Controller {

	/**
     * @desc 文章添加
     *
	 **/
	public function articleAdd()
    {
        $assign['content']  = "";
        return view('manager.article', $assign);
	}

    /**
     * @desc 执行添加
     **/
    public function articleAddDo(Request $request ){
        # echo "<pre>";
        # echo __METHOD__.' : '.__LINE__;
        $param  = $request->all();
        $assign["content"] = !empty($param["content"]) ? $param["content"]  : "";
        # print_r($param);

        return view('manager.article', $assign);

    }

    // TODO: 详情信息
    public function lldetail(){
        echo __METHOD__.' : '.__LINE__;
    }

    // TODO: 文章
    public function llactricle(){
        echo __METHOD__.' : '.__LINE__;
    }

    // TODO: 时光轴
    public function lltime(){
        echo __METHOD__.' : '.__LINE__;
    }

    //TODO： 照片上传
    public function imgAdd(){

       $assign['tags']  = "XJS2017";
        return view('manager.addImg', $assign); 
    }

    //TODO: IMG DO 
    public function imgAddDo(Request $request){
        echo "<pre>";
        #$imgArr = $_FILES;

        #var_dump($imgArr);

        // $file = $request->file('imgs');

        // // 文件是否上传成功
        // if ($file->isValid()) {

        //     // 获取文件相关信息
        //     $originalName   = $file->getClientOriginalName();       // 文件原名
        //     $ext            = $file->getClientOriginalExtension();  // 扩展名
        //     $realPath       = $file->getRealPath();                 //临时文件的绝对路径
        //     $type           = $file->getClientMimeType();           // image/jpeg

        //     // 上传文件
        //     $filename0  = date('YmdHis') . '-' . uniqid();
        //     $filename1   = $filename0 . '.' . $ext;
        //     // 使用我们新建的uploads本地存储空间（目录）
        //     $bool       = Storage::disk('uploads')->put($filename1, file_get_contents($realPath));
        //     var_dump($bool);

        // }
        $filename0  = date('YmdHis') . '-' . uniqid();
        $images     = $_FILES;
        $ossUp      = new OssUpload();

        foreach ($images as $key=>$image){

            if($image['error'] != 0){
                continue;
            }

            $result     = $ossUp->putFile($image, $filename0);

            if($result == "FAIL" ){
                return redirect()->back()->with('fail', "上传失败");
            }else{
                $path   = $result['path'];
                $name   = $result['name']; 
            }

        }
        var_dump($result);

    }
}
