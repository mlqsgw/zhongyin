<?php

//获取token
function getWeChatToken(){
    $appid="";
    $appsecret=" ";
    if(empty($token)){
        $res = file_get_contents('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=' . $appid . '&secret=' . $appsecret);
        $res = json_decode($res, true);
        $token = $res['access_token'];

        S('access_token',$token,3000);
    }
    return $token;
}

/**
 * 获取用户openid
 */
function getOpenid(){
    define("ACCESS_TOKEN",getWeChatToken());
    $url="https://api.weixin.qq.com/cgi-bin/user/get?access_token=".ACCESS_TOKEN;
    $res = https_request($url);
    $data = json_decode($res,true);
    $openid = $data['data']['openid'];

    return $openid;
}

?>