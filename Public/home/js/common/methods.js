//是否是手机号 是 返回 true
function judgePhone(str) {
	let reg = /^0*(13|15|18|17|14)\d{9}$/;
	return reg.test(str);
}

//空格检验
function checkSpaceCharacter(val){
	var reg = /\s/;
	if(reg.exec(val)==null){
		return true;
	}else{
		return false;
	}
}

//判断密码是否符合要求  是 返回true
function judgePassword(str) {
	var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{8,16}$/;
	return reg.test(str);
}

//获取当前时间的毫秒
function getTimeMs() {
	var t = new Date();
	return t.getTime();
}


//获取url相应参数值
function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if(r != null) return unescape(r[2]);
	return null;
}


//str长度超出一定的数量，省略号处理
function strChange(str,num) {
	if(str.length < num) {
		return str;
	}
	var newStr = str.slice(0,num-1) + '...';
	return newStr;
}
