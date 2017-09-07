@extends('common.layout')
@section('title','PAPA篮球-赛程')

@section('content')

<br>
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" >
	<span class="am-sr-only">导航切换</span>
	<span class="am-icon-bars"></span>
</button>

<div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">

        <li><a href="llblogL"	>FIGHT博客</a></li>
        <li class="am-active"	><a href="llbasketL" >PAPA篮球</a></li>
        <li><a href="lltime"	>时光轴</a></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
        <div class="am-form-group">
            <input class="am-form-field am-input-sm" value="FIGHTZERO" readonly>
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
			   <h1 class="am-article-title blog-text-center">PAPA篮球-赛程</h1>
			   <p class="am-article-meta blog-text-center">
				   <span><a href="llbasketL" class="blog-color">BASKETBALL</a></span>-
				   <span><a href="llblogL"	 >FIGHTZERO</a></span>-
				   <span><a href="#">{{ date('Y/m/d', time()) }}</a></span>
			   </p>
		   </div>
		   <div class="am-article-bd">
        	{{--<img src="assets/basket/2017XJS-YRS.jpg" alt="" class="blog-entry-img blog-article-margin"> --}}
			{{--
			<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
				<ul class="am-slides">
					<li><img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" /></li>
					<li><img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" /></li>
				</ul>
			</div>
			--}}
			<p class="am-article-lead">
				PAPA篮球-赛程：
			</p>
            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
      			<dl class="am-accordion-item am-active">
			        <dt class="am-accordion-title">
						{{ $basketOneDesc or "--*--"  }}
			        </dt>
	        		<dd class="am-accordion-bd am-collapse am-in">
		          		<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
		          		<div class="am-accordion-content">
		            		<table class="am-table am-table-bordered">
					    		<thead>
							        <tr>
							            <th>比赛</th>
							            <th>日期</th>
							            <th>比分</th>
							            <th>备注</th>
							        </tr>
							    </thead>
							    <tbody>
							    	@if (!empty($basketOne))
								    	@foreach($basketOne as $oneData)
								        <tr>
								            <td>{{ $oneData["name"]  	or "-*-" }}</td>
								            <td>{{ $oneData["date"] 	or "-*-" }}</td>
								            <td>{{ $oneData["score"]	or "-*-" }}</td>
								            <td>{{ $oneData["remark"]	or "-*-" }}</td>
								        </tr>
								        @endforeach
							        @else
								        <tr>
								            <td>--</td>
								            <td>--</td>
								            <td>--</td>
								            <td>--</td>
								        </tr>
							        @endif
							    </tbody>
							</table>

		          		</div>
	        		</dd>
      			</dl>

				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						{{ $basketTwoDesc or "--*--" }}
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr>
									<th>比赛</th>
									<th>日期</th>
									<th>比分</th>
									<th>备注</th>
								</tr>
								</thead>
								<tbody>
								@if (!empty($basketTwo))
									@foreach($basketTwo as $twoData)
										<tr>
											<td>{{ $twoData["name"]  	or "-*-" }}</td>
											<td>{{ $twoData["date"] 	or "-*-" }}</td>
											<td>{{ $twoData["score"]	or "-*-" }}</td>
											<td>{{ $twoData["remark"]	or "-*-" }}</td>
										</tr>
									@endforeach
								@else
									<tr>
										<td>--</td>
										<td>--</td>
										<td>--</td>
										<td>--</td>
									</tr>
								@endif
								</tbody>
							</table>

						</div>
					</dd>
				</dl>

				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						{{ $basketThreeDesc or "--*--" }}
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr>
									<th>比赛</th>
									<th>日期</th>
									<th>比分</th>
									<th>备注</th>
								</tr>
								</thead>
								<tbody>
								@if (!empty($basketThree))
									@foreach($basketThree as $threeData)
										<tr>
											<td>{{$threeData["name"]  	or "--"}}</td>
											<td>{{$threeData["date"] 	or "--"}}</td>
											<td>{{$threeData["score"]	or "--"}}</td>
											<td>{{$threeData["remark"] 	or "--"}}</td>
										</tr>
									@endforeach
								@else
									<tr>
										<td>--</td>
										<td>--</td>
										<td>--</td>
										<td>--</td>
									</tr>
								@endif
								</tbody>
							</table>

						</div>
					</dd>
				</dl>

  			</section>

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
    </article>

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




