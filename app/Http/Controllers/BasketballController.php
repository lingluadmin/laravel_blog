<?php
/**
 * @desc    篮球集锦
 *
 **/
namespace App\Http\Controllers;
use App\Tools\ToolArray;
use Illuminate\Http\Request;

class BasketballController extends Controller {

    /**
     * @desc    PAPA篮球首页
     **/
    public function index(){


        echo __METHOD__.' : '.__LINE__;

    }

	/**
	 * @desc    夏季赛
     * @return  Response
     *
	 */
	public function xjs2017List( Request $request )
    {
        echo __METHOD__.' : '.__LINE__;
		#return view('basketball.xjs2017list');
    }


    /**
     * @desc    夏季赛详情
     *
     **/
    public function xjs2017Detail( Request $request ){
       # echo __METHOD__.' : '.__LINE__;
        echo "<pre>";
        $sql    = "select * from blog_basketball where ";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        var_dump($res);
        exit;
        return view('basketball.xjs2017detail');
    }

    /**
     * @desc    夏季联赛
     **/
    public function xjls2017List(){
        echo __METHOD__.' : '.__LINE__;
    }


    //TODO: 夏季联赛-详情
    public function xjls2017Detail(){
        echo __METHOD__.' : '.__LINE__;
    }


    /**
     * @desc    个人风采照
     *
     **/
    public function basketPerson(){

        echo __METHOD__.' : '.__LINE__;

    }

    /**
     * @desc    篮球照片墙
     *
     **/
    public function basketPhoto(){

    }


}
