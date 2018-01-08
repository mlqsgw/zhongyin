$(function(){
  //添加版本号
  function addVersion() {
    var t = getTimeMs();
    var css = $('#css').attr('href') + '?v=' + t;
    var js = $('#js').attr('src') + '?v=' + t;
    $('#css').attr('href',css);
    $('#js').attr('src',js);
  }

	//显示错误弹窗并传值方法
	function showErrorPopup(tip) {
		$('#popupError').removeClass('dn');
		$('#popupError p').text(tip);
		var t = setTimeout(function(){
			$('#popupError').addClass('dn');
		},3000);
	}	
	
	//表单错误提示判断
	$('#name').bind('blur',function(){
		var str = $(this).val();
		if(str.length === 0){
			showErrorPopup('姓名不能为空');
			return
		}		
	});
	$('#id').bind('blur',function(){
		var str = $(this).val();
		if(str.length === 0){
			showErrorPopup('身份证不能为空');
			return
		}		
	});
	$('#phone').bind('blur',function(){
		var str = $(this).val();
		if(str.length === 0){
			showErrorPopup('手机号不能为空');
			return
		}		
		if(!judgePhone(str)){
			showErrorPopup('请输入正确的手机号');
			return
		}
	});

  //第一次加载
  addVersion();
});