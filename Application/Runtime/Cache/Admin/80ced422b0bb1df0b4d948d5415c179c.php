<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/zhongyin/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/zhongyin/Public/css/jquery.monthpicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/zhongyin/Public/js/jquery.js"></script>
<!-- <script type="text/javascript" src="/zhongyin/Public/js/showdate.js"></script> -->
<script type="text/javascript" src="/zhongyin/Public/js/showdate.js"></script>
<script type="text/javascript" src="/zhongyin/Public/js/jquery.monthpicker.js"></script>
<script type="text/javascript" src="/zhongyin/Public/js/layer/layer.js"></script>


<style>  
    .pages a,  
    .pages span {  
        display: inline-block;  
        padding: 2px 5px;  
        margin: 0 1px;  
        border: 1px solid #f0f0f0;  
        -webkit-border-radius: 3px;  
        -moz-border-radius: 3px;  
        border-radius: 3px;  
    }  
      
    .pages a,  
    .pages li {  
        display: inline-block;  
        list-style: none;  
        text-decoration: none;  
        color: #58A0D3;  
    }  
      
    .pages a.first,  
    .pages a.prev,  
    .pages a.next,  
    .pages a.end {  
        margin: 0;  
    }  
      
    .pages a:hover {  
        border-color: #50A8E6;  
    }  
      
    .pages span.current {  
        background: #50A8E6;  
        color: #FFF;  
        font-weight: 700;  
        border-color: #50A8E6;  
    }  
</style>  

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">用户管理</a></li>
    <li><a href="#">用户列表</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号</th>
        <th>用户姓名</th>
        <th>头像</th>
        <th>等级</th>
        <th>创建时间</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["username"]); ?></td>
        <td><?php echo ($vo["photo"]); ?></td>
        <td><?php echo ($vo["grade"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s", $vo["create_time"])); ?></td>
        <td><a href="#" class="user_details" user_details_id = <?php echo ($vo["id"]); ?>>查看</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    
    <div class="pages">
        <?php echo ($page); ?>
    </div>
    
    </div>
    
    <script type="text/javascript">

       $(".user_details").click(function(){
            var user_details_id = $(this).attr("user_details_id");
            var url = "<?php echo u('user_details');?>?id=" + user_details_id;
            layer.open({
                type : 2,
                title : "用户详情",
                area : ['1210px', '90%'],
                content : url,
                end : function(){
                    location.reload();
                }
            });
       });

	</script>

</body>

</html>