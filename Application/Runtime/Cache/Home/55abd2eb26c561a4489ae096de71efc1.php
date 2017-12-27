<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wenjuan/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/wenjuan/Public/js/webuploader/webuploader.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" src="/wenjuan/Public/js/jquery.js"></script>
<script language="JavaScript" src="/wenjuan/Public/js/webuploader/webuploader.js"></script>
<script language="JavaScript" src="/wenjuan/Public/js/layer/layer.js"></script>

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
    <li><a href="#">部门添加</a></li>
    </ul>
    </div>
    <form id="data_form">
        <div class="formbody">
            <div class="formtitle"><span>部门添加</span></div>
            <ul class="forminfo">
                
                <li><label>部门名称</label><input name="department_name" type="text" class="dfinput" /></li>
                
                <li><label>&nbsp;</label><input name="" type="button" class="btn" value="确认保存"/></li>
            </ul>
        </div>

    </form>
   
    
    <script type="text/javascript">
        $(".btn").click(function(){
            $.ajax({
                type : "POST",
                url : "<?php echo u('Index/department_add_do');?>",
                data : $("#data_form").serializeArray(),
                dataType : 'json',
                success : function(data){
                    if(data['status']){
                        layer.open({
                            content : "添加成功",
                            btn : ['确定']
                            
                        });

                    } else {
                        layer.open({
                            content : data['message'],
                            btn : ['确定']
                        });
                    }
                }

            });
        });
    </script>
</body>

</html>