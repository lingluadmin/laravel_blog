@extends('common.layout')

@section('title','时光轴')

@section('content')

<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

<div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">

        <li><a href="llbasketL"	>FIGHT博客</a></li>
        <li><a href="llbasketL" >PAPA篮球</a></li>
        <li class="am-active"><a href="lltime" >时光轴</a></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
        <div class="am-form-group">
            <input type="text" class="am-form-field am-input-sm" placeholder="哈哈哈哈~~~" readonly>
        </div>
    </form>
</div>
</nav>
<hr>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
        <h1 class="blog-text-center">-- 时光轴  --</h1>

        @foreach( $resData as $key=>$val )
        <div class="timeline-year">
            <h1>{{ $val["yearName"] or "-*-" }}</h1>
            <hr>
            @foreach( $val["yearData"] as $key1=>$val1 )
                <ul>
                    <h3>{{ $val1["monthName"] or "-*-" }}</h3>
                    <hr />
                    @foreach( $val1["monthData"] as $key2=>$val2 )
                    <li>
                        <span class="am-u-sm-4 am-u-md-2 timeline-span">{{ $val2["publish_at"] or '-*-' }}</span>
                        <span class="am-u-sm-8 am-u-md-6"><a href="#">{{ $val2["title"]     or '--' }}</a></span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">{{ $val2["tags"]  or '--' }}</span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">{{ $val2["author"] or 'FIGHTZERO' }}</span>
                    </li>
                    <br/>
                    @endforeach
                </ul>
                <br>
            @endforeach
        </div>

         @endforeach
        <hr>


        <p class="am-article-lead">
            美文展示：
        </p>
        <blockquote>
            <p>{{ $article["content"] }}</p>
            <footer>
                <cite>{{ $article["author"] or "FIGHTZERO" }}</cite>
            </footer>
        </blockquote>
        <p class="am-article-lead am-text-center">
            ——END——
        </p>
    </div>


    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">

        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>FIGHTING</span></h2>
            <img src="{{ $bGril['url'] }}" alt="about me" class="blog-entry-img" >
            <p>{{ $bGril["title"] }}</p>
            <p>{{ $bGril["intro"] }}</p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>联系我哟</span></h2>
            <p>
                <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href=""><span class="am-icon-github  am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weibo   am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-reddit  am-icon-fw blog-icon"></span></a>
                <a href=""><span class="am-icon-weixin  am-icon-fw blog-icon"></span></a>
            </p>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>PAPA篮球</span></h2>
            <ul class="am-list">
                <li><a href="llbasketL"     >2017夏季赛</a></li>
                <li><a href="llbasketL"	    >2017夏季联赛</a></li>
                <li><a href="llbasketL"	    >2017风采照</a></li>
                <li><a href="llbasketL"  	>2017照片墙</a></li>
                <li><a href="basketFee"  	>PAPA篮球费用</a></li>
                <li><a href="basketNotice"  >PAPA篮球赛程</a></li>
                <li><a href="basketMeet"    >PAPA篮球年会</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- content end -->
@endsection


