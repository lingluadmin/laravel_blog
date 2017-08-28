<?php
/**
 * @desc    个人博客
 *
 **/
namespace App\Http\Controllers;
use App\Tools\ToolArray;
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
        $tagid  = $request->input('tagid',"ALL");


        

        if( empty($tagid) || $tagid  == "ALL" ){
            $csql   = "select COUNT(*) AS cnum from blog_article";
            $cres   = \DB::select($csql);
            $cres   = ToolArray::objectToArray($cres);
            dd($cres);
            $total  = !empty($cres[0]["cnum"]) ? $cres[0]["cnum"] : 0;
            $tpage  = ceil($total / $size);
            
            $page   = $page >= $tpage ? $tpage : $page;
            $offset = ($page - 1)* $size;

            $sql    = "select * from blog_article order by publish_at desc limit {$offset},{$size}";
        
        }else{

            $csql   = "select COUNT(*) AS cnum from blog_article where tagid = {$tagid}";
            $cres   = \DB::select($csql);
            $cres   = ToolArray::objectToArray($cres);

            $total  = $cres["cnum"] ? $cres["cnum"] : 0;
            $tpage  = ceil($total / $size);
            
            $page   = $page >= $tpage ? $tpage : $page;
            $offset = ($page - 1)* $size;

            $sql    = "select * from blog_article where tagid = {$tagid} order by publish_at desc limit {$offset},{$size}";
        }
        \Log::info(__METHOD__.' : '.__LINE__.$cres);
        \Log::info(__METHOD__.' : '.__LINE__.$csql);
        \Log::info(__METHOD__.' : '.__LINE__.$sql);
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        $assign["bList"]    = $res;
        $assign["page"]     = $page;
        $assign["tagid"]    = $tagid;
        #dd($assign);
		return view('blog.list', $assign);
    }


    /**
     * @desc    博客详情
     *
     **/
    public function blogDetail( Request $request ){
       # echo __METHOD__.' : '.__LINE__;
        echo "<pre>";
        $id     = $request->input('id', 1);
        $sql    = "select * from blog_article where id = {$id}";
        $res    = \DB::select($sql);
        $res    = ToolArray::objectToArray($res);

        var_dump($res);
        \Log::info(__METHOD__.' : '.__LINE__);
        exit;

        $assign["bDetail"]  = $res;
        return view('blog.detail', $assign);
    }

    /**
     * @desc    新增博文
     **/
    public function blogCreate(){
        echo __METHOD__.' : '.__LINE__;
        \Log::info(__METHOD__.' : '.__LINE__);
    }


}
