<?php
/**
 * @desc    博客Model
 **/

namespace App\Http\Models;

use App\Tools\ToolArray;

class BlogModel  extends BaseModel
{


    /**
     * @desc    写入数据
     **/
    public static function blogAddDo( $param=[] ){

        $paramData["title"]     = !empty($param["title"])       ? $param["title"]       : "";
        $paramData["keywords"]  = !empty($param["keywords"])    ? $param["keywords"]    : self::TAGS_BLOG;
        $paramData["intro"]     = !empty($param["intro"])       ? $param["intro"]       : "谢谢支持PAPA篮球~~~";
        $paramData["picture"]   = !empty($param["picture"])     ? $param["picture"]     : "";
        $paramData["description"]=!empty($param["description"]) ? $param["description"] : "";

        #文章添加
        $paramData["content"]   = !empty($param["content"])     ? $param["content"]     : "";
        $paramData["source"]    = !empty($param["source"])      ? $param["source"]      : "";
        $paramData["source_link"]=!empty($param["source_link"]) ? $param["source_link"] : "";

        $paramData["tags"]      = !empty($param["tags"])        ? $param["tags"]        : self::TAGS_BLOG;
        $paramData["status"]    = !empty($param["status"])      ? $param["status"]      : "";
        $paramData["sort_num"]  = !empty($param["sort_num"])    ? $param["sort_num"]    : "";
        $paramData["is_top"]    = !empty($param["is_top"])      ? $param["is_top"]      : "";

        $paramData["author"]    = !empty($param["author"])      ? $param["author"]      : "FIGHTZERO";
        $paramData["mypoint"]   = !empty($param["mypoint"])     ? $param["mypoint"]     : "奋斗吧，骚年~";
        $paramData["publish_at"]= !empty($param["publish_at"])  ? $param["publish_at"]  : date("Y-m-d");

        $res    = \DB::table("blog")->insert( $paramData );

        return  $res;

    }


    /**
     * @desc    更新数据
     **/
    public static function blogEditDo( $id, $paramData=[] ){

        $res    = \DB::table("blog")->where("id", $id)->update( $paramData );

        return  $res;

    }

    /**
     * @desc    删除数据
     **/
    public static function blogDelDo( $id ){

        $res    = \DB::table("blog")->where("id", $id)->delete();

        return  $res;

    }

    /**
     * @desc    获取列表
     **/
    public static function getBlogList( $tags = "",$page=1, $size=10 ){

        #$offset = self::getLimitStart( $page, $size );

        if($tags == "ALL" || empty($tags)){

            $cnum   = \DB::table("blog")->count();
            $maxPage= ceil($cnum/$size);
            $page   = $page >= $maxPage ? $maxPage : $page;
            $offset = self::getLimitStart( $page, $size );

            $result = \DB::table("blog")
                ->orderBy("id", "desc")
                ->skip($offset)
                ->take($size)
                ->get();
        }else{

            $cnum   = \DB::table("blog")->where("tags", $tags)->count();
            $maxPage= ceil($cnum/$size);
            $page   = $page >= $maxPage ? $maxPage : $page;
            $offset = self::getLimitStart( $page, $size );

            $result = \DB::table("blog")
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
    public static function getBlogDetail( $id="" ){

        $result = \DB::table("blog")
            ->where("id", $id)
            ->first();

        $result = ToolArray::objectToArray($result);

        return $result;
    }

}


?>