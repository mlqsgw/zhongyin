$(function(){
  //添加版本号
  function addVersion() {
    var t = getTimeMs();
    var css = $('#css').attr('href') + '?v=' + t;
    var js = $('#js').attr('src') + '?v=' + t;
    $('#css').attr('href',css);
    $('#js').attr('src',js);
  }

	//帮助标题名过长截图
	function changeName() {
		for(var i =0;i<$('#help .title').length;i++) {
			var str = $('#help .title').eq(i).text();
			str = strChange(str,12);
			$('#help .title').eq(i).text(str);			
		}
	}

	//问题列表下拉动态
	$('#help li .problem-name .choose').bind('click',function(){
		var isShow = $(this).children('.down').hasClass('dn');
		if(isShow){
			$(this).children('.down').removeClass('dn');
			$(this).children('.up').addClass('dn');	
			$(this).parent('.problem-name').next('.problem-txt').slideUp();
		}else{
			$(this).children('.down').addClass('dn');
			$(this).children('.up').removeClass('dn');	
			$(this).parent('.problem-name').next('.problem-txt').slideDown();
		}
	});

  //第一次加载
  addVersion();
  changeName();
});