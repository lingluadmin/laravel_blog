<?php

namespace App\Http\Models;

use App\Tools\ToolArray;

class BasketModel
{
    const
        BASKET_RANKS_1  = 1,    // 2017夏季赛一队
        BASKET_RANKS_2  = 2,    // 2017夏季赛二队
        BASKET_RANKS_3  = 3,    // 2017秋季赛白队
        BASKET_RANKS_4  = 4,    // 2017秋季赛蓝队

        END     = true;

    const
        TAGS_XJS2017    = "XJS2017",    //夏季赛2017
        TAGS_XJLS2017   = "XJLS2017",   //夏季联赛2017
        TAGS_QJS2017    = "QJS2017",    //秋季赛2017
        END1    = true;


    /**
     * @desc    队伍名称
     *
     **/
    public static function getRanksName(){
        return [
            self::BASKET_RANKS_1    => "PAPA篮球一队-啪啪无敌",
            self::BASKET_RANKS_2    => "PAPA篮球二队-所向披靡",
            self::BASKET_RANKS_3    => "PAPA篮球-白队",
            self::BASKET_RANKS_4    => "PAPA篮球-蓝队",
        ];

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
    public static function getUserList( $source = "BASKET" ){

        $result = \DB::table("user")->where("source", $source)->get();

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

        return [
            "bDetail"       => $bDetail,
            "ranksOneName"  => $ranksOneName,
            "ranksTwoName"  => $ranksTwoName,
            "ranksOneUser"  => $ranksOneUser,
            "ranksTwoUser"  => $ranksTwoUser,

        ];

    }

}

?>