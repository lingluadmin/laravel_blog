<?php

namespace App\Tools;

class ToolArray{


    /**
     * @param   $obj
     * @return  array
     * @desc    对象转换数组
      */
    public static function objectToArray( $obj = '' ){

        $obj  = (array)$obj;

        foreach( $obj as $k => $v ){
            if( gettype($v) =='object' || gettype($v) == 'array' ){
                $obj[$k] = (array)self::objectToArray($v);
            }
        }

        return $obj;
    }


    /**
     * @param   $result
     * @return  array
     * @desc    find-first不可直接跟toArray
     */
    public static function dbToArray($result){

        if(is_object($result)){
            return $result -> toArray();
        }else{
            return [];
        }

    }



    /**
     * @desc    重新设置数组的key为自定义的key
     * @param   array   $arr
     * @param   string  $key
     * @return  array
     */
    public static function arrayToKey($arr, $key = "id",$mul = 0) {

        $arr    = self::objectToArray($arr);
        $out    = array();

        foreach ((array)$arr as $value){
            if($mul){
                $out[$value[$key]][] = $value;
            }else{
                $out[$value[$key]] = $value;
            }
        }

        return $out;
    }



}
