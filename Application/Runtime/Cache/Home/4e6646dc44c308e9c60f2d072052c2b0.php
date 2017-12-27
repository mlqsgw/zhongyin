<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wenjuan/Public/css/style2.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/wenjuan/Public/js/jquery.js"></script>
<script type="text/javascript" src="/wenjuan/Public/js/layer/layer.js"></script>
<script type="text/javascript" src="/wenjuan/Public/js/showdate.js"></script>

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
    <li><a href="#">考核管理</a></li>
    </ul>
    </div>
    <form id="data_form">
        <div class="formbody">
            <input type="hidden" name="type" value="<?php echo ($type); ?>" />
            <div class="formtitle" >
                <?php if($type == 1): ?><span>绩效考核添加</span>
                <?php else: ?>
                    <span>行为考核添加</span><?php endif; ?>
            </div>
                <table border="1" style="margin: auto;">
                    <tr> 
                        <th colspan="6" align="center">标题 &nbsp;<input type="text" name="title" value=""></th>
                    </tr>
                    <tr> 
                        <th colspan="6" align="center">使用部门 &nbsp;
                            <select name="use_department_id">
                                <option value="">请选择使用部门</option>
                                <?php if(is_array($department_data)): $i = 0; $__LIST__ = $department_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['department_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="6" align="center">填写时间范围 &nbsp;
                            开始时间<input type="text" id="st" name="st" onclick="return Calendar('st');" value="<?php echo ($status_date); ?>" class="text" style="width:85px;"/>-结束时间<input type="text" id="et" onclick="return Calendar('et');" value="<?php echo ($end_date); ?>" name="et" class="text" style="width:85px;"/>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="6" align="center">考核类型 &nbsp;
                            <select name="assess_type" id="">
                                <option value="1">自评</option>
                                <option value="2">互评</option>
                                <option value="3">上对下</option>
                            </select>
                            <?php if($user_type == 1): ?><input type="button" value="重新选择填写人" class="fill_in_user"/>
                            <?php else: ?>
                                <input type="button" value="请选择填写人" class="fill_in_user" /><?php endif; ?>
                        </th>
                    </tr>
                    <tr>
                        <th rowspan="3">
                            <?php if($type == 1): ?>考核项目
                            <?php else: ?>
                                考核指标<?php endif; ?>
                        </th>
                        <th rowspan="3">
                            <?php if($type == 1): ?>分值（总分80分）
                            <?php else: ?>
                                分值（总分20分）<?php endif; ?>
                        </th>
                        <th rowspan="3">
                            <?php if($type == 1): ?>指标要求
                            <?php else: ?>
                                指标说明<?php endif; ?>
                        </th>
                        <th rowspan="3" >
                            <?php if($type == 1): ?>评分等级
                            <?php else: ?>
                                考核评分<?php endif; ?>
                        
                        </th>
                        <th colspan="2">得分</th>
                    </tr>
                    <tr>
                        <th rowspan="2">自评（20%）</th>
                        <th rowspan="2">上级评（80%）</th>
                    </tr>
                    <tr>
                        
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_one" value="" /></td>
                        <td align="center"><input type="text" name="score_one" value="" /></td>
                        <td width="200px" align="center">
                            <textarea name="require_one" id="" cols="63" rows="10" >
                               
                            </textarea>
                        </td>
                        <td width="400px" >
                            <textarea name="opinion_rating_one" id="" cols="63" rows="10" >
                               
                            </textarea>
                            
                        </td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_two" value="" /></td>
                        <td align="center"><input type="text" name="score_two" value="" /></td>
                        <td width="200px" align="center">
                            <textarea name="require_two" id="" cols="63" rows="10" >
                               
                            </textarea>
                        </td>
                        <td width="400px" >
                            <textarea name="opinion_rating_two" id="" cols="63" rows="10">
                                
                            </textarea>
                            
                        </td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_three" value="" /></td>
                        <td align="center"><input type="text" name="score_three" value="" /></td>
                        <td width="200px" align="center">
                            <textarea name="require_three" id="" cols="63" rows="10" >
                               
                            </textarea>
                        </td>
                        <td width="400px" >
                            <textarea name="opinion_rating_three" id="" cols="63" rows="10">
                                
                            </textarea>
                            
                        </td>
                        <td align="center"></td>
                        <td align="center"></td>
                    </tr>
                    <?php if($type == 1): ?><tr>
                            <td height="100px" width="100px" align="center"><input type="text" name="assessment_name_four" value="" /></td>
                            <td align="center"><input type="text" name="score_four" value="" /></td>
                            <td width="200px" align="center">
                                <textarea name="require_four" id="" cols="63" rows="10" >
                                   
                                </textarea>
                            </td>
                            <td width="400px" >
                                <textarea name="opinion_rating_four" id="" cols="63" rows="10">
                                   
                                </textarea>
                                
                            </td>
                            <td align="center"></td>
                            <td align="center"></td>
                        </tr><?php endif; ?>
                    
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
                url : "<?php echo u('Index/yjkh_add_do');?>",
                data : $("#data_form").serializeArray(),
                dataType : 'json',
                success : function(data){
                    if(data['status']){
                        layer.open({
                            content : '添加成功',
                            btn : ['确定'],
                            yes : function(){
                                location.href = "<?php echo u(yjkh_list);?>";
                            }
                        });

                    } else {
                        layer.open({
                            content : data["message"],
                            btn : ['确定']
                        });
                    }
                }

            });
        });

        $(".fill_in_user").click(function(){
            var url = "<?php echo u('yjkh_fill_in_user_add');?>";
            layer.open({
                type : 2,
                title : "填写人添加",
                area : ['1210px', '90%'],
                content : url,
            });
        });
    </script>
    
</body>

</html>