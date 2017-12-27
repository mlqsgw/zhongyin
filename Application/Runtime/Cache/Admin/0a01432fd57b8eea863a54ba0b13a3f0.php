<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/zhongyin/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/zhongyin/Public/js/webuploader/webuploader.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" src="/zhongyin/Public/js/jquery.js"></script>
<script language="JavaScript" src="/zhongyin/Public/js/webuploader/webuploader.js"></script>
<script language="JavaScript" src="/zhongyin/Public/js/layer/layer.js"></script>

<style>
    #user_id {width: 115px;}
</style>

</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">用户管理</a></li>
    <li><a href="#">用户编辑</a></li>
    </ul>
    </div>

    <div class="formbody">
        <div class="formtitle"><span>用户编辑</span></div>
        <ul class="forminfo">
            <li><label>编号</label><?php echo ($data['id']); ?></li>
            <li><label>用户姓名</label><?php echo ($data['username']); ?></li>
            <li><label>头像</label><?php echo ($data['photo']); ?></li>
            <li><label>等级</label><?php echo ($data['grade']); ?></li>
            <li><label>创建时间</label><?php echo (date($data['create_time'],"Y-m-d H:i:s")); ?></li>
        </ul>
    </div>
</body>

</html>