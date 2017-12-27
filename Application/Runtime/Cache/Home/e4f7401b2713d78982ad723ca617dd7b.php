<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Plupload使用指南</title>
    <!-- 首先需要引入plupload的源代码 -->
    <script src="/wenjuan/Public/js/plupload.full.min.js"></script>
</head>
<style>
    .uploadImg{width:150px;height: 80px;padding: 0;}
    b{color:red;}
    .remind{margin:10px 0px 10px 30px; }

    .btn_add{text-align: center; line-height: 60px;}
    .upimg_box img{width:150px;height: 80px; line-height: 80px;}
    .sctxt{position: relative; top: -21px;height: 20px; width: 150px; line-height: 20px; text-align: center;  background-color: #888; opacity: 0.3;}
    .sctxt a{color:#000;}
    .ul_pics{text-align: center;line-height: 80px;}
</style>
<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">添加<?php if(($type) == "policy"): ?>创业政策<?php else: ?>新闻动态<?php endif; ?></h2>
        </div>
        <section>
            <p class="remind">带<b>*</b>号栏目是必填项</p>
            <form id="my_form">
                <ul class="ulColumn2">
                    <li>
                        <input type="hidden" name="type" value="<?php echo ($type); ?>">
                        <span class="item_name" style="width:120px;">类别<b>*</b>：</span>
                        <input type="text" name="" class="textbox textbox_225" readonly value="<?php if(($type) == "policy"): ?>创业政策<?php else: ?>新闻动态<?php endif; ?>"/>
                    </li>

                    <li>
                        <span class="item_name" style="width:120px;">标题<b>*</b>：</span>
                        <textarea class="textarea" name="title" style="height:50px;width:400px;"></textarea>
                    </li>

                    <li>
                        <span class="item_name" style="width:120px;">链接<b>*</b>：</span>
                        <textarea class="textarea" name="url" style="height:50px;width:400px;"></textarea>
                    </li>
                   
                    <li>
                        <span class="item_name" style="width:120px;">上传图片<b>*</b>：</span>
                        <label class="uploadImg">
                            <div class="container">
                                <div class="up_add f_btn">
                                    <a class="btn" id="btn"></a>    
                                </div>
                                <ul id="ul_pics" class="ul_pics clearfix">+</ul> 
                            </div>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">详情：</span>
                        <textarea class="textarea" name="description" style="height:150px;width:400px;"></textarea>
                    </li>
                 
                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <button type="button" class="link_btn save_btn" >保存</button>
                    </li>
                </ul>
            </form>
        </section>
    </div>
</section>
<script>
    var uploader = new plupload.Uploader({
        runtimes: 'html5,flash,silverlight,html4',
        browse_button: 'btn',
        url: "<?php echo U('uploads');?>",
        flash_swf_url: 'plupload/Moxie.swf',
        silverlight_xap_url: 'plupload/Moxie.xap',
        filters: {
            max_file_size: '500kb', //最大上传文件大小（格式100b, 10kb, 10mb, 1gb）
            mime_types: [//允许文件上传类型
                {title: "files", extensions: "jpg,png,gif"}
            ]
        },
        multi_selection: false, //true:ctrl多文件上传, false 单文件上传
        init: {
            FilesAdded: function(up, files) { //文件上传前
                var div = '';
                plupload.each(files, function(file) { //遍历文件
                    div += "<div id='" + file['id'] + "'><div class='progress'><span class='bar'></span><span class='percent'>0%</span></div></div>";
                });
                
                $("#ul_pics").html(div);
                uploader.start();
            },
            UploadProgress: function(up, file) { //上传中，显示进度条
                $("#" + file.id).find('.bar').css({"width": file.percent + "%"}).find(".percent").text(file.percent + "%");
            },
            FileUploaded: function(up, file, info) { //文件上传成功的时候触发
                $("#"+file.id).html('');

                var data = JSON.parse(info.response);
                if(data.error == 0){
                   
                    $("#"+file.id).html("<div class='upimg_box'><img src='" + data.pic + "'/><input type='hidden' name='image' value="+ data.path +"></div>");
                    
                }
       
            },
            Error: function(up, err) { //上传出错的时候触发
                alert(err.message);
            }
        }
    });
    uploader.init();

    $("#ul_pics").on("click", "#del_image", function() {
        $(this).parent().parent().remove();
    });

    $(".save_btn").click(function(){
        var data = $("#my_form").serialize();

        $.ajax({
            url: "<?php echo U('articleAdd');?>",
            type: "POST",
            dataType: "json",
            data: data,
            success:function(res){
                console.log(res);
                if(res.status > 0){
                    layer.msg("添加成功", {time:2000},function(){
                        location.href = "<?php echo u('articleList');?>?type=<?php echo ($type); ?>";
                    });
                }else{
                    layer.msg(res.info, {time:2000});
                }
            }

        });
    });

</script>
</body>
</html>