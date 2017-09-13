@extends('common.layout')

@section('title','PAPA篮球')

@section('content')

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <!--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/> -->
        <h2 class="am-hide-sm-only">FIGHTZERO</h2>
        @if( Session::has('message') )
            {{ Session::get('message') }}
        @elseif( Session::has('error') )
            {{ Session::get('error') }}
        @endif
    </div>
</header>
<hr>
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
        <form class="am-form am-form-horizontal" action="basketAddDo" method="post">
            <fieldset>
                <legend>添加比赛</legend>
                <div class="am-form-group">
                    <label for="doc-select-1">标签</label>
                    <select id="doc-select-1" name="tags">
                        @foreach($tagsArr as $kk=>$tagname)
                            <option value="{{ $kk }}">{{ $tagname }}</option>
                        @endforeach
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <div class="am-form-group">
                    <label for="doc-title">标题</label>
                    <input type="text" class="" name="title"    placeholder="">
                </div>
                <div class="am-form-group">
                    <label for="doc-keywords">关键字</label>
                    <input type="text" class="" name="keywords" placeholder="BASKET">
                </div>
                <div class="am-form-group">
                    <label for="doc-intro">简介</label>
                    <input type="text" class="" name="intro"    placeholder="">
                </div>

                <div class="am-form-group">
                    <label for="doc-description">描述</label>
                    <input type="text" class="" name="description"  placeholder="">
                </div>
                <div class="am-form-group am-form-icon">
                    <label for="doc-ta-1">日期</label>
                    <i class="am-icon-calendar"></i>
                    <input type="text" class="am-form-field" placeholder="日期" data-am-datepicker readonly name="publish_at" />
                </div>
                <div class="am-form-group">
                    <label for="doc-fee_intro">费用</label>
                    <input type="text" class="" name="fee_intro" placeholder="水费：--，水果：--">
                </div>
                <div class="am-form-group">
                    <label for="doc-score">比分</label>
                    <input type="text" class="" name="score"    placeholder="一队- ** - ** 二队">
                </div>

                <div class="am-form-group am-form-file">
                    <label for="doc-ipt-file">图片</label>
                    <div>
                        <button type="button" class="am-btn am-btn-default am-btn-sm">
                            <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                    </div>
                    <input type="file" id="doc-ipt-file" name="imgs">
                </div>

                <!-- 文章添加 -->
                {{--
                <div class="am-form-group">
                    <label for="doc-ta-1">文章</label>
                    <textarea class="" rows="5" id="doc-ta-1" name="content"></textarea>
                </div>

                <div class="am-form-group">
                    <label for="doc-author">作者</label>
                    <input type="text" class="" name="author" placeholder="">
                </div>

                <div class="am-form-group">
                    <label class="am-form-label">来源</label>
                    <div>
                        <label class="am-radio-inline">
                            <input type="radio" name="source" value="INTERNET" checked>网络
                        </label>
                        <label class="am-radio-inline">
                            <input type="radio" name="source" value="MYSELF" >原创
                        </label>
                    </div>
                </div>

                <div class="am-form-group">
                    <label for="doc-source_link">网址</label>
                    <input type="text" class="" name="source_link" placeholder="">
                </div>
                <div class="am-form-group">
                    <label for="doc-mypoint">我的描述</label>
                    <input type="text" class="" name="mypoint" placeholder="">
                </div>
                <div class="am-form-group">
                    <label for="doc-sort_num">排序</label>
                    <input type="text" class="" name="sort_num" placeholder="">
                </div>
                <div class="am-form-group">
                    <label class="am-form-label">状态</label>
                    <div>
                        <label class="am-radio-inline">
                            <input type="radio" name="status" value="0">未发布
                        </label>
                        <label class="am-radio-inline">
                            <input type="radio" name="status" value="1" checked>已发布
                        </label>
                    </div>
                </div>
                <div class="am-form-group">
                    <label class="am-form-label">置顶</label>
                    <div>
                        <label class="am-radio-inline">
                            <input type="radio" name="is_top" value="0" checked>不置顶
                        </label>
                        <label class="am-radio-inline">
                            <input type="radio" name="is_top" value="1" >置顶
                        </label>
                    </div>
                </div>
                --}}
                <div class="am-form-group">
                    <label for="doc-manager">管理</label>
                    <input type="text" class="" name="manager" placeholder="">
                </div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </fieldset>
        </form>
   </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">

        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>篮球比赛</span></h2>
            <ul class="am-list">
                <li><a href="timelineAdd"   >添加时光</a></li>
                <li><a href="articleAdd"    >添加文章</a></li>
                <li><a href="basketAdd"	    >篮球比赛</a></li>
                <li><a href="userAdd"	    >添加用户</a></li>
                <li><a href="blogAdd"  	    >添加博客</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- content end -->
@endsection




