@extends('common.layout')

@section('title','图片添加')

@section('content')

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
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
</div>
<!-- content end -->
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
    });
</script>
@endsection




