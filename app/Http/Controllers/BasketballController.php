<?php
/**
 * @desc    篮球集锦
 *
 **/
namespace App\Http\Controllers;
use App\Http\Models\BasketModel;
use Illuminate\Http\Request;

class BasketballController extends Controller {

    const 
        BASKET_RANKS_1  = 1,    // 2017夏季赛一队
        BASKET_RANKS_2  = 2,    // 2017夏季赛二队
        BASKET_RANKS_3  = 3,    // 2017秋季赛白队
        BASKET_RANKS_4  = 4,    // 2017秋季赛蓝队

        END     = true;

    /**
     * @desc    PAPA篮球首页
     **/
    public function llbasketList( Request $request ){

        $tags   = $request->input('tags', "ALL");

        $res    = BasketModel::getBasketList($tags);

        $article= BasketModel::getArticleList();
        $bGril  = BasketModel::getBasketGril();

        $assign["bList"]    = $res;
        $assign["article"]  = $article;
        $assign["bGril"]    = $bGril;

        return view('basketball.blist', $assign);

    }

    /**
     *
     **/
    public function llbasketDetail( Request $request ){

        $id         = $request->input('id',"1");
        $bDetail    = BasketModel::getBasketDetail($id);
        $bUsers     = BasketModel::getBasketUser($id);

        $formatData = BasketModel::getBasketDetailFormat($bDetail, $bUsers);
        #dd($formatData);
        return view('basketball.bdetail',$formatData);

    }


    /**
     * @desc    PAPA篮球费用
     *
     */
    public function basketFee(){

        $formatData  = BasketModel::getBasketFee();

        return view('basketball.bfee',$formatData);

    }

    /**
     * @desc    PAPA篮球费用
     *
     */
    public function basketNotice(){

        $formatData  = BasketModel::getBasketNotice();

        return view('basketball.bnotice',$formatData);

    }

    /**
     * @desc    个人风采照
     *
     **/
    public function basketPerson(){

        echo __METHOD__.' : '.__LINE__;

    }

    /**
     * @desc    篮球照片墙
     *
     **/
    public function basketPhoto(){

    }

    /**
     * @desc
     * 
     */
    public function personCollect(){

    }


}
