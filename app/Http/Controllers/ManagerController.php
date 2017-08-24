<?php
/**
 * @desc    管理
 *
 **/
namespace App\Http\Controllers;

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
}
