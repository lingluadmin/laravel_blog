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
        $paramData["intro"]     = !empty($param["intro"])   ? $param["intro"]   : "";
        $paramData["keywords"]  = !empty($param["keywords"])? $param["keywords"]: "";
        $paramData["description"]=!empty($param["description"]) ? $param["description"] : "";
        $paramData["images"]    = !empty($param["images"])  ? $param["images"]  : "";
        $paramData["status"]    = !empty($param["status"])  ? $param["status"]  : "";
        $paramData["tags"]      = !empty($param["tags"])    ? $param["tags"]    : "";
        $paramData["content"]   = !empty($param["content"]) ? $param["content"] : "";
        $paramData["author"]    = !empty($param["author"])  ? $param["author"]  : "";
        $paramData["publish_at"]= !empty($param["publish_at"])  ? $param["publish_at"]  : "";

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


}

?>