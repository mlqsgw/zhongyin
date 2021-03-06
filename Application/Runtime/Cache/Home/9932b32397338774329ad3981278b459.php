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
		<title>提成</title>
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/reset.css">
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/common.css">
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/income.css" id="css">

		<!-- 公共js -->
	  <script src="/zhongyin/Public/home/js/common/flexible.js"></script>
		<script src="/zhongyin/Public/home/js/common/jquery-1.11.1.min.js"></script>
		<script src="/zhongyin/Public/home/js/common/methods.js"></script>
		<!-- 公共js -->
		<script src="/zhongyin/Public/home/js/income.js" id="js"></script>
	</head>
	<body>
	<div class="add">
		<div class="title">用户提现</div>

		<div class="infor">
			<ul>
				<li>
					<div class="name">支付宝账号：</div>
					<div class="in">
						<input type="text" name="name" id="name" placeholder="请输入支付宝账号" />	
					</div>
				</li>
				<li>
					<div class="name">提现金额：</div>
					<div class="in">
						<input type="text" name="money" id="money" placeholder="提现金额" />	
					</div>
				</li>				
			</ul>
			<a href="orderRecord.html" class="post">提交</a>
			<div class="tip">
				这里写提现提示
			</div>
		</div>

	</div>

	<!--错误提示弹窗-->
	<div class="popupError dn" id="popupError">
		<p>错误信息提示会自动改</p>
	</div>
	<!--错误提示弹窗-->	
	</body>
</html>