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
			showErrorPopup('微信订单不能为空');
			return
		}		
	});

  //第一次加载
  addVersion();
});