@extends('common.layout')
@section('title','PAPA篮球年会')

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
          <h1 class="am-article-title blog-text-center">PAPA篮球-2017拓展年会</h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color">BASKETBALL</a></span>-
              <span><a href="#">FIGHTZERO</a></span>-
              <span><a href="#">{{ date('Y/m/d', time()) }}</a></span>
          </p>
        </div>        
        <div class="am-article-bd">

			<p class="am-article-lead">
				PAPA篮球-2017年会：
			</p>
            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						年会主题：
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
									<tr>
										<th>标题</th>
										<th>内容</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>年会主题</td><td>PAPA篮球-2017拓展年会</td>
									</tr>
									<tr>
										<td>年会日期</td><td>2017年10月21日</td>
									</tr>
									<tr>
										<td>年会地点</td><td>史各庄附近</td>
									</tr>
									<tr>
										<td>游戏场地</td><td>生命科学园</td>
									</tr>
									<tr>
										<td>费用人均</td><td>100元左右</td>
									</tr>
								</tbody>
							</table>
						</div>
					</dd>
				</dl>

				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						年会人员：
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
									<th>队员</th>
									<th>队员</th>
								</tr>
								</thead>
								<tbody>

								<tr>
									<td>队伍一</td>
									<td>腿哥</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>队伍二</td>
									<td>坑哥</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>队伍三</td>
									<td>大哥</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>队伍四</td>
									<td>王岩</td>
									<td>张强</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								</tbody>
							</table>

						</div>
					</dd>
				</dl>

      			<dl class="am-accordion-item am-active">
			        <dt class="am-accordion-title">
						年会奖励：
			        </dt>
	        		<dd class="am-accordion-bd am-collapse am-in">
		          		<div class="am-accordion-content">
		            		<table class="am-table am-table-bordered">
					    		<thead>
							        <tr>
							            <th>奖项</th>
							            <th>奖品</th>
							            <th>人数</th>
							        </tr>
							    </thead>
							    <tbody>

									<tr>
										<td>一等奖</td>
										<td>篮球、蓝牙音箱、背包</td>
										<td>1人</td>
									</tr>
									<tr>
										<td>二等奖</td>
										<td>蓝牙音箱、护膝、腰包、胸包</td>
										<td>2人</td>
									</tr>
									<tr>
										<td>三等奖</td>
										<td>护腕、臂包</td>
										<td>3-5人【待定】</td>
									</tr>
							    </tbody>
							</table>

		          		</div>
	        		</dd>
      			</dl>

				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						年会游戏：
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr>
									<th>游戏顺序</th>
									<th>游戏名称</th>
									<th>游戏人数</th>
									<th>游戏备注</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>1</td>
									<td>奔跑吧，气球</td>
									<td>3人/队</td>
									<td>--</td>
								</tr>
								<tr>
									<td>2</td>
									<td>五毛一块</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								<tr>
									<td>3</td>
									<td>萝卜蹲</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								<tr class="am-danger">
									<td>4</td>
									<td>抽奖</td>
									<td>三等奖</td>
									<td>--</td>
								</tr>
								<tr>
									<td>5</td>
									<td>双龙戏珠</td>
									<td>4人/队</td>
									<td>--</td>
								</tr>

								<tr>
									<td>6</td>
									<td>手舞足蹈</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								<tr>
									<td>7</td>
									<td>撕名牌</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								<tr class="am-danger">
									<td>8</td>
									<td>抽奖</td>
									<td>二等奖</td>
									<td>--</td>
								</tr>
								<tr>
									<td>9</td>
									<td>屁股气球</td>
									<td>6人/队</td>
									<td>--</td>
								</tr>
								<tr>
									<td>10</td>
									<td>松鼠和大叔</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								<tr class="am-danger">
									<td>11</td>
									<td>抽奖</td>
									<td>一等奖</td>
									<td>--</td>
								</tr>
								<tr>
									<td>12</td>
									<td>踩气球</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								<tr>
									<td>13</td>
									<td>抓钱舞</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								</tbody>
							</table>

						</div>
					</dd>
				</dl>
				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						年会惩罚：
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
								<tr>
									<td>--</td>
									<td>--</td>
									<td>--</td>
									<td>--</td>
								</tr>
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
                <li><a href="llbasketL" >2017夏季赛</a></li>
                <li><a href="llbasketL"	>2017夏季联赛</a></li>
                <li><a href="llbasketL"	>2017风采照</a></li>
                <li><a href="llbasketL" >2017照片墙</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- content end -->

@endsection




