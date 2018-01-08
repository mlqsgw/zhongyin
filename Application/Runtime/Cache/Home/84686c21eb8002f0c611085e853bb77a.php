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
		<title>提交押金</title>
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/reset.css">
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/common.css">
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/submitMoney.css" id="css">

		<!-- 公共js -->
	  <script src="/zhongyin/Public/home/js/common/flexible.js"></script>
		<script src="/zhongyin/Public/home/js/common/jquery-1.11.1.min.js"></script>
		<script src="/zhongyin/Public/home/js/common/methods.js"></script>
		<!-- 公共js -->
		<script src="/zhongyin/Public/home/js/submitMoney.js" id="js"></script>
	</head>
	<body>
	<div class="add">
		<div class="title">提交押金</div>
		
		
		<div class="ercode-box">
			<!--没图片-->
			<div class="no-img dn">
				<div class="tip">点击上传</div>
				<div class="tip2">微信二维码</div>
			</div>
			<!--有图片-->
			<div class="have-img">
				<img src="/zhongyin/Public/home/img/submitMoney/c-2.png"/>
			</div>
		</div>
		
		
		<div class="infor">
			<ul>
				<li>
					<div class="name">微信订单号：</div>
					<div class="in">
						<input type="text" name="name" id="name" placeholder="请输入微信订单号" />	
					</div>
				</li>			
			</ul>
			<a href="index.html" class="post">提交申请</a>
			<div class="tip">
				在24小时内审核，如逾期请联系直属代理
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