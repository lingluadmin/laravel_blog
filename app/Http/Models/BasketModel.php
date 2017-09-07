<?php

namespace App\Http\Models;

use App\Tools\ToolArray;

class BasketModel  extends BaseModel
{

    /**
     * @desc    写入数据
     **/
    public static function basketAddDo( $param=[] ){

        $paramData["title"]     = !empty($param["title"])   ? $param["title"]   : "";
        $paramData["keywords"]  = !empty($param["keywords"])? $param["keywords"]: self::TAGS_BASKET;
        $paramData["intro"]     = !empty($param["intro"])   ? $param["intro"]   : "谢谢支持PAPA篮球~~~";
        $paramData["picture"]   = !empty($param["picture"]) ? $param["picture"] : "";
        $paramData["description"]=!empty($param["description"]) ? $param["description"] : "";

        $paramData["tags"]      = !empty($param["tags"])    ? $param["tags"]    : self::TAGS_BASKET;
        $paramData["status"]    = !empty($param["status"])  ? $param["status"]  : "";
        $paramData["sort_num"]  = !empty($param["sort_num"])? $param["sort_num"]: "";
        $paramData["is_top"]    = !empty($param["is_top"])  ? $param["is_top"]  : "";
        $paramData["fee_intro"] = !empty($param["fee_intro"])?$param["fee_intro"]:"";
        $paramData["score"]     = !empty($param["score"])   ? $param["score"]   : "";

        #文章添加
        $paramData["content"]   = !empty($param["content"]) ? $param["content"] : "";
        $paramData["source"]    = !empty($param["source"])  ? $param["source"]  : "";
        $paramData["source_link"]=!empty($param["source_link"]) ? $param["source_link"] : "";
        $paramData["author"]    = !empty($param["author"])      ? $param["author"]      : "FIGHTZERO";
        $paramData["mypoint"]   = !empty($param["mypoint"])     ? $param["mypoint"]     : "奋斗吧，骚年~";
        $paramData["publish_at"]= !empty($param["publish_at"])  ? $param["publish_at"]  : date("Y-m-d");

        $res    = \DB::table("basketball")->insert( $paramData );

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
    public static function getBasketUser( $bid="" ){

        $result = \DB::table("basketuser")
            ->where("bid", $bid)
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

        $bDetail["images"]  = $bDetail["images"] ? $bDetail["images"] :"uploads/default_basket.jpg";


        $article    = self::getArticleList();
        $bGril      = self::getBasketGril();

        return [
            "bDetail"       => $bDetail,
            "ranksOneName"  => $ranksOneName,
            "ranksTwoName"  => $ranksTwoName,
            "ranksOneUser"  => $ranksOneUser,
            "ranksTwoUser"  => $ranksTwoUser,
            "article"       => $article,
            "bGril"         => $bGril,

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
        $basketFeeOne       = [
            [
                "name"      => "XJS-预热塞",
                "water"     => "",
                "fruit"     => "",
                "remark"    => "个人赞助",
            ],
            [
                "name"      => "XJS-球衣",
                "water"     => "",
                "fruit"     => "",
                "remark"    => "90元球衣运费",
            ],
            [
                "name"      => "XJS-G1",
                "water"     => "18元",
                "fruit"     => "",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-G2",
                "water"     => "19元",
                "fruit"     => "",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-G2",
                "water"     => "19元",
                "fruit"     => "25元",
                "remark"    => "余额：9元",
            ],

        ];

        $basketFeeTwo       = [
            [
                "name"      => "XJS-G4",
                "water"     => "36元",
                "fruit"     => "36元",
                "remark"    => "三包水",
            ],
            [
                "name"      => "XJS-G5",
                "water"     => "20元",
                "fruit"     => "30元",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-G6",
                "water"     => "30元",
                "fruit"     => "26元",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-技巧赛",
                "water"     => "18元",
                "fruit"     => "12元",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-G7",
                "water"     => "50元",
                "fruit"     => "25元",
                "remark"    => "三包水",
            ],
            [
                "name"      => "XJS-全明星",
                "water"     => "30元",
                "fruit"     => "23元",
                "remark"    => "余额：-87元",
            ],

        ];
        $basketFeeThree     = [
            [
                "name"      => "XJS-友谊赛",
                "water"     => "30元",
                "fruit"     => "35元",
                "remark"    => "",
            ],
            [
                "name"      => "XJLS-G1",
                "water"     => "15元",
                "fruit"     => "34元",
                "remark"    => "",
            ],
            [
                "name"      => "XJLS-G2",
                "water"     => "30元",
                "fruit"     => "35元",
                "remark"    => "",
            ],
            [
                "name"      => "XJLS-G3",
                "water"     => "30元",
                "fruit"     => "50元",
                "remark"    => "60斤大西瓜",
            ],
            [
                "name"      => "XJLS-G4",
                "water"     => "30元",
                "fruit"     => "15元",
                "remark"    => "",
            ],
            [
                "name"      => "QJS-G1",
                "water"     => "36元",
                "fruit"     => "",
                "remark"    => "18元一包水",
            ],
        ];
        $article    = self::getArticleList();
        $bGril      = self::getBasketGril();

        return [
            "basketFeeOneDesc"  => $basketFeeOneDesc,
            "basketFeeTwoDesc"  => $basketFeeTwoDesc,
            "basketFeeThreeDesc"=> $basketFeeThreeDesc,
            "basketFeeOne"      => $basketFeeOne,
            "basketFeeTwo"      => $basketFeeTwo,
            "basketFeeThree"    => $basketFeeThree,
            "article"           => $article,
            "bGril"             => $bGril,

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
        $basketThreeDesc= "2017PAPA篮球秋季赛，比赛大比分：一队 1 - 0 二队";
        $basketOne      = [
            [
                "name"      => "XJS-预热塞",
                "date"      => "2017年05月13日",
                "score"     => "一队 40 - 47 二队",
                "remark"    => "-*-",
            ],
            [
                "name"      => "XJS-G1",
                "date"      => "2017年05月20日",
                "score"     => "一队 74 - 71 二队",
                "remark"    => "-*-",
            ],
            [
                "name"      => "XJS-G2",
                "date"      => "2017年06月03日",
                "score"     => "一队 72 - 70 二队",
                "remark"    => "-*-",
            ],
            [
                "name"      => "XJS-G3",
                "date"      => "2017年06月10日",
                "score"     => "一队 66 - 77 二队",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-G4",
                "date"      => "2017年06月17日",
                "score"     => "一队 85 - 93 二队",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-G5",
                "date"      => "2017年06月24日",
                "score"     => "一队 73 - 71 二队",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-G6",
                "date"      => "2017年07月01日",
                "score"     => "一队 79 - 84 二队",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-技巧赛",
                "date"      => "2017年07月08日",
                "score"     => "最强快攻-WL，三分王-WZ",
                "remark"    => "得分王-ZZR",
            ],
            [
                "name"      => "XJS-G7",
                "date"      => "2017年07月15日",
                "score"     => "一队 84 - 81 二队",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-全明星",
                "date"      => "2017年07月22日",
                "score"     => "一队 126-126 二队",
                "remark"    => "",
            ],
            [
                "name"      => "XJS-友谊赛",
                "date"      => "2017年07月29日",
                "score"     => "一队 109- 98 二队",
                "remark"    => "",
            ],

        ];

        $basketTwo       = [
            [
                "name"      => "XJLS-G1",
                "date"     => "2017年08月05日",
                "score"     => "一队 101- 85 二队",
                "remark"    => "",
            ],
            [
                "name"      => "XJLS-G2",
                "date"      => "2017年08月12日",
                "score"     => "一队 52- 47 二队",
                "remark"    => "下雨打上半场",
            ],
            [
                "name"      => "XJLS-G3",
                "date"      => "2017年08月19日",
                "score"     => "",
                "remark"    => "G2下半场，G3半场",
            ],
            [
                "name"      => "XJLS-G4",
                "date"      => "2017年08月26日",
                "score"     => "一队 82 - 74 二队",
                "remark"    => "",
            ],

        ];
        $basketThree     = [
            [
                "name"      => "QJS-G1",
                "date"      => "2017年09月02日",
                "score"     => "一队 95 - 81 二队",
                "remark"    => "5人 VS 13人",
            ],
            [
                "name"      => "QJS-G2",
                "date"      => "2017年09月09日",
                "score"     => "",
                "remark"    => "",
            ],
            [
                "name"      => "QJS-G3",
                "date"      => "2017年09月16日",
                "score"     => "",
                "remark"    => "",
            ],
            [
                "name"      => "QJS-G4",
                "date"      => "2017年09月23日",
                "score"     => "",
                "remark"    => "",
            ],
        ];
        $article    = self::getArticleList();
        $bGril      = self::getBasketGril();

        #dd($basketOne);
        return [
            "basketOneDesc"     => $basketOneDesc,
            "basketTwoDesc"     => $basketTwoDesc,
            "basketThreeDesc"   => $basketThreeDesc,
            "basketOne"         => $basketOne,
            "basketTwo"         => $basketTwo,
            "basketThree"       => $basketThree,
            "article"           => $article,
            "bGril"             => $bGril,

        ];


    }

}

?>