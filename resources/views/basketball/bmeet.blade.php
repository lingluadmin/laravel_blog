@extends('common.layout')
@section('title','PAPA篮球-年会')

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
				PAPA篮球-2017拓展年会：
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
										<td>年会晚餐</td><td>求推荐呀</td>
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
									<td>大哥</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>队伍三</td>
									<td>坑哥</td>
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
						年会奖品：
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
									<td>奔跑吧，篮球</td>
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
						年会奖惩：
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<div class="am-accordion-content">
							<table class="am-table am-table-bordered">
								<thead>
								<tr><th colspan="4">游戏奖励：第一名-5积分，第二名-3积分，第三名-2积分，第四名-1积分</th></tr>
								<tr><th colspan="4">积分作用：积分兑换吃的，喝的东西； 谢绝自备东西，发现接受惩罚</th></tr>
								<tr><th colspan="4">积分获取：个人才艺-5积分，团体才艺-15积分，超3人表演叫做团体才艺</th></tr>
								<tr><th colspan="4">积分物品：脉动-4瓶、农夫-4瓶、矿泉-4瓶、面包-2个、火腿肠-1包</th></tr>
								<tr><th colspan="4">积分物品：锅巴-2包、辣条-4个、月饼-4个、水果-10、 等等啦....</th></tr>
								<tr class="am-danger"><th colspan="4">游戏赢得人给输的人抽取惩罚哟~</th></tr>
								<tr class="am-danger"><th colspan="4">天旋地转：闭眼睛，左转三圈，右转三圈，再睁开眼睛，走回自己的座位</th></tr>
								<tr class="am-danger"><th colspan="4">苦笑不得：先大笑5秒，又大哭5秒，反复2-3次，最后摆个卖个萌姿势（随便摆姿势）</th></tr>
								<tr class="am-danger"><th colspan="4">模仿惩罚：模仿一位自己熟悉的明星、歌星或动物的动作、歌声或说话方式</th></tr>
								<tr class="am-danger"><th colspan="4">体能训练：俯卧撑	- 5个一组、或者	深蹲 10个一组</th></tr>
								<tr class="am-danger"><th colspan="4">友爱互助：公主抱、拥抱、背人</th></tr>
								<tr>
									<th>奖惩等级</th>
									<th>奖惩内容</th>
									<th>奖惩人数</th>
									<th>奖惩备注</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>9级惩罚-1</td>
									<td>大喊我是猪，我是猪，我是猪</td>
									<td>全队</td>
									<td>--</td>
								</tr>
								<tr>
									<td>8级惩罚-1</td>
									<td>绕场地跑一圈，边跑边喊，我再也不尿床了-喊3遍哟</td>
									<td>全队</td>
									<td>--</td>
								</tr>
								<tr>
									<td>7级惩罚-4</td>
									<td>体能训练-2组</td>
									<td>全队</td>
									<td>--</td>
								</tr>
								<tr>
									<td>6级惩罚-1</td>
									<td>友爱互助-公主抱</td>
									<td>4人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>6级惩罚-1</td>
									<td>友爱互助-拥抱</td>
									<td>4人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>6级惩罚-1</td>
									<td>友爱互助-背人</td>
									<td>4人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>6级惩罚-1</td>
									<td>天旋地转</td>
									<td>4人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>5级惩罚-1</td>
									<td>替罪羊</td>
									<td colspan="2">【主公技】选择场中任何人替你接受惩罚</td>
								</tr>
								<tr>
									<td>5级惩罚-1</td>
									<td>反击卡</td>
									<td colspan="2">【主公技】把惩罚反击给第一名</td>
								</tr>
								<tr>
									<td>5级惩罚-1</td>
									<td>免惩卡</td>
									<td colspan="2">【主公技】免于惩罚</td>
								</tr>
								<tr>
									<td>5级惩罚-1</td>
									<td>补刀卡</td>
									<td colspan="2">【主公技】再补一刀，惩罚加倍哟</td>
								</tr>
								<tr>
									<td>4级惩罚-1</td>
									<td>友爱互助-公主抱</td>
									<td>2人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>4级惩罚-1</td>
									<td>友爱互助-拥抱</td>
									<td>2人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>4级惩罚-1</td>
									<td>模仿惩罚</td>
									<td>2人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>4级惩罚-1</td>
									<td>天旋地转</td>
									<td>4人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>3级惩罚-1</td>
									<td>天旋地转</td>
									<td>3人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>3级惩罚-1</td>
									<td>苦笑不得</td>
									<td>3人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>3级惩罚-1</td>
									<td>体能训练-2组</td>
									<td>3人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>3级惩罚-1</td>
									<td>模仿惩罚</td>
									<td>2人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>2级惩罚-1</td>
									<td>天旋地转</td>
									<td>2人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>2级惩罚-1</td>
									<td>苦笑不得</td>
									<td>2人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>2级惩罚-1</td>
									<td>体能训练-2组</td>
									<td>2人</td>
									<td>--</td>
								</tr>
								<tr>
									<td>2级惩罚-1</td>
									<td>体能训练-2组</td>
									<td>2人</td>
									<td>--</td>
								</tr>

								<tr>
									<td>1级惩罚-1</td>
									<td>燃烧吧，小宇宙</td>
									<td>全体</td>
									<td>--</td>
								</tr>
								<tr>
									<td>1级惩罚-1</td>
									<td>我好寂寞啊</td>
									<td>全体</td>
									<td>--</td>
								</tr>

								<tr>
									<td>1级惩罚-1</td>
									<td>我是超人,我要回家了</td>
									<td>全体</td>
									<td>--</td>
								</tr>

								<tr>
									<td>1级惩罚-1</td>
									<td>我代替月亮惩罚你</td>
									<td>全体</td>
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
				游戏说明：10个游戏哟
			</p>

			<section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						游戏1：奔跑吧，篮球
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<div class="am-accordion-content">
							十样物品：队伍获得物品最多最快的获胜， 最少一队接受惩罚<br/>
							物品：1、篮球*2、2、篮球袋*2、3、矿泉水*3、4、背包*3
						</div>
					</dd>
				</dl>
				<dl class="am-accordion-item am-active">
					<dt class="am-accordion-title">
						游戏2：五毛一块
					</dt>
					<dd class="am-accordion-bd am-collapse am-in">
						<div class="am-accordion-content">
							每组6人以上(越多越好，最好有男有女)<br/>
							游戏规则：   <br/>
							在游戏中,男士是一块钱,女士则是五毛钱.游戏开始前,大家全部坐好. <br/>
							主持人宣布游戏开始,并喊出一个钱数(钱数不能大与每组人总钱数), <br/>
							裁判一旦喊出钱数,游戏中的人就要在最短的时间内组成那个数的小团队并站起来, <br/>
							比如说喊出的是5块5,那就需要五男一女、三男五女之类的小团队.
						</div>
					</dd>
				</dl>
			</section>

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




