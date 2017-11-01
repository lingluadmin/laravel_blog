@extends('common.layout')
@section('title','PAPA篮球-争霸赛')

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
          <h1 class="am-article-title blog-text-center">PAPA篮球争霸赛</h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color">BASKETBALL</a></span>-
              <span><a href="#">FIGHTZERO</a></span>-
              <span><a href="#">{{ date('Y/m/d', time()) }}</a></span>
          </p>
        </div>        
        <div class="am-article-bd">

			<p class="am-article-lead">
				PAPA篮球争霸赛：
			</p>
            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>

				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						比赛队伍：
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr>
									<th>队伍</th>
									<th>队长</th>
									<th>队员</th>
									<th>队员</th>
								</tr>
								</thead>
								<tbody>

								<tr>
									<td>队伍一</td>
									<td>兴子</td>
									<td>凌路</td>
									<td>老司机、兴桦</td>
								</tr>
								<tr class="am-danger">
									<td colspan="4"></td>
								</tr>
								<tr>
									<td>队伍二</td>
									<td>王岩</td>
									<td>阳仔</td>
									<td>小睿、张强</td>
								</tr>
								<tr class="am-danger">
									<td colspan="4"></td>
								</tr>
								<tr>
									<td>队伍三</td>
									<td>腿哥</td>
									<td>俊杰</td>
									<td>王政、德利</td>
								</tr>
								<tr class="am-danger">
									<td colspan="4"></td>
								</tr>
								<tr>
									<td>队伍四</td>
									<td>坑哥</td>
									<td>老太</td>
									<td>赵峰、大哥</td>
								</tr>
								</tbody>
							</table>

						</div>
					</dd>
				</dl>

      			<dl class="am-accordion-item am-active">
			        <dt class="am-accordion-title">
						比赛赛程：
			        </dt>
	        		<dd class="am-accordion-bd am-collapse am-in">
		          		<div class="am-accordion-content">
		            		<table class="am-table am-table-bordered">
					    		<thead>
							        <tr>
							            <th>日期</th>
							            <th>主场</th>
							            <th>客场</th>
										<th>场次</th>
							        </tr>
							    </thead>
							    <tbody>

									<tr>
										<td>2017年11月04日</td>
										<td>一队</td>
										<td>四队</td>
										<td>1</td>
									</tr>
									<tr>
										<td>2017年11月04日</td>
										<td>三队</td>
										<td>二队</td>
										<td>2</td>
									</tr>
									<tr>
										<td>2017年11月04日</td>
										<td>一队</td>
										<td>二队</td>
										<td>3</td>
									</tr>

									<tr class="am-danger">
										<td colspan="4"></td>
									</tr>

									<tr>
										<td>2017年11月11日</td>
										<td>二队</td>
										<td>一队</td>
										<td>1</td>
									</tr>
									<tr>
										<td>2017年11月11日</td>
										<td>四队</td>
										<td>三队</td>
										<td>2</td>
									</tr>
									<tr>
										<td>2017年11月11日</td>
										<td>二队</td>
										<td>三队</td>
										<td>3</td>
									</tr>

									<tr class="am-danger">
										<td colspan="4"></td>
									</tr>

									<tr>
										<td>2017年11月18日</td>
										<td>三队</td>
										<td>二队</td>
										<td>1</td>
									</tr>
									<tr>
										<td>2017年11月18日</td>
										<td>一队</td>
										<td>四队</td>
										<td>2</td>
									</tr>
									<tr>
										<td>2017年11月18日</td>
										<td>三队</td>
										<td>四队</td>
										<td>3</td>
									</tr>

									<tr class="am-danger">
										<td colspan="4"></td>
									</tr>

									<tr>
										<td>2017年11月25日</td>
										<td>四队</td>
										<td>三队</td>
										<td>1</td>
									</tr>
									<tr>
										<td>2017年11月25日</td>
										<td>二队</td>
										<td>一队</td>
										<td>2</td>
									</tr>
									<tr>
										<td>2017年11月25日</td>
										<td>四队</td>
										<td>一队</td>
										<td>3</td>
									</tr>
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


	<!-- right-show -->
	@include('common.basket_right')

</div>
<!-- content end -->

@endsection




