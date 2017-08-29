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
        <li><a href="llblog">FIGHT博客</a></li>
        <li class="am-dropdown am-active" data-am-dropdown> 
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
        	<p class="class="am-article-lead"">
        		美文展示：
        	</p>
    		<blockquote>
    			<p>{{ $bDetail["content"] or ""}}</p> 
    			<footer>
    				<cite>{{ $bDetail["source"] or "@FIGHT_ZERO" }}</cite>
    			</footer>
    		</blockquote>
             
            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
      			<dl class="am-accordion-item am-active">
			        <dt class="am-accordion-title">
			          	PAPA篮球一队-啪啪无敌队
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
							    	@if (!empty($bUser))
								    	@foreach($bUser as $user)
								        <tr>
								            <td>{{$user["nickname"] or "--"}}</td>
								            <td>{{$user["jersey_no"]or "--"}}</td>
								            <td>{{$user["position"]	or "--"}}</td>
								            <td>{{$user["remark"] 	or "--"}}</td>
								        </tr>
								        @endforeach
							        @else
								        <tr>
								            <td>L.L</td>
								            <td>0</td>
								            <td>中锋</td>
								            <td>球场-鬼王</td>
								        </tr>
							        @endif
							    </tbody>
							</table>

		          		</div>
	        		</dd>
      			</dl>

      			<dl class="am-accordion-item">
			        <dt class="am-accordion-title">
			          	让生命去等候，去等候，去等候，去等候
			        </dt>
			        <dd class="am-accordion-bd am-collapse ">
			          	<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
			          	<div class="am-accordion-content">
			            	走在忠孝东路 <br/> 
			            	徘徊在茫然中 <br/> 
			            	在我的人生旅途 <br/> 
			            	选择了多少错误 <br/> 
			            	我在睡梦中惊醒 <br/> 
			            	感叹悔言无尽 <br/> 
			            	恨我不能说服自己 <br/> 
			            	接受一切教训 <br/> 
			            	让生命去等候 <br/> 
			            	等候下一个漂流 <br/> 
			            	让生命去等候 <br/>
			            	等候下一个伤口
			          	</div>
			        </dd>
		      	</dl>
  			</section>

        	<hr>
	        <h1>比赛比分:</h1>
	        <ul class="am-list am-list-border">
	         	<li>
	         		<a href="#">
	         			<i class="am-icon-home am-icon-fw"></i>
	           			每个人都有一个死角， 自己走不出来，别人也闯不进去。
	           		</a>
	           	</li>
	         	<li>
	         		<a href="#"> <i class="am-icon-book am-icon-fw"></i>
	           			我把最深沉的秘密放在那里。</a>
	           	</li>
	         	<li><a href="#"><i class="am-icon-pencil am-icon-fw"></i>你不懂我，我不怪你。</a></li>
	        </ul>
	        
	        {{--
	        <h1>有序列表:</h1>
	        <ol>
	        	<li>List item one
		        	<ol>
		        		<li>List item one
				        	<ol>
				        		<li>List item one</li>
				        		<li>List item two</li>
				        		<li>List item three</li>
				        		<li>List item four</li>
				        	</ol>
		        		</li>
		        		<li>List item two</li>
		        		<li>List item three</li>
		        		<li>List item four</li>
		        	</ol>
		        </li>
	        	<li>List item two</li>
	        	<li>List item three</li>
	        	<li>List item four</li>
	        </ol>
	        
	        <h1>无序列表:</h1>
	        <ul>
	        	<li>List item one
	        		<ul>
	        			<li>List item one
	        				<ul>
	        				<li>List item one</li>
	        				<li>List item two</li>
	        				<li>List item three</li>
	        				<li>List item four</li>
	        				</ul>
	        			</li>
	        			<li>List item two</li>
	        			<li>List item three</li>
	        			<li>List item four</li>
	        		</ul>
	        	</li>
	        	<li>List item two</li>
	        	<li>List item three</li><
	        	li>List item four</li>
	        </ul>
	        --}}
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




