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
    <li><a href="#">我的考核列表</a></li>
    </ul>
    </div>
    <form id="data_form">
        <div class="formbody">
            <input type="hidden" name="yjkh_id" value="<?php echo ($yjkh_data['id']); ?>" />
            <input type="hidden" name="type" value="<?php echo ($type); ?>" />
            <input type="hidden" name="assess_type" value="<?php echo ($assess_type); ?>" />
            <div class="formtitle" >
                <?php if($type == 1): ?><span>业绩考核添加</span>
                <?php else: ?>
                    <span>行为考核添加</span><?php endif; ?>
            </div>
                <table border="1" style="margin: auto;">
                    <tr> 
                        <th colspan="6" align="center">标题 &nbsp;<?php echo ($yjkh_data['title']); ?></th>
                    </tr>
                    <tr>
                        <th colspan="6" align="center">填写时间范围 &nbsp;
                            开始时间<?php echo (date("Y-m-d H:i",$yjkh_data['status_time'])); ?>--结束时间<?php echo (date("Y-m-d H:i",$yjkh_data['end_time'])); ?>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="6" align="center">考核类型：&nbsp;
                            <?php if($yjkh_data['assess_type'] == 1): ?>自评
                            <?php elseif($yjkh_data['assess_type'] == 2): ?>
                                互评 
                                <select name="by_appraiser_id" value="" >
                                    <option value="">请选择互评人</option>
                                    <?php if(is_array($assess_user_data)): $i = 0; $__LIST__ = $assess_user_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['username']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            <?php elseif($yjkh_data['assess_type'] == 3): ?>
                                上对下评<?php endif; ?>
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
                        <th rowspan="2">互评（80%）</th>
                    </tr>
                    <tr>
                        
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><?php echo ($yjkh_data['assessment_name_one']); ?></td>
                        <td align="center"><?php echo ($yjkh_data['score_one']); ?></td>
                        <td width="200px" align="center"><?php echo ($yjkh_data['require_one']); ?></td>
                        <td width="400px" >
                            <?php echo ($yjkh_data['opinion_rating_one']); ?>
                        </td>
                        <?php if($yjkh_data['assess_type'] == 1): ?><td align="center"><input type="text" name="self_assessment_one" value="" /></td>
                            <td align="center"></td>
                        <?php elseif($yjkh_data['assess_type'] == 2): ?>
                            <td align="center"></td>
                            <td align="center"><input type="text" name="peer_assessment_one" value="" /></td><?php endif; ?>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><?php echo ($yjkh_data['assessment_name_two']); ?></td>
                        <td align="center"><?php echo ($yjkh_data['score_two']); ?></td>
                        <td width="200px" align="center"><?php echo ($yjkh_data['require_two']); ?></td>
                        <td width="400px" >
                            <?php echo ($yjkh_data['opinion_rating_one']); ?>
                        </td>
                        <?php if($yjkh_data['assess_type'] == 1): ?><td align="center"><input type="text" name="self_assessment_two" value="" /></td>
                            <td align="center"></td>
                        <?php elseif($yjkh_data['assess_type'] == 2): ?>
                            <td align="center"></td>
                            <td align="center"><input type="text" name="peer_assessment_two" value="" /></td><?php endif; ?>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><?php echo ($yjkh_data['assessment_name_three']); ?></td>
                        <td align="center"><?php echo ($yjkh_data['score_three']); ?></td>
                        <td width="200px" align="center"><?php echo ($yjkh_data['require_three']); ?></td>
                        <td width="400px" >
                            <?php echo ($yjkh_data['opinion_rating_three']); ?>
                        </td>
                        <?php if($yjkh_data['assess_type'] == 1): ?><td align="center"><input type="text" name="self_assessment_three" value="" /></td>
                            <td align="center"></td>
                        <?php elseif($yjkh_data['assess_type'] == 2): ?>
                            <td align="center"></td>
                            <td align="center"><input type="text" name="peer_assessment_three" value="" /></td><?php endif; ?>
                    </tr>
                    <?php if($type == 1): ?><tr>
                            <td height="100px" width="100px" align="center"><?php echo ($yjkh_data['assessment_name_four']); ?></td>
                            <td align="center"><?php echo ($yjkh_data['score_four']); ?></td>
                            <td width="200px" align="center"><?php echo ($yjkh_data['require_four']); ?></td>
                            <td width="400px" >
                                <?php echo ($yjkh_data['opinion_rating_four']); ?>
                            </td>
                            <?php if($yjkh_data['assess_type'] == 1): ?><td align="center"><input type="text" name="self_assessment_four" value="" /></td>
                                <td align="center"></td>
                            <?php elseif($yjkh_data['assess_type'] == 2): ?>
                                <td align="center"></td>
                                <td align="center"><input type="text" name="peer_assessment_four" value="" /></td><?php endif; ?>
                        </tr><?php endif; ?>
                    
                    <tr>
                        <td colspan="4" align="center">小计</td>
                        <td colspan="2" align="center"><input type="text" name="score_total" value="" /></td>
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
                url : "<?php echo u('Index/user_yjkh_add_do');?>",
                data : $("#data_form").serializeArray(),
                dataType : 'json',
                success : function(data){
                    if(data['status']){
                        layer.open({
                            content : '添加成功',
                            btn : ['确定'],
                            yes : function(){
                                location.href = "<?php echo u(yjkh_list_oneself);?>";
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

    </script>
    
</body>

</html>