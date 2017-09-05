<?php
/**
 * @desc    博客Model
 **/

namespace App\Http\Models;

use App\Tools\ToolArray;

class BlogModel{


    /**
     * @desc    写入数据
     **/
    public static function blogAddDo( $paramData=[] ){

        $res    = \DB::table("article")->insert( $paramData );

        return  $res;

    }


    /**
     * @desc    更新数据
     **/
    public static function blogEditDo( $id, $paramData=[] ){

        $res    = \DB::table("article")->where("id", $id)->update( $paramData );

        return  $res;

    }

    /**
     * @desc    删除数据
     **/
    public static function blogDelDo( $id ){

        $res    = \DB::table("article")->where("id", $id)->delete();

        return  $res;

    }

    /**
     * @desc    获取列表
     **/
    public static function getBlogList( $tags = "",$page=1, $size=10 ){

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
    public static function getBlogDetail( $id="" ){

        $result = \DB::table("article")
            ->where("id", $id)
            ->first();

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