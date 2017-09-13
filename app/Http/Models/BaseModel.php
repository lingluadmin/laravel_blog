<?php

namespace App\Http\Models;

use App\Tools\ToolArray;

class BaseModel{


    const
        BASKET_RANKS_1  = "XJS2017YD",    // 2017夏季赛一队
        BASKET_RANKS_2  = "XJS2017ED",    // 2017夏季赛二队
        BASKET_RANKS_3  = "QJS2017YD",    // 2017秋季赛白队
        BASKET_RANKS_4  = "QJS2017ED",    // 2017秋季赛蓝队

        ## 标签
        TAGS_XJS2017    = "XJS2017",    //标签-夏季赛2017
        TAGS_XJLS2017   = "XJLS2017",   //标签-夏季联赛2017
        TAGS_QJS2017    = "QJS2017",    //标签-标签-秋季赛2017
        TAGS_BASKET     = "BASKET",     //标签-篮球
        TAGS_BLOG       = "BLOG",       //标签-博客
        TAGS_ARTICLE    = "ARTICLE",    //标签-文章
        TAGS_MRMY       = "MRMY",       //标签-名人名言
        TAGS_MYSELF     = "MYSELF",     //标签-日常生活
        TAGS_ALL        = "ALL",        //标签-全部

        ## 标签分组
        GROUPS_ALL      = "ALL",        //标签分组-全部可用
        GROUPS_BASKET   = "BASKET",     //标签分组-篮球
        GROUPS_BLOG     = "BLOG",       //标签分组-博客

        ## 状态
        STATUS_ALL      = "ALL",        //状态-全部
        STATUS_INIT     = 0,            //状态-初始值、默认值-关闭，未发布
        STATUS_ON       = 1,            //状态-开启、可用
        STATUS_OFF      = 9,            //状态-假删除

        END     = true;

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
     * @desc    篮球赛TAGS
     *
     **/
    public static function getBasketTagsArr(){

        return [
            "XJS2017"   => "2017PAPA篮球-夏季赛",
            "XJLS2017"  => "2017PAPA篮球-夏季联赛",
            "QJS2017"   => "2017PAPA篮球-秋季赛",
            "CGS2017"   => "2017PAPA篮球-常规赛",
        ];
    }


    /**
     * @desc    获取标签列表
     **/
    public static function getTagsList( $status = self::STATUS_ALL ){

        if($status == "ALL" || empty($status)){
            $result = \DB::table("tags")
                ->get();
        }else{
            $result = \DB::table("tags")
                ->where("status", $status)
                ->get();
        }
        $result = ToolArray::objectToArray($result);

        return $result;
    }

    /**
     * @desc    根据分组获取标签列表
     **/
    public static function getTagsByGroups( $groups = self::GROUPS_ALL, $status=self::STATUS_ON ){

        if($groups == "ALL" || empty($groups)){
            $result = \DB::table("tags")
                ->get();
        }else{
            $result = \DB::table("tags")
                ->where("groups", $groups)
                ->where("status", $status)
                ->get();
        }
        $result = ToolArray::objectToArray($result);

        return $result;
    }


    /**
     * @desc    返回查询开始值
     * @param   $page
     * @param   $size
     * @return  mixed
     *
     **/
    public static function getLimitStart($page,$size)
    {
        return ( max(0, $page -1) ) * $size;
    }


}

?>