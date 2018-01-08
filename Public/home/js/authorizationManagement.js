$(function(){
  //添加版本号
  function addVersion() {
    var t = getTimeMs();
    var css = $('#css').attr('href') + '?v=' + t;
    var js = $('#js').attr('src') + '?v=' + t;
    $('#css').attr('href',css);
    $('#js').attr('src',js);
  }

	//菜单选项卡
	$('#menu .tab').bind('click',function(){
		$('#menu .tab').removeClass('active');
		$(this).addClass('active');
		
		var index = $(this).index();
		$('.infor').addClass('dn');
		$('.infor').eq(index).removeClass('dn');
	});

	//关于审核通过弹窗
	function openpopupPass() {
		$('#popupPass').removeClass('dn');
	}	
	function closepopupPass() {
		$('#popupPass').addClass('dn');
	}	
	//关于审核不通过弹窗
	function openpopupNoPass() {
		$('#popupNoPass').removeClass('dn');
	}	
	function closepopupNoPass() {
		$('#popupNoPass').addClass('dn');
	}	

	//审核通过弹窗绑定事件
	$('#user-list li .state .pass').bind('click',function(){
		openpopupPass();
	});
	$('#user-list li .state .no-pass').bind('click',function(){
		openpopupNoPass();
	});	
	
	//审核通过弹窗事件
	$('#popupPass .popup .choose .no').bind('click',function(){
		closepopupPass();
	});
	//审核不通过弹窗事件
	$('#popupNoPass .popup .choose .yes').bind('click',function(){
		closepopupNoPass();
	});	
	$('#popupNoPass .popup .choose .no').bind('click',function(){
		closepopupNoPass();
	});
	
	
  //第一次加载
  addVersion();
});