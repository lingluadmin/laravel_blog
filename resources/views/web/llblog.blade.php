@extends('common.layout')

@section('title','个人博客')

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
        <li><a href="lw-index.html">首页</a></li>
        <li class="am-dropdown" data-am-dropdown>
            <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                首页布局 <span class="am-icon-caret-down"></span>
            </a>
            <ul class="am-dropdown-content">
                <li><a href="lw-index.html"         />1. blog-index-standard</a></li>
                <li><a href="lw-index-nosidebar.html">2. blog-index-nosidebar</a></li>
                <li><a href="lw-index-center.html"  />3. blog-index-layout</a></li>
                <li><a href="lw-index-noslider.html"/>4. blog-index-noslider</a></li>
            </ul>
        </li>
        <li><a href="llblog"        />FIGHT博客</a></li>
        <li><a href="llbasketbal"   />PAPA篮球</a></li>
        <li><a href="basketPhoto"   />照片墙</a></li>
        <li class="am-active"><a href="lw-timeline.html"  />时光轴</a></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
        <div class="am-form-group">
            <input type="text" class="am-form-field am-input-sm" placeholder="哈哈哈哈~~~">
        </div>
    </form>
</div>
</nav>
<hr>

@endsection