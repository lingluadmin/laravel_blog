<?php
/**
 * @desc    管理
 *
 **/
namespace App\Http\Controllers;

use App\Http\Models\BasketModel;
use App\Http\Models\BlogModel;
use App\Http\Models\ImgsModel;
use Illuminate\Http\Request;

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
        $param  = $request->all();
        $paramData["content"] = !empty($param["content"]) ? $param["content"]  : "";
        $res    = BlogModel::blogAddDo($paramData);
        var_dump($res);
        #return view('manager.article', $assign);

    }

    //TODO: FIGHT—BLOG
    public  function blogAdd(){

        $assign["tagsArr"]  = BasketModel::getTagsArr();

        return view('manager.addBasket', $assign);
    }

    /**
     * @desc 执行添加
     **/
    public function blogAddDo(Request $request ){

        $param  = $request->all();
        $res    = BlogModel::blogAddDo($param);
        if($res){
            return redirect('blogAdd')->with('message', 'SUCCESS');
        }else{
            //TODO: FAIL
            echo "<pre>";
            print_r($param);
            exit;
        }
    }

    //TODO: PAPA篮球---START
    public  function basketAdd(){

        $assign["tagsArr"]  = BasketModel::getTagsArr();

        return view('manager.addBasket', $assign);
    }

    /**
     * @desc 执行添加
     **/
    public function basketAddDo(Request $request ){

        $param  = $request->all();
        $res    = BasketModel::basketAddDo($param);
        if($res){
            return redirect('basketAdd')->with('message', 'SUCCESS');
        }else{
            //TODO: FAIL
            echo "<pre>";
            print_r($param);
            exit;
        }
    }



    //TODO： 照片上传
    public function imgAdd(){

        $assign['tags']  = "XJS2017";
        return view('manager.addImg', $assign); 
    }

    //TODO: IMG DO 
    public function imgAddDo(Request $request){
        #echo "<pre>";
        $file  = $request->file('imgs');
        $images= $_FILES;

        #var_dump($file);
        #var_dump($images);

        // 文件是否上传成功
        $filename   = ImgsModel::upLocal($file);
        if($filename && $filename !="FAIL"){
            $res    = ImgsModel::upOss($images,$filename);
            if($res){
                \Log::info(__METHOD__.' : '.__LINE__." SUCCESS ");
                return $filename;
            }
        }

        #var_dump($filename);exit;
        \Log::info(__METHOD__.' : '.__LINE__.$filename);
        return $filename;

    }

    //TODO: IMG DO
    public function imgAddAjax(Request $request){
        echo "<pre>";
        $file  = $request->file('imgs');
        $images= $_FILES;

        var_dump($file);
        var_dump($images);

        // 文件是否上传成功
        $filename   = ImgsModel::upLocal($file);
        if($filename && $filename !="FAIL"){
            $res    = ImgsModel::upOss($images,$filename);
            if($res){
                \Log::info(__METHOD__.' : '.__LINE__." SUCCESS ");
                echo $filename;
            }
        }

        var_dump($filename);exit;
        \Log::info(__METHOD__.' : '.__LINE__.$filename);
        echo $filename;

    }

    //TODO: PAPA篮球---END

}
