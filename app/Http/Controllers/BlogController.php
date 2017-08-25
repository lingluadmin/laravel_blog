<?php
/**
 * @desc    个人博客
 *
 **/
namespace App\Http\Controllers;
use App\Tools\ToolArray;
use Illuminate\Http\Request;

class BlogController extends Controller {


	/**
	 * @desc    博客首页
     * @return  Response
     *
     * @标签
     * @博文
     * @分页
	 */
	public function blogList( Request $request )
    {
        echo __METHOD__.' : '.__LINE__;
		#return view('blog.list');
    }


    /**
     * @desc    博客详情
     *
     **/
    public function blogDetail( Request $request ){
       # echo __METHOD__.' : '.__LINE__;
        echo "<pre>";
        $sql    = "select * from blog_article";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        var_dump($res);
        exit;
        return view('blog.detail');
    }

    /**
     * @desc    新增博文
     **/
    public function blogCreate(){
        echo __METHOD__.' : '.__LINE__;
    }


}
