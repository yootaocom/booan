<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/www/wwwroot/luodiye/public/../application/index/view/index/index.html";i:1598434465;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="screen-orientation" content="portrait">
    <meta name="browsermode" content="application">
    <meta name="x5-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="app">
    <meta name="full-screen" content="yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="640">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="/assets/css/main/index.css" tppabs="/css/index.css">
    <script type="text/javascript" charset="UTF-8" src="js/jquery-1.8.3.min.js"></script>

    <title>游戏下载</title>
<body>
<div id="downloadButton" class="but">
    <div class="img-box" style="position: relative">
        <!--<img src="/img/bg.jpg" class="imgg" onclick="return false">-->
        <div class="bottom"></div>
        <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
</div>

<!--微信浏览器检测-->
<div id="weixinTip" style="display: none;">
    <p style="text-align: center;">
        <img class="weixin" src="/img/weixin-tip.png" style="width: 100%;">
    </p>
</div>

<a class="kefu" href="https://message.6duyou.cn/addons/kefu/index/im?fixed_csr=2"></a>
</body>
    <script type="text/javascript" charset="UTF-8">
$(function () {

    function getQueryVariable(variable)
    {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if(pair[0] == variable){return pair[1];}
        }
        return('-1');
    }

    function getQueryVariables(variable)
    {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if(pair[0] == variable){return pair[1];}
        }
        return('100');
    }

    var nowch = getQueryVariable('channelCode');
    if (nowch==-1){
        var domain = window.location.host;
        var newdomain = "https://"+domain+'?channelCode=100';
        console.log(newdomain);
        window.location.href = newdomain;
    }else {
        console.log(nowch);
    }


    function is_weixin() {
        var ua = navigator.userAgent.toLowerCase();
        if (ua.match(/MicroMessenger/i) == "micromessenger" || ua.match(/WeiBo/i) == "weibo" || (ua.match(/QQ/i) == 'qq' && ua.match(/QQBrowser/i) != 'qqbrowser')) {
            return true;
        } else if (ua.indexOf('mobile mqqbrowser') > -1) {
            return true;
        } else {
            return false;
        }
    }

    var isWx = is_weixin();
    if (isWx) {
        var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight;
        $("#weixinTip").show().css({ "height": winHeight });
    }else{
		

    var browser = {
        versions: function () {
            var u = navigator.userAgent, app = navigator.appVersion;
            return {
                trident: u.indexOf('Trident') > -1, 
                presto: u.indexOf('Presto') > -1, 
                webKit: u.indexOf('AppleWebKit') > -1, 
                gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, 
                mobile: !!u.match(/AppleWebKit.*Mobile/i) || !!u.match(/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/), //是否为移动终端
                ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), 
                android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, 
                iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, 
                iPad: u.indexOf('iPad') > -1, 
                webApp: u.indexOf('Safari') == -1
            };
        } (),
        language: (navigator.browserLanguage || navigator.language).toLowerCase()
    }

    $('.weixin').attr('src','/img/iostip.png');
    
    if (browser.versions.iPhone || browser.versions.iPad || browser.versions.ios) {
        var button = document.getElementById("downloadButton");
        
                button.onclick = function() {
                    window.location.href = '<?php echo $channelCode; ?>';
                }
    }else{
        var button = document.getElementById("downloadButton");
        
                button.onclick = function() {
                    window.location.href = 'https://yunfan1.oss-accelerate.aliyuncs.com/newqd/yunfan'+getQueryVariables('channelCode')+'.apk';
                }
        }
	}



});
    </script>

</html>