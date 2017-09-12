<?php
/**
 * @desc    个人博客
 *
 **/
namespace App\Http\Controllers;
use App\Http\Models\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller {

    const 
        TAG_XJS         = 1,    // 夏季赛
        TAG_XJLS        = 2,    // 夏季联赛
        TAG_PERSON      = 3,    // 个人风采
        TAG_PHOTO       = 4,    // 照片墙

        END         = true;


	/**
	 * @desc    博客首页
     * @return  Response
     *
     * @标签
     * @博文
     * @分页
	 */
	public function blogList( Request $request )
    {
        \Log::info(__METHOD__.' : '.__LINE__);
        
        $page   = $request->input('page', 1);
        $size   = $request->input('size', 1);
        $tags   = $request->input('tags', "ALL");

        $res    = BlogModel::getBlogList($tags, $page, $size);
        foreach ($res as &$val){
            $val["picture"] = $val["picture"] ? $val["picture"]  : "";
        }

        #$assign["bList"]    = $res;
        $article= BlogModel::getArticleList();
        $bGril  = BlogModel::getBasketGril();

        $assign["bList"]    = $res;
        $assign["article"]  = $article;
        $assign["bGril"]    = $bGril;

        $assign["page"]     = $page;
        $assign["tags"]     = $tags;
        dd($assign);
		return view('blog.blist', $assign);
    }


    /**
     * @desc    博客详情
     **/
    public function blogDetail( Request $request ){

        $id     = $request->input('id', 1);
        $res     = BlogModel::getBlogDetail($id);
        $assign["bDetail"]  = $res;
        return view('blog.bdetail', $assign);
    }


}
