@extends('common.layout')

@section('title','PAPA篮球')

@section('content')

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <!--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/> -->
        <h2 class="am-hide-sm-only">FIGHTZERO</h2>
    </div>
</header>
<hr>
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
        <form class="am-form am-form-horizontal" action="basketAddDo" method="post">
            <fieldset>
                <legend>添加文章</legend>
                <div class="am-form-group">
                    <label for="doc-select-1">标签选择</label>
                    <select id="doc-select-1" name="tags">
                        @foreach($tagsArr as $kk=>$tagname)
                            <option value="{{ $kk }}">{{ $tagname }}</option>
                        @endforeach
                    </select>
                    <span class="am-form-caret"></span>
                </div>
                <div class="am-form-group">
                    <label for="doc-title">标题</label>
                    <input type="text" class="" name="title" placeholder="">
                </div>

                <div class="am-form-group">
                    <label for="doc-intro">简介</label>
                    <input type="text" class="" name="intro" placeholder="">
                </div>

                <div class="am-form-group">
                    <label for="doc-keywords">关键字</label>
                    <input type="text" class="" name="keywords"     placeholder="">
                </div>

                <div class="am-form-group">
                    <label for="doc-description">描述</label>
                    <input type="text" class="" name="description"  placeholder="">
                </div>
                <div class="am-form-group">
                    <label for="doc-fee_intro">费用</label>
                    <input type="text" class="" name="fee_intro" placeholder="">
                </div>
                <div class="am-form-group">
                    <label for="doc-score">比分</label>
                    <input type="text" class="" name="score" placeholder="">
                </div>

                <div class="am-form-group am-form-file">
                    <label for="doc-ipt-file">图片</label>
                    <div>
                        <button type="button" class="am-btn am-btn-default am-btn-sm">
                            <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                    </div>
                    <input type="file" id="doc-ipt-file" name="imgs">
                </div>

                <div class="am-form-group">
                    <label class="am-form-label">状态</label>
                    <div>
                        <label class="am-radio-inline">
                            <input type="radio" name="status" value="100">未发布
                        </label>
                        <label class="am-radio-inline">
                            <input type="radio" name="status" value="200" checked>已发布
                        </label>
                    </div>
                </div>



                <div class="am-form-group">
                    <label for="doc-ta-1">美文</label>
                    <textarea class="" rows="5" id="doc-ta-1" name="content"></textarea>
                </div>

                <div class="am-form-group">
                    <label for="doc-author">作者</label>
                    <input type="text" class="" name="author" placeholder="">
                </div>

                <div class="am-form-group am-form-icon">
                    <label for="doc-ta-1">日期</label>
                    <i class="am-icon-calendar"></i>
                    <input type="text" class="am-form-field" placeholder="日期" data-am-datepicker readonly name="publish_at" />
                </div>

                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </fieldset>
        </form>
   </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">

        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>文章添加</span></h2>
            <ul class="am-list">
                <li><a href="llbasketL" >2017夏季赛</a></li>
                <li><a href="llbasketL"	>2017夏季联赛</a></li>
                <li><a href="basketPerson"	>2017风采照</a></li>
                <li><a href="basketPhoto"  	>2017照片墙</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- content end -->
@endsection




