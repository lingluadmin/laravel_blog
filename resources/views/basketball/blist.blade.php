@extends('common.layout')
@section('title','PAPA篮球')

@section('content')

{{--
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <!--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/> -->
        <h2 class="am-hide-sm-only">FIGHT_ZERO | PAPA-篮球 | @LU-BLOG</h2>
    </div>
</header>
--}}
<br>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

<div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">

        <li><a href="llbasketL"	>FIGHT博客</a></li>
        <li><a href="llbasketL" >PAPA篮球</a></li>
        {{--
		<li class="am-dropdown am-active" data-am-dropdown>
            <a class="am-dropdown-toggle " data-am-dropdown-toggle href="llbasketL">
                PAPA篮球<span class="am-icon-caret-down"></span>
            </a>
			<ul class="am-dropdown-content">
				<li><a href="llbasketL?tags=XJS2017"    >夏季赛</a></li>
				<li><a href="llbasketL?tags=XJLS2017"   >夏季联赛</a></li>
				<li><a href="basketPerson"  >风采照</a></li>
				<li><a href="basketPhoto"   >照片墙</a></li>
			</ul>
        </li>

        <li><a href="personCollect"	>个人收藏</a></li>
        --}}
        <li><a href="lltime"		>时光轴</a></li>
    </ul>
</div>
</nav>
<hr>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
        @foreach($bList as $vo)
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <a href="llbasketD?id={{$vo['id']}}" ><img src="{{$vo['images']}}" alt="" class="am-u-sm-12"></a>
                </div>

                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span class="blog-color">{{ $vo["title"] or '个人博客' }}</span>
                    <span>{{ $vo['author'] or 'FIGHT_ZERO' }}&nbsp;</span>
                    <span>{{ date("Y/m/d", strtotime($vo["publish_at"])) }}</span>
                    <h4>{{ $vo['intro'] or null }}</h4>
                    <p>
                        {{$vo["description"] or null }}
                    </p>
                </div>
            </article>
        @endforeach
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




