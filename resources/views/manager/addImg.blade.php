
@extends('common.layout')

@section('title','时光轴')

@section('content')

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
        <hr>
        <form class="am-form am-g" action="imgAddDo" method="post" enctype="multipart/form-data">
            <h3 class="blog-comment">照片上传</h3>
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

@endsection




