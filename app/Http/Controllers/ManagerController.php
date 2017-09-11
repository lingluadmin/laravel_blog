<?php
/**
 * @desc    管理
 *
 **/
namespace App\Http\Controllers;

use App\Http\Models\BasketModel;
use App\Http\Models\BlogModel;
use App\Http\Models\ImgsModel;
use App\Http\Models\UserModel;
use Illuminate\Http\Request;

class ManagerController extends Controller {

    const
        MANAGER = "LING",

        END     = true;

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
        $manager= $request->input('manager','');
        if($manager != self::MANAGER){
            echo "侬不可编辑哟";
            exit;
        }
        $paramData["content"] = !empty($param["content"]) ? $param["content"]  : "";
        $res    = BlogModel::blogAddDo($paramData);
        var_dump($res);
        #return view('manager.article', $assign);

    }

    //TODO: FIGHT—BLOG
    public  function blogAdd(){

        $assign["tagsArr"]  = BasketModel::getBasketTagsArr();

        return view('manager.addBasket', $assign);
    }

    /**
     * @desc 执行添加
     **/
    public function blogAddDo(Request $request ){

        $param  = $request->all();
        $manager= $request->input('manager','');
        if($manager != self::MANAGER){
            echo "侬不可编辑哟";
            exit;
        }

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

    //TODO: PAPA篮球---START
    public  function userAdd(){

        $assign["tagsArr"]  = BasketModel::getBasketTagsArr();

        return view('manager.addUser', $assign);
    }

    /**
     * @desc 执行添加
     **/
    public function userAddDo(Request $request ){

        $param  = $request->all();
        $manager= $request->input('manager','');

        if($manager != self::MANAGER){
            echo "侬不可编辑哟";
            exit;
        }

        $res    = UserModel::userAddDo($param);
        if($res){
            return redirect('userAdd')->with('message', 'SUCCESS');
        }else{
            //TODO: FAIL
            echo "<pre>";
            print_r($param);
            exit;
        }
    }

    /**
     * @desc    篮球集锦
     **/
    public  function basketAdd(){

        $assign["tagsArr"]  = BasketModel::getBasketTagsArr();

        return view('manager.addBasket', $assign);
    }

    /**
     * @desc 执行添加
     **/
    public function basketAddDo(Request $request ){

        $param  = $request->all();

        $manager= $request->input('manager','');
        if($manager != self::MANAGER){
            echo "侬不可编辑哟";
            exit;
        }

        $res    = BasketModel::basketAddDo($param);
        if($res){
            return redirect('basketAdd')->with('message', '添加成功');
        }else{
            //TODO: FAIL
            echo "<pre>";
            print_r($param);
            exit;
        }
    }



    //TODO： 照片上传
    public function imgAdd(){

        $assign['tagsList'] = BasketModel::getTagsList();
        return view('manager.addImg', $assign); 
    }

    //TODO: IMG DO 
    public function imgAddDo(Request $request){
        #echo "<pre>";
        $tags   = $request->input('tags', "BASKET");
        $file   = $request->file('imgs');
        $images = $_FILES;
        $savePath   = "";
        $tagsArr    = BasketModel::getBasketTagsArr();
        if($tags && in_array($tags, $tagsArr)){
            $savePath= "baskets";
        }
        #var_dump($file);
        #var_dump($images);

        // 文件是否上传成功
        $filename   = ImgsModel::upLocal($file, $savePath);
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


    /**
     * @desc    时光轴添加
     **/
    public  function timelineAdd(){

        $assign["tagsArr"]  = BasketModel::getTagsList();

        return view('manager.addTimeline', $assign);
    }

    /**
     * @desc 执行添加
     **/
    public function timelineAddDo(Request $request ){

        $param  = $request->all();

        $manager= $request->input('manager','');
        if($manager != self::MANAGER){
            echo "侬不可编辑哟";
            exit;
        }

        $res    = UserModel::timelineAddDo($param);
        if($res){
            return redirect('timelineAdd')->with('message', '添加成功');
        }else{
            //TODO: FAIL
            echo "<pre>";
            print_r($param);
            exit;
        }
    }


}
