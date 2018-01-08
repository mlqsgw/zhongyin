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
		<title>订单记录</title>
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/reset.css">
		<link rel="stylesheet" href="/zhongyin/Public/home/css/common/common.css">
		<!-- 公告样式 -->
		<link rel="stylesheet" href="/zhongyin/Public/home/css/orderRecord.css" id="css">

		<!-- 公共js -->
	  <script src="/zhongyin/Public/home/js/common/flexible.js"></script>
		<script src="/zhongyin/Public/home/js/common/jquery-1.11.1.min.js"></script>
		<script src="/zhongyin/Public/home/js/common/methods.js"></script>
		<!-- 公共js -->
		<script src="/zhongyin/Public/home/js/orderRecord.js" id="js"></script>
	</head>
	<body>
	<div class="order-record">
		<div class="title">订单记录</div>
		<div class="menu" id="menu">
			<div class="tab active">审核中</div>
			<div class="tab">已审核</div>
		</div>
		
		<div class="infor">
			<table border="" cellspacing="" cellpadding="">
				<tr>
					<th class="long">订单号</th>
					<th class="long2">刷卡人姓名</th>
					<th class="long3">金额</th>
				</tr>
				<tr>
					<td>123456789</td>
					<td>哦哦哦和那后的</td>
					<td>10000</td>
				</tr>
				<tr>
					<td>2123456789</td>
					<td>哦哦哦</td>
					<td>10000</td>
				</tr>			
			</table>
			<!--分页-->
			<ul class="page">
				<li>
					<a class="back">上一页</a>
				</li>
				<li>
					<a class="active">1</a>
				</li>
				<li>
					<a>2</a>
				</li>
				<li>
					<a>3</a>
				</li>		
				<li>
					<a>4</a>
				</li>
				<li>
					<a>15</a>
				</li>				
				<li>
					<a class="next">下一页</a>
				</li>				
				
			</ul>
		</div>		
	
		<div class="infor dn">
			<table border="" cellspacing="" cellpadding="">
				<tr>
					<th class="long">订单号</th>
					<th class="long2">刷卡人姓名</th>
					<th class="long3">金额</th>
				</tr>
				<tr>
					<td>123456789</td>
					<td>哦哦哦和那后的2</td>
					<td>100002</td>
				</tr>
				<tr>
					<td>123456789</td>
					<td>哦哦哦2</td>
					<td>100002</td>
				</tr>		
			</table>
			<!--分页-->
			<ul class="page">
				<li>
					<a class="back">上一页</a>
				</li>
				<li>
					<a class="active">1</a>
				</li>
				<li>
					<a>2</a>
				</li>
				<li>
					<a>3</a>
				</li>		
				<li>
					<a>4</a>
				</li>
				<li>
					<a>15</a>
				</li>				
				<li>
					<a class="next">下一页</a>
				</li>				
				
			</ul>

		</div>		
	
	</div>

	</body>
</html>