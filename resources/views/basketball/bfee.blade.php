@extends('common.layout')
@section('title','PAPA篮球费用')

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

        <li><a href="llbasketL"	>FIGHT博客</a></li>
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
          <h1 class="am-article-title blog-text-center">PAPA篮球-篮球费用</h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color">BASKETBALL</a></span>-
              <span><a href="#">FIGHTZERO</a></span>-
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
				比赛费用：
			</p>
            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
      			<dl class="am-accordion-item am-active">
			        <dt class="am-accordion-title">
						{{ $basketFeeOneDesc or "--*--" }}
			        </dt>
	        		<dd class="am-accordion-bd am-collapse am-in">
		          		<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
		          		<div class="am-accordion-content">
		            		<table class="am-table am-table-bordered">
					    		<thead>
							        <tr>
							            <th>场次</th>
							            <th>水费</th>
							            <th>水果</th>
							            <th>备注</th>
							        </tr>
							    </thead>
							    <tbody>
							    	@if (!empty($basketFeeOne))
								    	@foreach($basketFeeOne as $oneFee)
								        <tr>
								            <td>{{$oneFee["name"]  	or "--"}}</td>
								            <td>{{$oneFee["water"] 	or "--"}}</td>
								            <td>{{$oneFee["fruit"]	or "--"}}</td>
								            <td>{{$oneFee["remark"] or "--"}}</td>
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
						{{ $basketFeeTwoDesc or "--*--" }}
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr>
									<th>场次</th>
									<th>水费</th>
									<th>水果</th>
									<th>备注</th>
								</tr>
								</thead>
								<tbody>
								@if (!empty($basketFeeTwo))
									@foreach($basketFeeTwo as $twoFee)
										<tr>
											<td>{{$twoFee["name"]  	or "--"}}</td>
											<td>{{$twoFee["water"] 	or "--"}}</td>
											<td>{{$twoFee["fruit"]	or "--"}}</td>
											<td>{{$twoFee["remark"] or "--"}}</td>
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
						{{ $basketFeeThreeDesc or "--*--" }}
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr>
									<th>场次</th>
									<th>水费</th>
									<th>水果</th>
									<th>备注</th>
								</tr>
								</thead>
								<tbody>
								@if (!empty($basketFeeThree))
									@foreach($basketFeeThree as $threeFee)
										<tr>
											<td>{{$threeFee["name"]  	or "--"}}</td>
											<td>{{$threeFee["water"] 	or "--"}}</td>
											<td>{{$threeFee["fruit"]	or "--"}}</td>
											<td>{{$threeFee["remark"] 	or "--"}}</td>
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
				第一次聚餐：日期：2017年07月06日 参加人数：17人，总额：1160元，人均：68元
			</p>
			<p class="am-article-lead">
				第二次聚餐：日期：2017年08月26日 参加人数：08人，总额：572元，	人均：80元
			</p>
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




