<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wenjuan/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/wenjuan/Public/css/jquery.monthpicker.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/wenjuan/Public/js/jquery.js"></script>
<!-- <script type="text/javascript" src="/wenjuan/Public/js/showdate.js"></script> -->
<script type="text/javascript" src="/wenjuan/Public/js/showdate.js"></script>
<script type="text/javascript" src="/wenjuan/Public/js/jquery.monthpicker.js"></script>


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
    <li><a href="#">家族长</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<!-- <ul class="toolbar">
        <li class="click"><span><img src="/wenjuan/Public/images/t01.png" /></span>添加</li>
        <li class="click"><span><img src="/wenjuan/Public/images/t02.png" /></span>修改</li>
        <li><span><img src="/wenjuan/Public/images/t03.png" /></span>删除</li>
        <li><span><img src="/wenjuan/Public/images/t04.png" /></span>统计</li>
        </ul> -->
        
        <ul class="toolbar">
            <li class="click"><a href="<?php echo u('payExport');?>"><span></span>导出Excel</a></li>
        </ul>
        <form action="<?php echo u('Index/right');?>" method="get">
            
            <ul class="toolbar1" style="margin-right: 40px;">
                 <li>
                    <span style="margin-top: 10px;">
                        <select name="type">
                            <option value="0">选择搜索方式</option>
                            <option value="1">家族长ID</option>
                            <option value="2">家族长昵称</option>
                            <option value="3" selected="">开始时间+结束时间</option>
                            <option value="4">开始时间+结束时间+家族长昵称</option>
                            <option value="5">开始时间+结束时间+家族长ID</option>
                        </select>
                    </span>
                    <!-- <span>
                        <input type="radio" name="time_status" value="1" /> 上期
                        <input type="radio" name="time_status" value="2" /> 下期
                    </span> -->
                 <span style="margin-top: 2px;">
                 选择月份:<input type="text" id="st" name="st" onclick="return Calendar('st');" value="<?php echo ($status_date); ?>" class="text" style="width:85px;"/>-结束时间<input type="text" id="et" onclick="return Calendar('et');" value="<?php echo ($end_date); ?>" name="et" class="text" style="width:85px;"/>&nbsp;&nbsp;&nbsp;
                 <input type="text" name="search_name" style="height:22px;background: #d4e7f0;" placeholder="家族长ID/家族长昵称">
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
        <th>标题</th>
        <th>创建时间</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><input name="" type="checkbox" value="" /></td>
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["title"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s", $vo["create_time"])); ?></td>
        <td><a href="<?php echo u('question_list');?>?id=<?php echo ($vo["id"]); ?>" class="tablelink">详情</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    
    <div class="pages">
        <?php echo ($page); ?>
    </div>
    
    </div>
    
    <!-- <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script> -->

</body>

</html>