<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="UTF-8">
		<meta name="App-Config" content="fullscreen=yes,useHistoryState=yes,transition=yes">
		<meta content="telephone=no,email=no" name="format-detection">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
		<meta name="keywords" content="信用卡"/>
		<meta name="description" content="信用卡"/>		
		<title></title>
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/reset.css">
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/common.css">
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/index.css" id="css">

		<!-- 公共js -->
	  <script src="/zhongyin/Public/home/js/common/flexible.js"></script>
		<script src="/zhongyin/Public/home/js/common/jquery-1.11.1.min.js"></script>
		<script src="/zhongyin/Public/home/js/common/methods.js"></script>
		<!-- 公共js -->
		<script src="/zhongyin/Public/home/js/index.js" id="js"></script>
	</head>
	<body>
	<div class="head">
		<div class="head-box">
			<div class="banner">
				<img src="/zhongyin/Public/home/img/index/c-1.png" />
			</div>
			<div class="user">
				<img src="/zhongyin/Public/home/img/index/c-3.png" />
			</div>
			<div class="add-card">
				<div class="title">智能管家  轻松赚钱</div>
				<div class="tip">套现完成之后，请提交申请我们给你佣金</div>
				<a href="<?php echo u('addCreditCard');?>" class="to-add-card">刷卡订单</a>
			</div>			
		</div>
	</div>

	<div class="content">
		<div class="nav-box">
			<ul class="nav">
				<li>
					<a href="<?php echo u('applyAgent');?>">
						<img src="/zhongyin/Public/home/img/index/1.png" />
						<h4>申请代理</h4>						
					</a>
				</li>
				<li>
					<a href="<?php echo u('cashEntry');?>">
						<img src="/zhongyin/Public/home/img/index/2.png" />
						<h4>套现入口</h4>						
					</a>
				</li>
				<li>
						<a href="<?php echo u('orderRecord');?>">
							<img src="/zhongyin/Public/home/img/index/3.png" />
							<h4>订单记录</h4>						
						</a>
				</li>
				<li>
						<a href="<?php echo u('userCenter');?>">
							<img src="/zhongyin/Public/home/img/index/4.png" />
							<h4>用户中心</h4>						
						</a>
				</li>
			</ul>
		</div>
		
		<div class="activity">
			<h3>最新活动</h3>
			<a class="ad" href="<?php echo u('latestActivity');?>">
				<img src="/zhongyin/Public/home/img/index/c-2.png" />
			</a>
		</div>
	</div>
	
	<div class="foot">
		<div class="foot-box">
			<div class="logo-box">信用卡管家      微投入  轻创业   </div>
			<div class="link">客服热线 <a href="tel:15990076560">15990076560</a> 官方微信号</div>
			<div class="company">Copyright © 2018  蚂蚁金融服务集团</div>			
		</div>
	</div>
	</body>
</html>