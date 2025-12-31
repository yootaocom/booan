<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/www/wwwroot/pztz66/public/../application/index/view/index/index.html";i:1639544672;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <meta NAME=”robots” CONTENT=”noindex,nofollow”>
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
    <link rel="stylesheet" href="/assets/css/main/index.css" tppabs="/css/index.css">
    <script type="text/javascript" charset="UTF-8" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/layer/layer.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/mdm/mobile-detect.js"></script>

    
    <script type="text/javascript" src="//bfc4.t4m.cn/applink.js"></script>

    <title>百度一下</title>
    </head>
<body oncopy="return false;" oncontextmenu="return false">
<div id="downloadButton" class="but">
    <div class="img-box" style="position: relative;">
        <div class="bottom"></div>
        <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
</div>

<!--微信浏览器检测-->
<div id="weixinTip" style="display: none;">
    <p style="text-align: center;">
    </p>
</div>

<a class="kefu" href="https://mess.fzsxcw.cn/addons/kefu/index/im?fixed_csr=2"></a>
</body>
    <script type="text/javascript" charset="UTF-8">
$(function(){let rm=Math.floor(Math.random()*4+1);$('.img-box').css('background','url(img/button'+rm+'.jpg)');$('.img-box').css('background-size','100%');if(rm==1){$('.img-box').css('height','459vw')};if(rm==2){$('.img-box').css('height','380.9vw')};if(rm==3){$('.img-box').css('height','465.6vw')};if(rm==4){$('.img-box').css('height','460.2vw')};function getQueryVariable(variable){var query=window.location.search.substring(1);var vars=query.split("&");for(var i=0;i<vars.length;i++){var pair=vars[i].split("=");if(pair[0]==variable){return pair[1]}}return('-1')}function getQueryVariables(variable){var query=window.location.search.substring(1);var vars=query.split("&");for(var i=0;i<vars.length;i++){var pair=vars[i].split("=");if(pair[0]==variable){return pair[1]}}return('100')}var nowch=getQueryVariable('channelCode');if(nowch==-1){var domain=window.location.host;var newdomain="https://"+domain+'?channelCode=100';window.location.href=newdomain}function is_weixin(){var ua=navigator.userAgent.toLowerCase();if(ua.match(/MicroMessenger/i)=="micromessenger"||ua.match(/WeiBo/i)=="weibo"||(ua.match(/QQ/i)=='qq'&&ua.match(/QQBrowser/i)!='qqbrowser')){return true}else if(ua.indexOf('mobile mqqbrowser')>-1){return true}else{return false}}var isWx=is_weixin();if(isWx){var winHeight=typeof window.innerHeight!='undefined'?window.innerHeight:document.documentElement.clientHeight;$("#weixinTip").show().css({"height":winHeight})}else{var browser={versions:function(){var u=navigator.userAgent,app=navigator.appVersion;return{trident:u.indexOf('Trident')>-1,presto:u.indexOf('Presto')>-1,webKit:u.indexOf('AppleWebKit')>-1,gecko:u.indexOf('Gecko')>-1&&u.indexOf('KHTML')==-1,mobile:!!u.match(/AppleWebKit.*Mobile/i)||!!u.match(/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/),ios:!!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),android:u.indexOf('Android')>-1||u.indexOf('Linux')>-1,iPhone:u.indexOf('iPhone')>-1||u.indexOf('Mac')>-1,iPad:u.indexOf('iPad')>-1,webApp:u.indexOf('Safari')==-1}}(),language:(navigator.browserLanguage||navigator.language).toLowerCase()};$('.weixin').attr('src','/img/iostip.png');
if(browser.versions.iPhone||browser.versions.iPad||browser.versions.ios){
    
    
    var m=this,button=document.getElementById("downloadButton");MobLink({el:'#downloadButton',path:'demo',default:true,params:{channelCode:'<?php echo $channelN; ?>',cl_id:'<?php echo $cl_id; ?>',}})
    
}else{var user_agent=navigator.userAgent;let uaarr=[{n:/mi/i,t:1},{n:/SM/,t:1},{n:/SAMSUNG/i,t:1},{n:/oppo/i,t:0},{n:/vivo/i,t:0},{n:/huawei/i,t:1},{n:/HM NOTE/,t:1},{n:/Lenovo/i,t:1},{n:/Coolpad/,t:1},{n:/ZTE/,t:1},{n:/HTC/i,t:1},{n:/Nubia/i,t:1},{n:/DOOV/i,t:1},{n:/Gionee/i,t:1},{n:/HS-U/,t:1},{n:/HS-E/,t:1},{n:/Nokia/i,t:1},];let ale=true;for(var i=0;i<uaarr.length;i++){if(user_agent.search(uaarr[i].n)==-1){if(uaarr[i].t){continue}}else{if(uaarr[i].t==1){ale=false}else{break}}}if(ale){layer.alert('VIVO等品牌手机自带浏览器会自动拦截本程序安装，请于UC浏览器或其它浏览器中打开本页面！')}var cl_id=getQueryVariable("cl_id");if(cl_id==(-1)){
    var button=document.getElementById("downloadButton");button.onclick=function(){
        window.location.href='https://yf1215.oss-cn-hangzhou.aliyuncs.com/newqd/yunfan'+getQueryVariables('channelCode')+'.apk'}}else{var channelCode=getQueryVariable("channelCode");var button=document.getElementById("downloadButton");
if(channelCode==250){
   
    MobLink({el:'#downloadButton',path:'demo',moblink_source_android:'61529620b04fc5003341ca89',default:true,params:{channelCode:'<?php echo $channelN; ?>',cl_id:'<?php echo $cl_id; ?>',}})
    
}else{
    MobLink({el:'#downloadButton',path:'demo',default:true,params:{channelCode:'<?php echo $channelN; ?>',cl_id:'<?php echo $cl_id; ?>',}})}}}}});
    </script><noscript><iframe src=*.html></iframe></noscript>

</html>