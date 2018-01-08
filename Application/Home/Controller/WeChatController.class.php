<?php
//这两个控制器是我本来就有的这里就不做演示  可以不继承 这个控制器用到的东西 不依靠外面的东西
namespace Home\Controller;
use Think\Controller;
/**
 * 首页
 */
define("TOKEN", "weixin");//定义你公众号自己设置的token
define("APPID", "wxa6774929c8ebee18");//填写你微信公众号的appid 千万要一致啊
define("APPSECRET", "2f87be855a9b925562a0f3e79b18ca49");//填写你微信公众号的appsecret  千万要记得保存 以后要看的话就只有还原了  保存起来 有益无害
class WeChatController extends Controller
{   
    private $app_id = 'wxa6774929c8ebee18'; //公众号appid
    private $app_secret = '2f87be855a9b925562a0f3e79b18ca49'; //公众号app_secret
    private $redirect_uri = 'http://www.luoliwuxie.com/index.php/Home/Index/index'; //授权之后跳转地址

    function index(){
        header("Content-Type: text/html; charset=UTF-8");
        $REDIRECT_URI = "http://www.luoliwuxie.com/index.php/Home/Index/index";
        $REDIRECT_URI = urlencode($REDIRECT_URI);
        $scope = "snsapi_userinfo";   
        $state = md5(mktime());
        //获取推荐人id 
        $parent_zero_id = $_GET['parent_zero_id'];
        if(!$parent_zero_id){
            $parent_zero_id = 0;
        }

        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".APPID."&redirect_uri=".$REDIRECT_URI."&response_type=code&scope=".$scope."&state=".$state."&parent_zero_id=".$parent_zero_id."#wechat_redirect";
        header("location:$url");        
    }
    function getCode(){
        header("Content-Type: text/html; charset=UTF-8");
        $code = $_GET["code"];
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".APPID."&secret=".APPSECRET."&code=".$code."&grant_type=authorization_code";
        $res = $this->https_request($url);
        $res  = json_decode($res,true);
        $openid = $res["openid"];
        $access_token = $res["access_token"];
        $url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$access_token."&openid=".$openid."&lang=zh_CN";
        $res = $this->https_request($url);
        $res = json_decode($res,true);
        return $res;
        // foreach ($res as $key => $value) {
        //     echo $value . '<br>';
 
        // }
/*        $arr = $res['openid'];
        session('id',$res['openid']);
        header("location:http://v.150643.com/index.php/me/me");*/
 
 
    }
    function https_request($url, $data = null)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (!empty($data)){
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

} //classend