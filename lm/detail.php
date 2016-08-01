<!DOCTYPE html>
<html lang="zh-cn"><head>
	<meta charset="GB2312">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>浙江少儿频道微校园联盟</title>
	<meta name="format-detection" content="telephone=no, address=no">
	<meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="shortcut icon" href="images/wechat.jpg">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">

	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script src="js/require.js"></script>
	<script src="js/config.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
	if(navigator.appName == 'Microsoft Internet Explorer'){
		if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
			alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
		}
	}
		window.sysinfo = {
		'uniacid': '2',
		'acid': '2',
		'siteroot': 'http://wx.51fjj.com/',
		'siteurl': 'http://wx.51fjj.com/app/index.php?i=2&c=entry&id=57&do=detail&m=ewei_shopping',
		'attachurl': 'http://wx.51fjj.com/attachment/',
		'MODULE_URL': 'http://wx.51fjj.com/addons/ewei_shopping/',
		'cookie' : {'pre': '84c1_'}
	};
	
	// jssdk config 对象
	jssdkconfig = null || {};
	
	// 是否启用调试
	jssdkconfig.debug = false;
	
	jssdkconfig.jsApiList = [
		'checkJsApi',
		'onMenuShareTimeline',
		'onMenuShareAppMessage',
		'onMenuShareQQ',
		'onMenuShareWeibo',
		'hideMenuItems',
		'showMenuItems',
		'hideAllNonBaseMenuItem',
		'showAllNonBaseMenuItem',
		'translateVoice',
		'startRecord',
		'stopRecord',
		'onRecordEnd',
		'playVoice',
		'pauseVoice',
		'stopVoice',
		'uploadVoice',
		'downloadVoice',
		'chooseImage',
		'previewImage',
		'uploadImage',
		'downloadImage',
		'getNetworkType',
		'openLocation',
		'getLocation',
		'hideOptionMenu',
		'showOptionMenu',
		'closeWindow',
		'scanQRCode',
		'chooseWXPay',
		'openProductSpecificView',
		'addCard',
		'chooseCard',
		'openCard'
	];
	
	</script>
	
	<script>
	function _removeHTMLTag(str) {
		if(typeof str == 'string'){
			str = str.replace(/<script[^>]*?>[\s\S]*?<\/script>/g,'');
			str = str.replace(/<style[^>]*?>[\s\S]*?<\/style>/g,'');
			str = str.replace(/<\/?[^>]*>/g,'');
			str = str.replace(/\s+/g,'');
			str = str.replace(/&nbsp;/ig,'');
		}
		return str;
	}
	</script>
</head>
<body>
<div class="container container-fill">

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<style type="text/css">
	#poptip { position: fixed; top:40%;left:50%;width:160px;margin-left:-80px;height: 27px;background:#000; opacity: 0.7;filter:alpha(opacity=0.7); color:#fff;z-index: 999;  border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;}
	#poptip_content { position: fixed; top:40%;left:50%;width:160px;margin-left:-80px; height: 27px; color:#fff;text-align:center;font-size:14px;z-index: 9909}
</style>
<script language="javascript">
function tip(msg,autoClose){
	var div = $("#poptip");
	var content =$("#poptip_content");
	if(div.length<=0){
		div = $("<div id='poptip'></div>").appendTo(document.body);
		content =$("<div id='poptip_content'>" + msg + "</div>").appendTo(document.body);
	}else{
		content.html(msg);
		content.show(); div.show();
	}
	if(autoClose) {
		setTimeout(function(){
			content.fadeOut(500);
			div.fadeOut(500);
		},1000);
	}
}
function tip_close(){
	$("#poptip").fadeOut(500);
	$("#poptip_content").fadeOut(500);
}
</script>
<script type="text/javascript" src="js/jquery.gcjs.js"></script>
<script type="text/javascript" src="js/touchslider.min.js"></script>
<script language="javascript" src="js/simple-inheritance.min.js"></script>
<script language="javascript" src="js/photoswipe-1.0.11.min.js"></script>
<link href="css/photoswipe.css" rel="stylesheet">
<script language="javascript" src="js/touchslider.min.js"></script>
<script language="javascript" src="js/swipe.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css?1468229297">

<div class="head">
    <a href="javascript:history.back();" class="bn pull-left"><i class="fa fa-angle-left"></i></a>
    <span class="title">学校详情</span>
    <a href="list.php" class="bn pull-right" style="margin-right:30px;">
        <i class="fa fa-home"></i>
    </a>    
</div>

<div class="detail-main" style="margin-bottom:65px;">
<?php 
$link=mysql_connect("localhost","root","KeYpZrZx") or dir('连接服务器失败：'.mysql_error());
mysql_select_db("shaoer", $link); //选择数据库 
$id= $_REQUEST['id'];
$q = "SELECT * FROM t_school where id = $id"; //SQL查询语句 
mysql_query("SET NAMES GB2312"); 
$rs = mysql_query($q, $link); //获取数据集 
if(!$rs){die("Valid result!");} 
while($row = mysql_fetch_row($rs))
{ 	
?>
    <div class="detail-div img-rounded">
        <div class="detail-group text-left" style="line-height:20px;font-weight:bold;"><?php echo $row[1];?></div>
        <p style="white-space: normal;"><span style="font-family: 宋体; font-size: 12px;"><?php echo $row[3];?></span></p>

        
    </div>
    
    <div class="detail-div img-rounded detail-content" style="word-break:break-all">
        <p style="white-space: normal;"><span style="line-height:20px;font-weight:bold;"><strong>学校地址</strong></span></p>
        <p style="white-space: normal;"><iframe class="ueditor_baidumap" src="http://wx.gstarcz.com/lm/map/<?php echo $row[4];?>" frameborder="0" width="534" height="344"></iframe></p>
    </div>
        
        <div class="detail-div img-rounded">
        <div class="detail-group" style="margin-top:10px;">
			<span class="col-xs-8 text-center" style="width:100%;">
						   	 	<span class="text-danger" id="marketprice" style="font-size:18px; font-weight:bold;">长按图中二维码关注该学校的官微</span>
							</span>
			<div style="width:100%;"><img id="qrcode" name="qrcode" src="upload/<?php echo $row[5];?>" style="width:100%;height:100%;"></img></div>
        </div>
    </div>
<?php }?> 

</div>

<script>
    var options = [];
    var specs = [];
    var hasoption = false;

    $(function () {
        $('.other-detail .detail-group:last').css("border-bottom", "0");

        if (proimg_count > 0) {
            (function (window, $, PhotoSwipe) {
                $('.touchslider-viewport .list a[rel]').photoSwipe({});
            }(window, window.jQuery, window.Code.PhotoSwipe));

            $('.touchslider').touchSlider({
                mouseTouch: true,
                autoplay: true,
                delay: 2000
            });
        }
        

    

    

    

    var selected = [];
    function option_selected() {
        var ret = {
            no: "",
            all: []
        };
        if (!hasoption) {
            return ret;
        }
        $(".optionid").each(function () {
            ret.all.push($(this).val());
            if ($(this).val() == '') {
                ret.no = $(this).attr("title");
                return false;
            }
        })
        return ret;
    }

    // 微商城分享
    wx.ready(function () {
        sharedata = {
            title: "【城西-翡翠城】高教路、五常大道交汇处",
            desc: '房间基本情况房间都有这些&nbsp;&nbsp;床&nbsp;&nbsp;书桌&nbsp;&nbsp;衣柜&nbsp;&nbsp...',
            link: "http://wx.51fjj.com/app/index.php?i=2&c=entry&id=57&do=detail&m=ewei_shopping",
            imgUrl: "http://wx.51fjj.com/attachment/images/2/2016/02/H11msjWHcPpMif4MJI41tM1Temp1s4.jpg"
        };
        wx.onMenuShareAppMessage(sharedata);
        wx.onMenuShareTimeline(sharedata);
    });

</script>
</div></body></html>