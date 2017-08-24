<?php

namespace App\Http\Controllers;
use App\Tools\ToolArray;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		# $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
    {
        echo "Home-----";
		# return view('home');
	}

    // TODO: 个人风采
    public function llphoto(){
       # echo __METHOD__.' : '.__LINE__;
        echo "<pre>";
        $sql    = "select * from blog_user";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        var_dump($res);
        exit;
        return view('web.llphoto');
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
