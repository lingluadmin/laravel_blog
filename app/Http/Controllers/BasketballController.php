<?php
/**
 * @desc    篮球集锦
 *
 **/
namespace App\Http\Controllers;
use App\Tools\ToolArray;
use Illuminate\Http\Request;

class BasketballController extends Controller {

    const 
        BASKET_RANKS_1  = 1,    // 2017夏季赛一队
        BASKET_RANKS_2  = 2,    // 2017夏季赛二队
        BASKET_RANKS_3  = 3,    // 2017秋季赛白队
        BASKET_RANKS_4  = 4,    // 2017秋季赛蓝队

        END     = true;

    /**
     * @desc    PAPA篮球首页
     **/
    public function llbasketList( Request $request ){

        $tagid  = $request->input('tags', "ALL");     
        $sql    = "select * from blog_basketball where tags = 'XJS2017' ";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        $assign["bList"]    = $res;

        return view('basketball.blist', $assign);

    }

    /**
     *
     **/
    public function llbasketDetail( Request $request ){
        #echo __METHOD__.' : '.__LINE__;
        #echo "<pre>";
        $id     = $request->input('id',"1"); 
        $sql    = "select * from blog_basketball where id = {$id} ";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        $bUser  = self::getBasketUser( $id );

        #var_dump($res);
        #exit;
        $assign['bDetail']  = $res[0];
        return view('basketball.bdetail',$assign);

    }

	/**
	 * @desc    夏季赛
     * @return  Response
     *
        id
        title
        publish_at  
        author
        keyword
        intro
        description
        pictures    图片集合
        type        类型-XJS2017、XJLS2017、QJS2017
	 */
	public function xjs2017List( Request $request )
    {
        
        echo __METHOD__.' : '.__LINE__;   
        $tagid  = $request->input('tags', "ALL");     
        $sql    = "select * from blog_basketball where tags = 'XJS2017' ";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        $assign["bList"]    = $res;

        return view('basketball.blist', $assign);
        #return view('basketball.xjs2017list', $assign);

    }


    /**
     * @desc    夏季赛详情
        id
        title
        publish_at  
        author
        keyword
        intro
        description
        pictures    图片集合
        type        类型-XJS2017、XJLS2017、QJS2017

        参与球员
     *
     **/
    public function xjs2017Detail( Request $request ){
        #echo __METHOD__.' : '.__LINE__;
        #echo "<pre>";
        $id     = $request->input('id',"1"); 
        $sql    = "select * from blog_basketball where id = {$id} ";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        #var_dump($res);
        #exit;
        $assign['bDetail']  = $res[0];
        return view('basketball.bdetail',$assign);
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

    /**
     * @desc
     * 
     */
    public function xjs2017Config(){
        $userList   = [
            ""
        ];

    }

    /**
     * @desc    队伍名称
     *     
     **/
    public static function getRanksName(){
        return [
            self::BASKET_RANKS_1    => "PAPA篮球一队-啪啪无敌",
            self::BASKET_RANKS_2    => "PAPA篮球一队-所向披靡",
            self::BASKET_RANKS_3    => "PAPA篮球一队-白队",
            self::BASKET_RANKS_4    => "PAPA篮球一队-蓝队",
        ];

    }
    /**
     * @desc    获取比赛球员
     **/
    public static function getBasketUser( $bid = ""){
        $sql    = " select u.*,bu.ranks,bu.remark from blog_basketuser bu left join blog_user u on bu.uid = u.id  where basketid = {$id} ";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        var_dump($res);
        exit;
    }


}
