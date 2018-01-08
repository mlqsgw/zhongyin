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
		<title>用户中心</title>
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/reset.css">
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/common.css">
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/userCenter.css" id="css">

		<!-- 公共js -->
	  <script src="/zhongyin/Public/home/js/common/flexible.js"></script>
		<script src="/zhongyin/Public/home/js/common/jquery-1.11.1.min.js"></script>
		<script src="/zhongyin/Public/home/js/common/methods.js"></script>
		<!-- 公共js -->
		<script src="/zhongyin/Public/home/js/userCenter.js" id="js"></script>
	</head>
	<body>
	<div class="head">
		<div class="user-box">
			<div class="no-use"></div>
			<div class="user-wechat">
				<div class="user-img">
					<img src="/zhongyin/Public/home/img/userCenter/c-1.png" />
				</div>
				<div class="user-infor">
					<div class="name">will</div>
					<div class="work-id">编号：<span>473835</span></div>
				</div>				
			</div>
			<div class="money-box">
				<div class="sum">
					<h5>总收入</h5>
					<h4>￥100</h4>
				</div>
				<div class="part">
					<a class="yuan" href="<?php echo u('incomeDetails');?>">
						<h5>已结算</h5>
						<h4>￥50</h4>					
					</a>
					<a class="yuan yuan2" href="<?php echo u('income');?>">
						<h5>可结算</h5>
						<h4>￥50</h4>					
					</a>				
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="nav-box">
			<ul class="nav">
				<li>
					<a href="<?php echo u('authorizationManagement');?>">
						<img src="/zhongyin/Public/home/img/userCenter/10.png" />
						<h4>授权审核</h4>						
					</a>
				</li>
				<li>
					<a href="<?php echo u('income');?>">
						<img src="/zhongyin/Public/home/img/userCenter/8.png" />
						<h4>提成</h4>						
					</a>
				</li>
				<li>
					<a href="<?php echo u('incomeDetails');?>">
						<img src="/zhongyin/Public/home/img/userCenter/1.png" />
						<h4>收入明细</h4>						
					</a>
				</li>
				<li>
						<a href="<?php echo u('customerManagement');?>">
							<img src="/zhongyin/Public/home/img/userCenter/2.png" />
							<h4>客服管理</h4>						
						</a>
				</li>
				<li>
						<a href="<?php echo u('exclusivePosters');?>">
							<img src="/zhongyin/Public/home/img/userCenter/3.png" />
							<h4>专属海报</h4>						
						</a>
				</li>
				<li>
					<a href="<?php echo u('customerService');?>">
						<img src="/zhongyin/Public/home/img/userCenter/4.png" />
						<h4>专属客服</h4>						
					</a>
				</li>
				<li>
					<a href="<?php echo u('shouldKnowShouldRemit');?>">
						<img src="/zhongyin/Public/home/img/userCenter/5.png" />
						<h4>应知应汇</h4>						
					</a>
				</li>
				<li>
						<a href="<?php echo u('systemInforms');?>">
							<img src="/zhongyin/Public/home/img/userCenter/6.png" />
							<h4>系统通知</h4>						
						</a>
				</li>
				<li>
						<a href="<?php echo u('help');?>">
							<img src="/zhongyin/Public/home/img/userCenter/7.png" />
							<h4>帮助</h4>						
						</a>
				</li>
			</ul>
		</div>
	</div>
	</body>
</html>