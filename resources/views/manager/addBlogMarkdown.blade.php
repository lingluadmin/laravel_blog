@extends('common.layout')

@section('title','图片添加')

@section('content')
<link rel="stylesheet" href="assets/bower_dl/css/editormd.css" />
<script src="assets/bower_dl/examples/js/jquery.min.js"></script>
<script src="assets/bower_dl/editormd.js"></script>

    <header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
        <div class="am-u-sm-8 am-u-sm-centered">
            <!--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/> -->
            <h2 class="am-hide-sm-only">写博客</h2>
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
            <form class="am-form am-g" action="blogAddDo" method="post" enctype="multipart/form-data" id="blogFrom">
                <fieldset>
                    <legend>写博客</legend>
                    <div class="am-form-group">
                        <label for="doc-select-1">标签</label>
                        <select id="doc-select-1" name="tags">
                            @foreach($tagsArr as $kk=>$tagsItem)
                                <option value="{{ $tagsItem['tags'] }}">{{ $tagsItem["tags"] }}</option>
                            @endforeach
                        </select>
                        <span class="am-form-caret"></span>
                    </div>

                    <div class="am-form-group">
                        <label for="doc-title">标题</label>
                        <input type="text" class="" name="title"    placeholder="">
                    </div>


                    <div class="am-form-group" id="test-editormd">
                        <textarea id="content" name="content" class="form-control" rows="14"></textarea>
                    </div>

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
                <h2 class="blog-title"><span>写博客</span></h2>
                <ul class="am-list">
                    <li><a href="timelineAdd"   >添加时光</a></li>
                    <li><a href="articleAdd"    >添加文章</a></li>
                    <li><a href="basketAdd"	    >添加篮球</a></li>
                    <li><a href="userAdd"	    >添加用户</a></li>
                    <li><a href="blogAdd"  	    >添加博客</a></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- content end -->

<script type="text/javascript">
    $(function() {
        var testEditor = editormd("test-editormd", {
            width   : "100%",
            height  : 480,
            path    : 'assets/bower_dl/lib/'
        });
    });
</script>

@endsection




