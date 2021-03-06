<?php

namespace App\Http\Models;

use App\Tools\ToolArray;

class ArticleModel extends BaseModel
{

    /**
     * @desc    写入数据
     **/
    public static function articleAddDo( $param=[] ){

        $paramData["title"]     = !empty($param["title"])       ? $param["title"]       : "";
        $paramData["keywords"]  = !empty($param["keywords"])    ? $param["keywords"]    : self::TAGS_ARTICLE;
        $paramData["intro"]     = !empty($param["intro"])       ? $param["intro"]       : "谢谢支持PAPA篮球~~~";
        $paramData["picture"]   = !empty($param["picture"])     ? $param["picture"]     : "";
        $paramData["description"]=!empty($param["description"]) ? $param["description"] : "";

        #文章添加
        $paramData["content"]   = !empty($param["content"])     ? $param["content"]     : "";
        $paramData["source"]    = !empty($param["source"])      ? $param["source"]      : "";
        $paramData["source_link"]=!empty($param["source_link"]) ? $param["source_link"] : "";

        $paramData["tags"]      = !empty($param["tags"])        ? $param["tags"]        : self::TAGS_ARTICLE;
        $paramData["status"]    = !empty($param["status"])      ? $param["status"]      : "";
        $paramData["sort_num"]  = !empty($param["sort_num"])    ? $param["sort_num"]    : "";
        $paramData["is_top"]    = !empty($param["is_top"])      ? $param["is_top"]      : "";

        $paramData["author"]    = !empty($param["author"])      ? $param["author"]      : "FIGHTZERO";
        $paramData["mypoint"]   = !empty($param["mypoint"])     ? $param["mypoint"]     : "奋斗吧，骚年~";
        $paramData["publish_at"]= !empty($param["publish_at"])  ? $param["publish_at"]  : date("Y-m-d");

        $res    = \DB::table("article")->insert( $paramData );

        return  $res;

    }


    /**
     * @desc    更新数据
     **/
    public static function articleEditDo( $id, $paramData=[] ){

        $res    = \DB::table("article")->where("id", $id)->update( $paramData );

        return  $res;

    }

    /**
     * @desc    删除数据
     **/
    public static function articleDelDo( $id ){

        $res    = \DB::table("article")->where("id", $id)->delete();

        return  $res;

    }

    /**
     * @desc    获取列表
     **/
    public static function getArticleRecord( $tags = "",$page=1, $size=10 ){

        #$offset = self::getLimitStart( $page, $size );

        if($tags == "ALL" || empty($tags)){

            $cnum   = \DB::table("article")->count();
            $maxPage= ceil($cnum/$size);
            $page   = $page >= $maxPage ? $maxPage : $page;
            $offset = self::getLimitStart( $page, $size );

            $result = \DB::table("article")
                ->orderBy("id", "desc")
                ->skip($offset)
                ->take($size)
                ->get();
        }else{

            $cnum   = \DB::table("article")->where("tags", $tags)->count();
            $maxPage= ceil($cnum/$size);
            $page   = $page >= $maxPage ? $maxPage : $page;
            $offset = self::getLimitStart( $page, $size );

            $result = \DB::table("article")
                ->where("tags", $tags)
                ->orderBy("id", "desc")
                ->skip($offset)
                ->take($size)
                ->get();
        }

        $result = ToolArray::objectToArray($result);

        return $result;
    }


    /**
     * @desc    获取详情
     *
     **/
    public static function getArticleDetail( $id="" ){

        $result = \DB::table("article")
            ->where("id", $id)
            ->first();

        $result = ToolArray::objectToArray($result);

        return $result;
    }

    /**
     * @desc    随机获取一条数据
     **/
    public static function getArticleRand( $tags = self::TAGS_MRMY )
    {
        $sql    = "select * from blog_article where `tags` = '{$tags}' ORDER BY RAND() LIMIT 1";

        $result = \DB::select($sql);

        $result = ToolArray::objectToArray($result);

        $resData["content"] = !empty($result[0]["content"]) ? $result[0]["content"]: "";
        $resData["author"]  = !empty($result[0]["author"])  ? $result[0]["author"] : "FIGHTZERO";

        return $resData;
    }

    /**
    * @desc   唯美哲理句子：人生需要沉淀，宁静才能致远
    * 网址：   https://www.5article.com/topic/171300.html
    *
    **/
   public static function getArticleZhili()
   {
       return [
           "生活有进有退输什么也不能输了心情。心情好，什么都好，心情不好，一切都乱了。不要因为世界虚伪，你也变得虚伪了。别让自己活得太累。应该学着想开、看淡，学着深藏。别让自己活得太累。适时放松自己，寻找宣泄，给疲惫的心灵解解压。给时间一点时间一切都会过去。",
           "今天的事，今天办；能办的事，马上办；困难的事，想法办；限时的事，计时办；重要的事，优先办；琐碎的事，抽空办；个人的事，下班办；别人的事，努力办；着急的事，细心办；重大的事，清楚办；困难的事，分步办；讨厌的事，耐心办；开心的事，开心办；所有的事，认真办。",
           "有时候为一个人倾尽一切，比不过别人什么都不做。人生学会画句号，就是有始有终，不会半途而废。无论遇到什么事情，都要对自己说：这是正常的。而不要说：我怎么这么倒霉？因为比你倒霉的人多的是，积极、阳光的心态能助你走出逆境！",
           "有些事，你把它藏到心里，也许会更好，等时间长了，也就变成了故事。人的一生，总是难免有浮沉。生活是一磁带包罗万有的歌，每天唱不完的是喜怒哀乐，不停流淌着的旋律是命运的起起落落。若想谱写出一首首优美动听的歌谣，学会放下该忘记的，记住该记住的。",
           "人生的起点和终点之间，存在一段距离，那就是生活；在匆促奔波的旅途中，别害怕自己的迷茫，谋事在人，成事在天。做过的事不要后悔。经常可以看到不少人自怨自艾，为曾经做过的错事后悔不已，为过去的事而消沉，为过去的事而落魄。世上永远没有后悔药。",
           "人生中，很多东西都不属于我们，属于我们的只是一种经历，一种成长，一种体验。欲望太多，只会增添人生的负累，明智的人知道如何选择，能够适时地放弃，能够果敢地选择自己的人生方向。只有懂得放下过往，放下欲望，放下贪婪的人，才能过得更加充实，轻松和精彩。",
           "有时候，人就是如此，对自己最好的人明明就在身边，但是，却不好好珍惜，去追寻一些不属于自己的东西，等到失去了，才感觉心里空荡荡了，包裹着心的那层温暖消失了，才知道后悔了。不管过去与未来，眼前的人才是最重要的，要好好地把握眼前的人，莫要失去才后悔。",
             "人生需要沉淀，宁静才能致远；人生需要反思，常回头看看，才能在品味得失和甘苦中升华。向前看是梦想和目标；向后看是检验和修正。不艾，不怨，心坦然。生活，有苦乐；人生，有起落。学会挥袖从容，暖笑无殇。快乐，不是拥有的多，而是计较的少；乐观，不是没烦恼，而是懂得知足。",

       ];

   }


}



?>