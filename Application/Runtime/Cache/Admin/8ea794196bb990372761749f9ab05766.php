<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/zhongyin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/zhongyin/Public/js/jquery.js"></script>
<script type="text/javascript" src="/zhongyin/Public/js/showdate.js"></script>


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
    <li><a href="#">财务管理</a></li>
    <li><a href="#">结算记录表</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
        <!--<ul class="toolbar">-->
            <!--<li class="click"><a href="<?php echo u('payExport_four');?>"><span></span>导出Excel</a></li>-->
        <!--</ul>-->
        <form action="<?php echo u('Index/card_bill_list');?>" method="get">
            
            <ul class="toolbar1" style="margin-right: 40px;">
                 <li>
                 <span style="margin-top: 2px;">
                 开户姓名:<input type="text"  name="username" value="<?php echo ($username); ?>" class="text" style="width:85px;"/>&nbsp;&nbsp;&nbsp;
                 <input type="submit" value="搜索" />
                 </span>
                 </li>
            </ul>
        </form>

    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号</th>
        <th>代理姓名</th>
        <th>代理级别</th>
        <th>开户名</th>
        <th>联系电话</th>
        <th>套现金额</th>
        <th>审核状态</th>
        <th>审核操作</th>
        <th>创建时间</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo['user_data']['username']); ?></td>
        <td><?php echo ($vo['user_data']['grade'] == '3' ? '银行家' : ($vo['user_data']['grade'] == '2') ? '经理' : ($vo['user_data']['grade'] == '1') ? '专员' : '普通会员'); ?></td>
        <td><?php echo ($vo['username']); ?></td>
        <td><?php echo ($vo['phone']); ?></td>
        <td><?php echo ($vo['money']); ?></td>
        <td><?php echo ($vo['status'] == '1' ? '通过' : '未通过'); ?></td>
        <td><a href="<?php echo u('edit_status');?>?status=1&id=<?php echo ($vo['id']); ?>"><input type="button" value="通过"></input></a> | <a href="<?php echo u('edit_status');?>?status=0&id=<?php echo ($vo['id']); ?>"><input type="button" value="不通过"></input></a></td>
        <td><?php echo (date("Y-m-d H:i:s",$vo["create_time"])); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    
   
    <div class="pages">
        <?php echo ($page); ?>
    </div>
    
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="/zhongyin/Public/images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <!-- <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script> -->

</body>

</html>