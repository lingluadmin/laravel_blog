<?php

namespace App\Http\Controllers;
use App\Http\Models\UserModel;
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
        echo __METHOD__.' : '.__LINE__;
        echo "<pre>";
//        $sql    = "select * from blog_user";
//        $res    = \DB::select($sql);
//        $res    = ToolArray::objectToArray($res);
//
//        var_dump($res);
        exit;
//        return view('web.llphoto');
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
        $resData    = UserModel::getTimelineList();
        $resData    = self::timelineFormat($resData);
        #dd($resData);
        $article    = UserModel::getArticleList();
        $bGril      = UserModel::getBasketGril();

        $assign["article"]  = $article;
        $assign["bGril"]    = $bGril;

        $assign["resData"]  = $resData;
        return view('web.timeline', $assign);

    }
    //TODO: 格式化-时光轴
    public static function timelineFormat( $timelineData=[] ){

        $resData    = [];

        foreach ($timelineData as $key=>$val){
            $timeStr    = strtotime($val["publish_at"]);
            $year       = date("Y", $timeStr);
            $yearmonth  = date("Ym",$timeStr);
            $month      = date("m", $timeStr);

            $monthArr   = [
                "title"     => $val["title"],
                "tags"      => $val["tags"],
                "author"    => $val["author"] ? $val["author"] : "FIGHTZERO",
                "publish_at"=> date("Y/m/d", $timeStr),
            ];

            $resData[$year]["yearName"]     = $year."年";
            $resData[$year]["yearData"][$yearmonth]["monthName"]    = $month."月";
            $resData[$year]["yearData"][$yearmonth]["monthData"][]  = $monthArr;
        }

        return $resData;

    }


}
