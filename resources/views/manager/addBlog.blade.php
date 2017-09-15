@extends('common.layout')

@section('title','图片添加')

@section('content')


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
                        <label for="doc-title">类型</label>
                        <input type="text" class="" name="title"    placeholder="">
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
                        <label for="doc-remark">备注</label>
                        <div id="summernote"><p>Hello Summernote</p></div>
                        <input type="hidden" class="" name="content"  id="contentCode"   placeholder="">
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

        {{--
        <div class="am-u-sm-12">
            <hr>
            <form class="am-form am-g" action="imgAddDo" method="post" enctype="multipart/form-data">
                <h3 class="blog-comment">照片上传</h3>

                <div id="summernote"><p>Hello Summernote</p></div>

                <fieldset>
                    <div class="am-form-group am-u-sm-4 blog-clear-left">
                        <input type="text" class="" placeholder="照片类型"  name="tags" >
                    </div>
                    <div class="am-form-group am-u-sm-4">
                        <input class="input-file uniform_on" id="fileInput" type="file" name="imgs">
                    </div>

                    <p><button type="submit" class="am-btn am-btn-default">上传</button></p>
                </fieldset>
            </form>
            <hr>
        </div>
        --}}
    </div>
    <!-- content end -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/summernote.js"></script>
    <script>
        //调用富文本编辑
        $(document).ready(function() {
            var $summernote = $('#summernote').summernote({
                height:     300,
                minHeight:  null,
                maxHeight:  null,
                focus:      true,
                //调用图片上传
                //callbacks: {
                onImageUpload: function (files, editor, $editable) {
                    sendFile(files[0] , editor, $editable);
                }
                //}
            });

            //ajax上传图片
            function sendFile(file, editor, $editable) {
                var  formData = new FormData();
                formData.append("imgs", file);

                $.ajax({
                    url: "imgAddAjax",    //路径是你控制器中上传图片的方法，下面controller里面我会写到
                    data:   formData,
                    cache:  false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function ( resData) {
                        if(data != "FAIL") {
                            editor.insertImage($editable, resData);
                        }else{
                            alert("上传成功");
                            return;
                        }

//                    $summernote.summernote('insertImage', data, function ($image) {
//                        if(data != "FAIL"){
//                            $image.attr('src', data);
//                        }
//                    });
                    }
                });
            }

            // 表单提交验证
            $("#blogFrom").bind('submit',function(){

                var sHTML = $('#summernote').summernote('code');
                $("#contentCode").val(sHTML);

            });


        });
    </script>
@endsection




