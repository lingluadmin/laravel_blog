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
        <li><a href="lw-index.html">首页</a></li>
        <li class="am-dropdown" data-am-dropdown>
            <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                首页布局 <span class="am-icon-caret-down"></span>
            </a>
            <ul class="am-dropdown-content">
                <li><a href="lw-index.html"             >1. blog-index-standard</a></li>
                <li><a href="lw-index-nosidebar.html"   >2. blog-index-nosidebar</a></li>
                <li><a href="lw-index-center.html"      >3. blog-index-layout</a></li>
                <li><a href="lw-index-noslider.html"    >4. blog-index-noslider</a></li>
            </ul>
        </li>
        <li><a href="llblog"        >FIGHT博客</a></li>
        <li><a href="llbasketbal"   >PAPA篮球</a></li>
        <li><a href="basketPhoto"   >照片墙</a></li>
        <li class="am-active"><a href="lw-timeline.html"  >时光轴</a></li>
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
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
        <h1 class="blog-text-center">-- 时光轴  --</h1>
        <div class="timeline-year">
            <h1>2017</h1>
            <hr>
            <ul>
                <h3>08月</h3>
                <hr>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/08/05</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季联赛-G1</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/08/12</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季联赛-G2</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/08/19</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季联赛-G3</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/08/26</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季联赛-G4</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
            </ul>
            <br>
            <ul>
                <br>
                <h3>07月</h3>
                <hr>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/07/01</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-G6</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/07/08</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-技巧赛</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/07/15</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-G7</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/07/22</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-全明星</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/07/29</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-友谊赛</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
            </ul>
            <br>
            <ul>
                <br>
                <br>
                <h3>6月</h3>
                <hr>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/06/03</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-G2</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/06/10</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-G3</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/06/17</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-G4</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/06/24</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-G5</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
            </ul>
             <br>
            <ul>
                <br>
                <h3>5月</h3>
                <hr>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/05/13</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-预热塞</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">2017/05/20</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="#">2017-18 PAPA篮球-夏季赛-G1</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">BASKET</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                </li>
            </ul>
        </div>
        <div class="timeline-year">
            <br>
            <h1>2016</h1>
            <hr>
               <ul>
                    <h3>10月</h3>
                    <hr>
                    <li>
                        <span class="am-u-sm-4 am-u-md-2 timeline-span">2016/10/01</span>
                        <span class="am-u-sm-8 am-u-md-6"><a href="#">国庆节-回家掰玉米</a></span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">DAILY</span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                    </li>
                    <li>
                        <span class="am-u-sm-4 am-u-md-2 timeline-span">2016/10/13</span>
                        <span class="am-u-sm-8 am-u-md-6"><a href="#">店客来公司~老板跑咯</a></span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">DAILY</span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                    </li>
                    <li>
                        <span class="am-u-sm-4 am-u-md-2 timeline-span">2016/10/27</span>
                        <span class="am-u-sm-8 am-u-md-6"><a href="#">入职星果时代信息技术有限公司</a></span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">WORK</span>
                        <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">FIGHT_ZERO</span>
                    </li>
                </ul>
                <br>
        </div>


        <hr>
    </div>


</div>
<!-- content end -->
@endsection


