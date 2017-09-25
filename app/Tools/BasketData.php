<?php

namespace App\Tools;

class BasketData{

   /**
    * @desc 篮球费用
    **/
   public static function getBasketFee(){

       # oneFee
       # twoFee
       # threeFee
       # fourFee

       $basketFeeOne       = [
           [
               "name"      => "XJS-预热塞",
               "water"     => "",
               "fruit"     => "",
               "remark"    => "个人赞助",
           ],
           [
               "name"      => "XJS-球衣",
               "water"     => "",
               "fruit"     => "",
               "remark"    => "90元球衣运费",
           ],
           [
               "name"      => "XJS-G1",
               "water"     => "18元",
               "fruit"     => "",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-G2",
               "water"     => "19元",
               "fruit"     => "",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-G2",
               "water"     => "19元",
               "fruit"     => "25元",
               "remark"    => "余额：9元",
           ],

       ];

       $basketFeeTwo       = [
           [
               "name"      => "XJS-G4",
               "water"     => "36元",
               "fruit"     => "36元",
               "remark"    => "陈总-买水20元",
           ],
           [
               "name"      => "XJS-G5",
               "water"     => "20元",
               "fruit"     => "30元",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-G6",
               "water"     => "30元",
               "fruit"     => "26元",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-技巧赛",
               "water"     => "18元",
               "fruit"     => "12元",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-G7",
               "water"     => "50元",
               "fruit"     => "25元",
               "remark"    => "三包水",
           ],
           [
               "name"      => "XJS-全明星",
               "water"     => "30元",
               "fruit"     => "23元",
               "remark"    => "余额：-87元",
           ],

       ];
       $basketFeeThree     = [
           [
               "name"      => "XJS-友谊赛",
               "water"     => "30元",
               "fruit"     => "35元",
               "remark"    => "",
           ],
           [
               "name"      => "XJLS-G1",
               "water"     => "15元",
               "fruit"     => "34元",
               "remark"    => "",
           ],
           [
               "name"      => "XJLS-G2",
               "water"     => "30元",
               "fruit"     => "35元",
               "remark"    => "",
           ],
           [
               "name"      => "XJLS-G3",
               "water"     => "30元",
               "fruit"     => "50元",
               "remark"    => "60斤大西瓜",
           ],
           [
               "name"      => "XJLS-G4",
               "water"     => "30元",
               "fruit"     => "15元",
               "remark"    => "",
           ],
           [
               "name"      => "QJS-G1",
               "water"     => "36元",
               "fruit"     => "",
               "remark"    => "18元一包水",
           ],
           [
               "name"      => "QJS-G2",
               "water"     => "30元",
               "fruit"     => "26元",
               "remark"    => "余额：-3元",
           ],
       ];
       $basketFeeFour       = [
    	   [
               "name"      => "QJS-G3",
               "water"     => "30元",
               "fruit"     => "个人赞助",
               "remark"    => "周日比赛",
           ],
	       [
               "name"      => "QJS-G4",
               "water"     => "30元",
               "fruit"     => "30元",
               "remark"    => "",
           ],


       ];

       return [
           "basketFeeOne"   => $basketFeeOne,
           "basketFeeTwo"   => $basketFeeTwo,
           "basketFeeThree" => $basketFeeThree,
           "basketFeeFour"  => $basketFeeFour,

       ];

   }
   /**
    * @desc 篮球公告
    **/
   public static function getBasketNotice(){

       $basketOne      = [
           [
               "name"      => "XJS-预热塞",
               "date"      => "2017年05月13日",
               "score"     => "一队 40 - 47 二队",
               "remark"    => "-*-",
           ],
           [
               "name"      => "XJS-G1",
               "date"      => "2017年05月20日",
               "score"     => "一队 74 - 71 二队",
               "remark"    => "-*-",
           ],
           [
               "name"      => "XJS-G2",
               "date"      => "2017年06月03日",
               "score"     => "一队 72 - 70 二队",
               "remark"    => "-*-",
           ],
           [
               "name"      => "XJS-G3",
               "date"      => "2017年06月10日",
               "score"     => "一队 66 - 77 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-G4",
               "date"      => "2017年06月17日",
               "score"     => "一队 85 - 93 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-G5",
               "date"      => "2017年06月24日",
               "score"     => "一队 73 - 71 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-G6",
               "date"      => "2017年07月01日",
               "score"     => "一队 79 - 84 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-技巧赛",
               "date"      => "2017年07月08日",
               "score"     => "最强快攻-WL，三分王-WZ",
               "remark"    => "得分王-ZZR",
           ],
           [
               "name"      => "XJS-G7",
               "date"      => "2017年07月15日",
               "score"     => "一队 84 - 81 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-全明星",
               "date"      => "2017年07月22日",
               "score"     => "一队 126-126 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-友谊赛",
               "date"      => "2017年07月29日",
               "score"     => "一队 109- 98 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJS-大比分",
               "date"      => "2017年07月29日",
               "score"     => "一队 4 - 3 二队",
               "remark"    => "夏季赛：一队获取胜利",
           ],

       ];

       $basketTwo       = [
           [
               "name"      => "XJLS-G1",
               "date"     => "2017年08月05日",
               "score"     => "一队 101- 85 二队",
               "remark"    => "",
           ],
           [
               "name"      => "XJLS-G2",
               "date"      => "2017年08月12日",
               "score"     => "一队 52- 47 二队",
               "remark"    => "下雨打上半场",
           ],
           [
               "name"      => "XJLS-G3",
               "date"      => "2017年08月19日",
               "score"     => "",
               "remark"    => "G2下半场，G3半场",
           ],
           [
               "name"      => "XJLS-G4",
               "date"      => "2017年08月26日",
               "score"     => "一队 82 - 74 二队",
               "remark"    => "",
           ],

       ];
       $basketThree     = [
           [
               "name"      => "QJS-G1",
               "date"      => "2017年09月02日",
               "score"     => "一队 95 - 81 二队",
               "remark"    => "5人 VS 13人",
           ],
           [
               "name"      => "QJS-G2",
               "date"      => "2017年09月09日",
               "score"     => "一队 75 - 81 二队",
               "remark"    => "",
           ],
           [
               "name"      => "QJS-G3",
               "date"      => "2017年09月17日",
               "score"     => "一队 89 - 112 二队",
               "remark"    => "",
           ],
           [
               "name"      => "QJS-G4",
               "date"      => "2017年09月23日",
               "score"     => "一队 91 - 85 二队",
               "remark"    => "",
           ],
           [
               "name"      => "QJS-大比分",
               "date"      => "----",
               "score"     => "一队 2 - 2 二队",
               "remark"    => "秋季赛大比分",
           ],
       ];


       return [
          "basketOne"   => $basketOne,
          "basketTwo"   => $basketTwo,
          "basketThree" => $basketThree,
       ];
   }


}
