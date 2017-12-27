<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wenjuan/Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/wenjuan/Public/js/jquery.js"></script>
<script language="JavaScript" src="/wenjuan/Public/js/layer/layer.js"></script>

</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">密码修改</a></li>
    </ul>
    </div>
    <form id="data_form">
        <div class="formbody">
            <div class="formtitle"><span>密码修改</span></div>
            <input type="hidden" name="user_id" value="<?php echo ($session_data['user_id']); ?>" />
            <ul class="forminfo">
                <?php if($session_data['user_type'] == 2): ?><li><label>账号</label><input name="account" type="text" readonly="relation" value="<?php echo ($session_data['account']); ?>" class="dfinput" /></li>
                <?php elseif($session_data['user_type'] == 1): ?>
                    <li><label>管理员账号</label><input name="account" type="text" readonly="relation" value="<?php echo ($session_data['account']); ?>" class="dfinput" /></li>
                <?php else: ?>
                    <li><label>用户账号</label><input name="account" type="text" readonly="relation" value="<?php echo ($session_data['account']); ?>" class="dfinput" /></li><?php endif; ?>
                <li><label>原密码</label><input name="password" type="password" class="dfinput" /></li>
                <li><label>新密码</label><input name="new_password" type="password" class="dfinput" /></li>
                <li><label>确认密码</label><input name="r_password" type="password" class="dfinput" /></li>
                <li><label>&nbsp;</label><input name="" type="button" class="btn" value="确认保存"/></li>
            </ul>
        </div>

    </form>
   
    
    <script type="text/javascript">
        $(".btn").click(function(){
            $.ajax({
                type : "POST",
                url : "<?php echo u('Index/do_update_password');?>",
                data : $("#data_form").serializeArray(),
                dataType : 'json',
                success : function(data){
                    if(data['status']){
                        layer.open({
                            content : "修改成功",
                            btn : ["确定"],
                            yes : function(){
                                location.href = "<?php echo u('index');?>";
                            }
                        });

                    } else {
                        layer.open({
                            content : data['message'],
                            btn : ["确定"],
                            yes : function(){
                                location.href = "<?php echo u('update_password');?>";
                            }
                        });
                    }
                }

            });
        });
    </script>

</body>

</html>