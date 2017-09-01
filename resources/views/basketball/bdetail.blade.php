@extends('common.layout')
@section('title','时光轴')

@section('content')

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-sm-8 am-u-sm-centered">
        <!--<img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="Amaze UI Logo"/> -->
        <h2 class="am-hide-sm-only">FIGHTZERO | PAPA篮球 | LLPER_BLOG</h2>
    </div>
</header>
<hr>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" >
	<span class="am-sr-only">导航切换</span>
	<span class="am-icon-bars"></span>
</button>

<div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
        <li><a href="home"	>首页</a></li>
        <li><a href="llblogL">FIGHT博客</a></li>
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
        <li><a href="lltime"		>时光轴</a></li>
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
    <div class="am-u-md-8 am-u-sm-12">
       <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center">{{ $bDetail["title"] or "PAPA篮球" }}</h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color">{{ $bDetail["keywords"] or "BASKETBALL" }} &nbsp;</a></span>-
              <span><a href="#">{{ $bDetail["author"] }} &nbsp;</a></span>-
              <span><a href="#">{{ date('Y/m/d', strtotime($bDetail["publish_at"])) }}</a></span>
          </p>
        </div>        
        <div class="am-article-bd">
        	<img src="assets/img/f10.jpg" alt="" class="blog-entry-img blog-article-margin">          
        	<p class="am-article-lead">
        		美文展示：
        	</p>
    		<blockquote>
    			<p>{{ $bDetail["content"] or "--"}}</p>
    			<footer>
    				<cite>{{ $bDetail["source"] or "--*--" }}</cite>
    			</footer>
    		</blockquote>
			<p class="am-article-lead">
				参赛球员：
			</p>
            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
      			<dl class="am-accordion-item am-active">
			        <dt class="am-accordion-title">
						{{ $ranksOneName or "--*--"  }}
			        </dt>
	        		<dd class="am-accordion-bd am-collapse am-in">
		          		<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
		          		<div class="am-accordion-content">
		            		<table class="am-table am-table-bordered">
					    		<thead>
							        <tr>
							            <th>名称</th>
							            <th>球衣</th>
							            <th>位置</th>
							            <th>简介</th>
							        </tr>
							    </thead>
							    <tbody>
							    	@if (!empty($ranksOneUser))
								    	@foreach($ranksOneUser as $oneUser)
								        <tr>
								            <td>{{$oneUser["nickname"]  or "--"}}</td>
								            <td>{{$oneUser["jersey_no"] or "--"}}</td>
								            <td>{{$oneUser["position"]	or "--"}}</td>
								            <td>{{$oneUser["remark"] 	or "--"}}</td>
								        </tr>
								        @endforeach
							        @else
								        <tr>
								            <td>L.L</td>
								            <td>0</td>
								            <td>中锋</td>
								            <td>球场-搅屎棍</td>
								        </tr>
							        @endif
							    </tbody>
							</table>

		          		</div>
	        		</dd>
      			</dl>

				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						{{ $ranksTwoName or "--*--" }}
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr>
									<th>名称</th>
									<th>球衣</th>
									<th>位置</th>
									<th>简介</th>
								</tr>
								</thead>
								<tbody>
								@if (!empty($ranksTwoUser))
									@foreach($ranksTwoUser as $twoUser)
										<tr>
											<td>{{$twoUser["nickname"] 	or "--"}}</td>
											<td>{{$twoUser["jersey_no"]	or "--"}}</td>
											<td>{{$twoUser["position"]	or "--"}}</td>
											<td>{{$twoUser["remark"] 	or "--"}}</td>
										</tr>
									@endforeach
								@else
									<tr>
										<td>L.L</td>
										<td>0</td>
										<td>中锋</td>
										<td>球场-搅屎棍</td>
									</tr>
								@endif
								</tbody>
							</table>

						</div>
					</dd>
				</dl>

  			</section>

        	<hr>
	        <h3>比赛比分:</h3>
	        <ul class="am-list am-list-border">
	         	<li>
	         		<a href="#">
	         			<i class="am-icon-home am-icon-fw"></i>
	           			{{ $bDetail["score"] or " - * - " }}
	           		</a>
	           	</li>
	        </ul>
    	</div>
    </article>

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
        --}}
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>PAPA篮球</span></h2>
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




