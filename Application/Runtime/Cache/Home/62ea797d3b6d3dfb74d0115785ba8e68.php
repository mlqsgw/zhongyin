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
    <li><a href="#">绩效考核详情</a></li>
    </ul>
    </div>
    <form id="data_form">
        <div class="formbody">
            <div class="formtitle" ><span>绩效考核详情</span></div>
                <table border="1">
                    <tr> 
                        <th colspan="6" align="center">标题: &nbsp;<?php echo ($data['title']); ?></th>
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
                        <td height="100px" width="100px" align="center"><?php echo ($data['assessment_name_one']); ?></td>
                        <td align="center"><?php echo ($data['score_one']); ?></td>
                        <td width="200px" align="center"><?php echo ($data['require_one']); ?></td>
                        <td width="400px" >
                            <?php echo ($data['opinion_rating_one']); ?>
                        </td>
                        <td align="center"><?php echo ($data['self_assessment_one']); ?></td>
                        <td align="center"><?php echo ($data['peer_assessment_one']); ?></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><?php echo ($data['assessment_name_two']); ?></td>
                        <td align="center"><?php echo ($data['score_two']); ?></td>
                        <td width="200px" align="center"><?php echo ($data['require_two']); ?></td>
                        <td width="400px" >
                            <?php echo ($data['opinion_rating_two']); ?>
                        </td>
                        <td align="center"><?php echo ($data['self_assessment_two']); ?></td>
                        <td align="center"><?php echo ($data['peer_assessment_two']); ?></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><?php echo ($data['assessment_name_three']); ?></td>
                        <td align="center"><?php echo ($data['score_three']); ?></td>
                        <td width="200px" align="center"><?php echo ($data['require_three']); ?></td>
                        <td width="400px" >
                            <?php echo ($data['opinion_rating_three']); ?>
                        </td>
                        <td align="center"><?php echo ($data['self_assessment_three']); ?></td>
                        <td align="center"><?php echo ($data['peer_assessment_three']); ?></td>
                    </tr>
                    <tr>
                        <td height="100px" width="100px" align="center"><?php echo ($data['assessment_name_four']); ?></td>
                        <td align="center"><?php echo ($data['score_four']); ?></td>
                        <td width="200px" align="center"><?php echo ($data['require_four']); ?></td>
                        <td width="400px" >
                            <?php echo ($data['opinion_rating_four']); ?>
                        </td>
                        <td align="center"><?php echo ($data['self_assessment_four']); ?></td>
                        <td align="center"><?php echo ($data['peer_assessment_four']); ?></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">小计</td>
                        <td colspan="2" align="center"><?php echo ($data['score_total']); ?></td>
                    </tr>
                </table>
                
                <ul class="forminfo" >
                    
                </ul>
            </div>
    </form>
    
</body>

</html>