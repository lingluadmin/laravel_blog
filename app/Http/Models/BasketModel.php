<?php

namespace App\Http\Models;

use App\Tools\BasketData;
use App\Tools\ToolArray;

class BasketModel  extends BaseModel
{

    /**
     * @desc    写入数据
     **/
    public static function basketAddDo( $param=[] ){

        $paramData["title"]     = !empty($param["title"])       ? $param["title"]       : "";
        $paramData["keywords"]  = !empty($param["keywords"])    ? $param["keywords"]    : self::TAGS_BASKET;
        $paramData["intro"]     = !empty($param["intro"])       ? $param["intro"]       : "自强不息，厚德载物";
        $paramData["picture"]   = !empty($param["picture"])     ? $param["picture"]     : "";
        $paramData["description"]=!empty($param["description"]) ? $param["description"] : "";

        $paramData["tags"]      = !empty($param["tags"])        ? $param["tags"]        : self::TAGS_BASKET;
        $paramData["status"]    = !empty($param["status"])      ? $param["status"]      : "";
        $paramData["sort_num"]  = !empty($param["sort_num"])    ? $param["sort_num"]    : "";
        $paramData["is_top"]    = !empty($param["is_top"])      ? $param["is_top"]      : "";
        $paramData["fee_intro"] = !empty($param["fee_intro"])   ? $param["fee_intro"]   : "";
        $paramData["score"]     = !empty($param["score"])       ? $param["score"]       : "";

        #文章添加
        $paramData["content"]   = !empty($param["content"])     ? $param["content"]     : "";
        $paramData["source"]    = !empty($param["source"])      ? $param["source"]      : "";
        $paramData["source_link"]=!empty($param["source_link"]) ? $param["source_link"] : "";
        $paramData["author"]    = !empty($param["author"])      ? $param["author"]      : "FIGHTZERO";
        $paramData["mypoint"]   = !empty($param["mypoint"])     ? $param["mypoint"]     : "奋斗吧，骚年~";
        $paramData["publish_at"]= !empty($param["publish_at"])  ? $param["publish_at"]  : date("Y-m-d");

        $res    = \DB::table("basketball")->insert( $paramData );

        return  $res;

    }

    /**
     * @desc    更新数据
     **/
    public static function basketEditDo( $id, $paramData=[] ){

        $res    = \DB::table("basketball")->where("id", $id)->update( $paramData );

        return  $res;

    }

    /**
     * @desc    删除数据
     **/
    public static function basketDelDo( $id ){

        $res    = \DB::table("basketball")->where("id", $id)->delete();

        return  $res;

    }


    /**
     * @desc    获取列表
     *
     * $sql    = "select * from blog_basketball where tags = 'XJS2017' ";
     * $res    = \DB::select($sql);
     * $res    = ToolArray::objectToArray($res);
     *
     **/
    public static function getBasketList( $tags = self::TAGS_XJS2017 ){

        if($tags == "ALL" || empty($tags)){
            $result = \DB::table("basketball")
                ->get();
        }else{
            $result = \DB::table("basketball")
                ->where("tags", $tags)
                ->get();
        }
        $result = ToolArray::objectToArray($result);
        foreach($result as &$val ){
            $val["picture"] = $val["picture"]?$val["picture"]:"baskets/default_basket.jpg";
        }
        return $result;
    }

    /**
     * @desc    获取详情
     *
     **/
    public static function getBasketDetail( $bid="" ){

        $result = \DB::table("basketball")
            ->where("id", $bid)
            ->first();

        $result = ToolArray::objectToArray($result);

        return $result;
    }


    /**
     * @desc    比赛球员
     **/
    public static function getBasketUser( $bid="" ,$status=self::STATUS_ON ){

        $result = \DB::table("basketuser")
            ->where("bid", $bid)
            ->where("status", $status)
            ->get();

        $result = ToolArray::objectToArray($result);

        return $result;

    }

    /**
     * @desc    获取球员信息
     **/
    public static function getUserList( $tags = "BASKET" ){

        $result = \DB::table("user")->where("tags", $tags)->get();

        $result = ToolArray::objectToArray($result);

        return $result;
    }

    /**
     * @desc    篮球宝贝
     **/
    public static function getBasketGril(){

        $urlArr     = [
            "assets/img/f14.jpg",
            "assets/img/f14.jpg",
            "assets/img/f14.jpg",
            "assets/img/f14.jpg",
            "assets/img/f14.jpg",
        ];

        $titleArr   = [];

        $introArr   = ArticleModel::getArticleRand(ArticleModel::TAGS_MRMY);

        return [
            "url"   => $urlArr[rand(0, 4)],
            "title" => "PAPA篮球",
            "intro" => $introArr["content"],
        ];

    }


    /**
     * @desc
     * 逻辑：
     * 1、照片
     * 2、比分
     * 3、球员
     * 4、文章
     **/
    public static function getBasketDetailFormat($bDetail=[], $bUsers=[]){

        $ranksName      = self::getRanksName();
        $userArr        = self::getUserList();
        $userArr        = ToolArray::arrayToKey($userArr, "id");


        if( $bDetail["tags"] == self::TAGS_XJS2017 ){
            $ranksOneName   = $ranksName[self::BASKET_RANKS_1];
            $ranksTwoName   = $ranksName[self::BASKET_RANKS_2];

        }else{
            $ranksOneName   = $ranksName[self::BASKET_RANKS_3];
            $ranksTwoName   = $ranksName[self::BASKET_RANKS_4];
        }

        $ranksOneUser   = [];
        $ranksTwoUser   = [];

        foreach ($bUsers as $uk => $uval){
            if( $uval['ranks'] == self::BASKET_RANKS_1 OR $uval['ranks'] == self::BASKET_RANKS_3 ){
                $ranksOneUser[] = $userArr[$uval['uid']] ? $userArr[$uval['uid']] : [] ;
            }else if($uval['ranks'] == self::BASKET_RANKS_2 OR $uval['ranks'] == self::BASKET_RANKS_4 ){
                $ranksTwoUser[] = $userArr[$uval['uid']] ? $userArr[$uval['uid']] : [] ;
            }
        }

        $bDetail["picture"]  = !empty($bDetail["picture"]) ? $bDetail["picture"] : "uploads/default_basket.jpg";

        $imageArr   = $videoArr = [];
        if( !empty($bDetail["images"]) ){
            $imageArr   = explode(",", $bDetail["images"]);
            foreach ($imageArr as &$ival){
                $ival   = "baskets/".$ival;
            }
        }
        if( !empty($bDetail["videos"]) ){
            $videoArr   = explode(",", $bDetail["videos"]);
        }

        $article    = ArticleModel::getArticleRand(ArticleModel::TAGS_MYSELF);
        $bGril      = self::getBasketGril();

        return [
            "bDetail"       => $bDetail,
            "ranksOneName"  => $ranksOneName,
            "ranksTwoName"  => $ranksTwoName,
            "ranksOneUser"  => $ranksOneUser,
            "ranksTwoUser"  => $ranksTwoUser,
            "article"       => $article,
            "bGril"         => $bGril,
            "imageArr"      => $imageArr,
            "videoArr"      => $videoArr,

        ];

    }



    /**
     * @desc    篮球费用
     *
     **/
    public static function getBasketFee(){
        $imgArr = [


        ];

        $basketFeeOneDesc   = "第一次收费：18人缴费，人均：10元，共计：180元";
        $basketFeeTwoDesc   = "第二次收费：24人缴费，人均：10元，共计：240元";
        $basketFeeThreeDesc = "第三次收费：24人缴费，人均：20元，共计：480元";
        $basketFeeFourDesc  = "第四次收费：26人缴费，人均：10元，共计：260元";

        $basketFeeArr       = BasketData::getBasketFee();
        $basketFeeOne       = $basketFeeArr["basketFeeOne"];
        $basketFeeTwo       = $basketFeeArr["basketFeeTwo"];
        $basketFeeThree     = $basketFeeArr["basketFeeThree"];
        $basketFeeFour      = $basketFeeArr["basketFeeFour"];

        $basketData      = [
            [
                "name"  => $basketFeeOneDesc,
                "data"  => $basketFeeOne,
            ],
            [
                "name"  => $basketFeeTwoDesc,
                "data"  => $basketFeeTwo,
            ],
            [
                "name"  => $basketFeeThreeDesc,
                "data"  => $basketFeeThree,
            ],
            [
                "name"  => $basketFeeFourDesc,
                "data"  => $basketFeeFour,
            ],
        ];

        $article    = ArticleModel::getArticleRand(ArticleModel::TAGS_MYSELF);
        $bGril      = self::getBasketGril();

        return [
            "basketData"    => $basketData,
            "article"       => $article,
            "bGril"         => $bGril,
        ];


    }


    /**
     * @desc    PAPA篮球赛程
     *
     *  名称     大比分
     *  日期
     *  比分
     *  备注
     *
     **/
    public static function getBasketNotice(){
        $imgArr = [

        ];

        $basketOneDesc  = "2017PAPA篮球夏季赛，比赛大比分：一队 4 - 3 二队";
        $basketTwoDesc  = "2017PAPA篮球夏季联赛";
        $basketThreeDesc= "2017PAPA篮球秋季赛，比赛大比分：一队 2 - 3 二队";

        $basketArr      = BasketData::getBasketNotice();
        $basketOne      = $basketArr["basketOne"];
        $basketTwo      = $basketArr["basketTwo"];
        $basketThree    = $basketArr["basketThree"];


        $basketData      = [
            [
                "name"  => $basketOneDesc,
                "data"  => $basketOne,
            ],
            [
                "name"  => $basketTwoDesc,
                "data"  => $basketTwo,
            ],
            [
                "name"  => $basketThreeDesc,
                "data"  => $basketThree,
            ],
        ];

        $article    = ArticleModel::getArticleRand(ArticleModel::TAGS_MYSELF);
        $bGril      = self::getBasketGril();

        #dd($basketOne);
        return [
            "basketData"    => $basketData,
            "article"       => $article,
            "bGril"         => $bGril,

        ];


    }


    /**
     * @desc    比赛队员
     * 1、获取比赛
     * 2、获取队员
     * 3、写入数据
     **/
    public static function basketUserAdd(){
        $tags   = self::TAGS_QJS2017;
        $bData  = self::getBasketList($tags);
        $uData  = self::getUserList();


        foreach ($bData as $kk=>$vv){
            $inData = [];
            $bid    = $vv["id"];
            $res    = self::getBasketUser( $bid );
            if(! $res ){
                foreach ($uData as $ukk=>$uvv){
                    $buinfo["uid"]      = $uvv["id"];
                    $buinfo["bid"]      = $bid;
                    $buinfo["ranks"]    = $uvv["ranks"];
                    $buinfo["remark"]   = "";
                    $inData[]  = $buinfo;
                }
                if($inData){
                    \DB::table("basketuser")->insert($inData);
                }

                echo __METHOD__." : ".__LINE__. " : " .$bid . " : ".json_encode($inData);
                echo "<hr>";
            }else{
                echo __METHOD__." : ".__LINE__. " : " . $bid . " -已存在 ";
                echo "<hr>";
            }
        }

    }

    /**
     * @desc
     **/
    public static function imagesAlbum( $images ){

        $resData    = [];
        if($images){
            $resData    = explode(",", $images);
        }

        return $resData;

    }


    /**
     * @desc    争霸赛
     **/
    public static function getBasketZbs(){


    }

}

?>
