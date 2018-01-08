$(function(){
  //添加版本号
  function addVersion() {
    var t = getTimeMs();
    var css = $('#css').attr('href') + '?v=' + t;
    var js = $('#js').attr('src') + '?v=' + t;
    $('#css').attr('href',css);
    $('#js').attr('src',js);
  }

	//微信名称过长截取
	function changeName() {
		var str = $('#name').text();
		str = strChange(str,7);
		$('#name').text(str);
	}

  //第一次加载
  addVersion();
  changeName();//微信名称过长截取
});