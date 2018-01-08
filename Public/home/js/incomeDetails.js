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

  //第一次加载
  addVersion();
});