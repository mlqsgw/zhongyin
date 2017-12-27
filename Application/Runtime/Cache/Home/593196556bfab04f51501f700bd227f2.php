<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wenjuan/Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/wenjuan/Public/js/jquery.js"></script>
    <style>
        .btn_add {
            width: 137px;
            height: 35px;
            background: url(/wenjuan/Public/images/btnbg.png) no-repeat;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
        }
    </style>

</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">问卷调查添加</a></li>
    </ul>
    </div>
    <form id="data_form">
        <div class="formbody">
            <div class="formtitle"><span>问卷调查添加</span></div>
                <ul class="forminfo" >
                    <li><label>标题</label><input type="text" class="dfinput" name="title" value=""/><button id="AddMoreFileBox" class="btn_add" style="width: 100px;margin-left:20px;">添加题目</button></li>
                    <li id="InputsWrapper"><label>考核项目</label><textarea name="question[]" id="field_1" cols="55" rows="10" style="background-color: #ffffff; border: 1px #D7D7D7 solid;font-size: 11px;"></textarea></li><br/>
                    <li><label>&nbsp;</label><input name="" type="button" class="btn" value="提交"/></li>
                </ul>
            </div>
        
        <!-- <a href="#" id="AddMoreFileBox" class="btn btn-info">添加更多的input输入框</a></span></p>  
        <div id="InputsWrapper">  
            <div><input type="text" name="mytext[]" id="field_1" value="Text 1"/><a href="#" class="removeclass">×</a></div>  
        </div>  -->
    </form>
    
    <script type="text/javascript">
        $(".btn").click(function(){
            $.ajax({
                type : "POST",
                url : "<?php echo u('Index/questionnaire_add_do');?>",
                data : $("#data_form").serializeArray(),
                dataType : 'json',
                success : function(data){
                    if(data['status']){
                        alert("保存成功");

                    } else {
                        alert(data["message"]);
                    }
                }

            });
        });
    </script>
    
    <script>  
        $(document).ready(function() {  
          
        var MaxInputs       = 8; //maximum input boxes allowed  
        var InputsWrapper   = $("#InputsWrapper"); //Input boxes wrapper ID  
        var AddButton       = $("#AddMoreFileBox"); //Add button ID  
          
        var x = InputsWrapper.length; //initlal text box count  
        var FieldCount=1; //to keep track of text box added  
          
        $(AddButton).click(function (e)  //on add input button click  
        {  
                if(x <= MaxInputs) //max input box allowed  
                {  
                    FieldCount++; //text box added increment  
                    //add input box  
                    // $(InputsWrapper).append('<div><input type="text" name="mytext[]" id="field_'+ FieldCount +'" value="Text '+ FieldCount +'"/><a href="#" class="removeclass">×</a></div>');  

                    $(InputsWrapper).append('<li><label>题目 '+ FieldCount +'</label><textarea name="question[]" id="field_'+ FieldCount +'"  cols="55" rows="10" style="background-color: #ffffff; border: 1px #D7D7D7 solid;font-size: 11px;"></textarea><a href="#" class="removeclass">×</a></li>');
                    x++; //text box increment  
                }  
        return false;  
        });  
          
        $("body").on("click",".removeclass", function(e){ //user click on remove text  
                if( x > 1 ) {  
                        $(this).parent('li').remove(); //remove text box  
                        x--; //decrement textbox  
                }  
        return false;  
        })   
          
        });  
    </script>  
</body>

</html>