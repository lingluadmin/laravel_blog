@extends('common.layout')

@section('title','时光轴')

@section('content')


<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <!--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/> -->
        <h2 class="am-hide-sm-only">FIGHT_ZERO | PAPA-篮球 | @LU-BLOG</h2>
    </div>
</header>
<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

<div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
        <li><a href="lw-index.html" >首页</a></li>
        <li class="am-active"><a href="llblog">FIGHT博客</a></li>
        <li class="am-dropdown" data-am-dropdown> 
            <a class="am-dropdown-toggle" data-am-dropdown-toggle href="llbasketbal">
                PAPA篮球<span class="am-icon-caret-down"></span>
            </a>
            <ul class="am-dropdown-content">
                <li><a href="xjs2017L"      >夏季赛</a></li>
                <li><a href="xjls2017L"     >夏季联赛</a></li>
                <li><a href="basketPerson"  >风采照</a></li>
                <li><a href="basketPhoto"   >照片墙</a></li>
            </ul>
        </li>
        <li><a href="personCollect"         >个人收藏</a></li>
        <li><a href="lw-timeline.html"      >时光轴</a></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
        <div class="am-form-group">
            <input type="text" class="am-form-field am-input-sm" placeholder="哈哈哈哈~~~">
        </div>
    </form>
</div>
</nav>
<hr>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
        @foreach($bList as $vo)
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="assets/img/f10.jpg" alt="" class="am-u-sm-12">
                </div>
                <a href="llbasketD?id={{$vo['id']}}" >
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span class="blog-color">{{ $vo["title"] or '个人博客' }}</span>
                    <span>{{ $vo['author'] or 'FIGHT_ZERO' }}&nbsp;</span>
                    <span>{{ date("Y/m/d", strtotime($vo["publish_at"])) }}</span>
                    <h1>{{ $vo['intro'] or null }}</a></h1>
                    <p>
                        {{$vo["description"] or null }}
                    </p>
                    <p><a href="" class="blog-continue">continue</a></p>
                </div>
                </a>
            </article>
        @endforeach
    </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        {{--
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>~FIGHTING~</span></h2>
            <img src="assets/img/f14.jpg" alt="about me" class="blog-entry-img" >
            <p>PAPA篮球宝贝</p>
            <p>
                我是PAPA篮球宝贝，爱你们哟
            </p>
            <p> 
                我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？
            </p>
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
        --}}
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>标签集</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
                <a href="llblogL"       class="blog-tag">FIGHTING</a>
                <a href="llblogL"       class="blog-tag">个人博客</a>
                <a href="xjs2017L"      class="blog-tag">夏季赛 </a>
                <a href="xjls2017L"     class="blog-tag">夏季联赛</a>
                <a href="basketPerson"  class="blog-tag">风采照 </a>
                <a href="basketPhoto"   class="blog-tag">照片墙 </a>
                <a href="basketGirl"    class="blog-tag">篮球宝贝</a>
            </div>
        </div>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>PAPA篮球</span></h2>
            <ul class="am-list">
                <li><a href="xjs2017L"  >2017-PAPA篮球夏季赛</a></li>
                <li><a href="xjls2017L" >2017-PAPA篮球夏季联赛</a></li>
                <li><a href="basketPerson">2017-PAPA篮球风采照</a></li>
                <li><a href="qjs2017L"  >2017-PAPA篮球秋季赛</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- content end -->

@endsection




