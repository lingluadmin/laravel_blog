<?php

namespace App\Http\Models;

use App\Tools\ToolArray;

class UserModel  extends BaseModel
{

    /**
     * @desc    写入数据
     **/
    public static function userAddDo( $param=[] ){

        $paramData["phone"]     = !empty($param["phone"])   ? $param["phone"]   : "";
        $paramData["name"]      = !empty($param["name"])    ? $param["name"]    : "";
        $paramData["nickname"]  = !empty($param["nickname"])? $param["nickname"]: "";
        $paramData["shortname"] = !empty($param["shortname"])?$param["shortname"]:"";
        $paramData["jersey_no"] = !empty($param["jersey_no"])?$param["jersey_no"]:"";
        $paramData["intro"]     = !empty($param["intro"])   ? $param["intro"]   : "";
        $paramData["remark"]    = !empty($param["remark"])  ? $param["remark"]  : "";
        $paramData["sort"]      = !empty($param["sort"])    ? $param["sort"]    : "";
        $paramData["position"]  = !empty($param["position"])? $param["position"]: "";
        $paramData["ranks"]     = !empty($param["ranks"])   ? $param["ranks"]   : "";
        $paramData["tags"]      = !empty($param["tags"])    ? $param["tags"]    : "";

        $res    = \DB::table("user")->insert( $paramData );

        return  $res;

    }


    /**
     * @desc    获取列表
     **/
    public static function getUserList( $tags = "BASKET" ){

        if($tags == "ALL" || empty($tags)){
            $result = \DB::table("user")
                ->get();
        }else{
            $result = \DB::table("user")
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
    public static function getBasketDetail( $id="" ){

        $result = \DB::table("user")
            ->where("id", $id)
            ->first();

        $result = ToolArray::objectToArray($result);

        return $result;
    }


}

?>