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


}
