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
        TAGS_XJS2017    = "XJS2017",    //夏季赛2017
        TAGS_XJLS2017   = "XJLS2017",   //夏季联赛2017
        TAGS_QJS2017    = "QJS2017",    //秋季赛2017
        TAGS_BASKET     = "BASKET",     //篮球
        TAGS_BLOG       = "BLOG",       //博客
        TAGS_ARTICLE    = "ARTICLE",    //文章

        ## 标签分组
        GROUPS_ALL      = "ALL",        //标签分组-全部可用
        GROUPS_BASKET   = "BASKET",     //标签分组-篮球
        GROUPS_BLOG     = "BLOG",       //标签分组-博客

        ## 状态
        STATUS_ALL      = "ALL",        //状态-全部
        STATUS_ON       = 1,            //状态-开
        STATUS_OFF      = 9,            //状态-关

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
        $introArr   = [
            "真的猛士，敢于直面惨淡的人生，敢于正视淋漓的鲜血。 —— 鲁迅",
            "友谊像清晨的雾一样纯洁，奉承并不能得到友谊，友谊只能用忠实去巩固它。 —— 马克思",
            "书籍是全世界的营养品。生活里没有书籍，就好像没有阳光；智慧里没有书籍，就好像鸟儿没有翅膀。 —— 莎士比亚",
            "零星的时间，如果能敏捷地加以利用，可成为完整的时间。所谓“积土成山”是也，失去一日甚易，欲得回已无途。 —— 卡耐基",
            "友谊总需要用忠诚去播种，用热情去灌溉，用原则去培养，用谅解去护理。 —— 马克思",
        ];

        return [
            "url"   => $urlArr[rand(0, 4)],
            "title" => "PAPA篮球",
            "intro" => $introArr[rand(0, 4)],
        ];

    }

    /**
     * @desc    励志、鸡汤、美文
     **/
    public static function getArticleList(){

        $articleArr = [
            "一个经常得到别人帮助的人，一定是一个经常去帮助别人的人。奉献的人与人之间的关心友爱，这是做人的一种本能，一种美德。在人生中每个人都是不平坦的，当然会有些波折，有了超脱的心胸和胸怀，才能度过困难和战胜一切邪恶",
            "人生就象一杯酒，春天是橄榄酒，夏季是火爆酒，秋天是葡萄酒，冬季是老白干；人生好比一支歌，春季是流行曲，夏天是摇滚乐，秋季是校园民谣，冬天是美声乐",
            "生命最高境界就是快乐。因为你快乐，所以我快乐，因为你我快乐，所以大家快乐，因为大家快乐，所以你我快乐。",
            "学会知足，人们就能用一种超然的心对待眼前的一切，不以物喜，不以己悲，不做世间功利的奴隶，也不为凡尘中各种搅扰、牵累、烦恼所左右，使自己的人生不断得以升华。",
        ];

        return [
            "content"   => $articleArr[rand(0, 3)],
            "author"    => "FIGHTZERO"

        ];

    }



}

?>