<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wenjuan/Public/css/style2.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/wenjuan/Public/js/jquery.js"></script>
<script type="text/javascript" src="/wenjuan/Public/js/layer/layer.js"></script>

</head>
<style>
    * {
            border: 1;
        }
</style>
<body>

    <div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">问卷调查添加</a></li>
    </ul>
    </div>
    <form id="data_form">
        <input type="hidden" name="id" value="<?php echo ($id); ?>" />
        <div class="formbody">
            <div class="formtitle" ><span>问卷调查添加</span></div>
                <table border="1">
                    <tr> 
                        <th colspan="6" align="center">标题 &nbsp;<input type="text" name="title" value="<?php echo ($data['title']); ?>"></th>
                    </tr>
                    <tr>
                        <th rowspan="3">考核项目</th>
                        <th rowspan="3">分值（总分80分）</th>
                        <th rowspan="3">指标要求</th>
                        <th rowspan="3" >评分等级</th>
                        <th colspan="2">得分</th>
                    </tr>
                    <tr>
                        <th rowspan="2">自评（20%）</th>
                        <th rowspan="2">上级评（80%）</th>
                    </tr>
                    <tr>
                        
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_one" value="<?php echo ($data['assessment_name_one']); ?>"  /></td>
                        <td align="center"></td>
                        <td width="200px" align="center"><input type="text" name="require_one" value="<?php echo ($data['require_one']); ?>" /></td>
                        <td width="400px" >
                            <textarea name="opinion_rating_one" id="" cols="63" rows="10" >
                                <?php echo ($data['opinion_rating_one']); ?>
                            </textarea>
                            
                        </td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_two" value="<?php echo ($data['assessment_name_two']); ?>" /></td>
                        <td align="center"></td>
                        <td width="200px" align="center"><input type="text" name="require_two" value="<?php echo ($data['require_two']); ?>" /></td>
                        <td width="400px" >
                            <textarea name="opinion_rating_two" id="" cols="63" rows="10">
                                <?php echo ($data['opinion_rating_two']); ?>
                            </textarea>
                        </td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_three" value="<?php echo ($data['assessment_name_three']); ?>"  /></td>
                        <td align="center"></td>
                        <td width="200px" align="center"><input type="text" name="require_three" value="<?php echo ($data['require_three']); ?>" /></td>
                        <td width="400px" >
                            <textarea name="opinion_rating_three" id="" cols="63" rows="10">
                               <?php echo ($data['opinion_rating_three']); ?>
                            </textarea>
                            
                        </td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_four" value="<?php echo ($data['assessment_name_four']); ?>" /></td>
                        <td align="center"></td>
                        <td width="200px" align="center"><input type="text" name="require_four" value="<?php echo ($data['require_four']); ?>" /></td>
                        <td width="400px" >
                            <textarea name="opinion_rating_four" id="" cols="63" rows="10">
                                <?php echo ($data['opinion_rating_four']); ?>
                            </textarea>
                            
                        </td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">小计</td>
                        <td colspan="2" align="center"></td>
                    </tr>
                    <tr>
                        <td colspan="6" align="center"><li><label>&nbsp;</label><input name="" type="button" class="btn" value="提交"/></li></td>
                    </tr>
                </table>
                
                <ul class="forminfo" >
                    
                </ul>
            </div>
    </form>
    
    <script type="text/javascript">
        $(".btn").click(function(){
            $.ajax({
                type : "POST",
                url : "<?php echo u('Index/yjkh_edit_do');?>",
                data : $("#data_form").serializeArray(),
                dataType : 'json',
                success : function(data){
                    if(data['status']){
                        layer.open({
                            content : '编辑成功',
                            btn : ['确定'],
                            yes : function(){
                                location.href = "<?php echo u('yjkh_list');?>";
                            }
                        });

                    } else {
                        layer.open({
                            content : data["message"],
                            btn : ['确定'],
                            yes : function(){
                                location.href = "<?php echo u('yjkh_list');?>";
                            }
                        });
                    }
                }

            });
        });
    </script>
</body>

</html>