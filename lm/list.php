
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="GB2312">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title>�㽭�ٶ�Ƶ��΢У԰����</title>
	<meta name="format-detection" content="telephone=no, address=no">
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
	<meta name="apple-touch-fullscreen" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="shortcut icon" href="images/wechat.jpg" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script src="js/require.js"></script>
	<script src="js/app/config.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
	if(navigator.appName == 'Microsoft Internet Explorer'){
		if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
			alert('��ʹ�õ� IE ������汾����, �Ƽ�ʹ�� Chrome ������� IE8 �����ϰ汾�����.');
		}
	}
		window.sysinfo = {
		'uniacid': '2',
		'acid': '2',
		'siteroot': 'http://wx.51fjj.com/',
		'siteurl': 'http://wx.51fjj.com/app/index.php?i=2&c=entry&do=list&m=ewei_shopping',
		'attachurl': 'http://wx.51fjj.com/attachment/',
		'MODULE_URL': 'http://wx.51fjj.com/addons/ewei_shopping/',
		'cookie' : {'pre': '84c1_'}
	};
	
	// jssdk config ����
	jssdkconfig = null || {};
	
	// �Ƿ����õ���
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
<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
<style type='text/css'>
	#poptip { position: fixed; top:40%;left:50%;width:160px;margin-left:-80px;height: 27px;background:#000; opacity: 0.7;filter:alpha(opacity=0.7); color:#fff;z-index: 999;  border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;}
	#poptip_content { position: fixed; top:40%;left:50%;width:160px;margin-left:-80px; height: 27px; color:#fff;text-align:center;font-size:14px;z-index: 9909}
</style>
<script language='javascript'>
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
</script><script language="javascript" src="js/touchslider.min.js"></script>
<script language="javascript" src="js/swipe.js"></script>
<style>
   .td_a { height:7em; text-align: center}
</style>
<link type="text/css" rel="stylesheet" href="css/style.css?1468120412">
<div class="head">
	<span class="title">�㽭�ٶ�Ƶ��-΢У԰����</span>
<!--
	<a href="./index.php?i=2&c=entry&do=mycart&m=ewei_shopping" class="bn pull-right"><i class="fa fa-shopping-cart"></i><span class="buy-num img-circle" id="carttotal">0</span></a>
-->
	
</div>

<div id="banner_box" class="box_swipe" style='width:100%;float:left;'>
	<ul>
			</ul>
	<ol>
	   		</ol>
</div>
<script>
	$(function() {
		new Swipe($('#banner_box')[0], {
			speed:500,
			auto:3000,
			callback: function(){
				var lis = $(this.element).next("ol").children();
				lis.removeClass("on").eq(this.index).addClass("on");
			}
		});
	});
</script>

<div class="shopping-main">
	<div class="list" id="list_rec">
	<div class="list-tips" style='float:left;width:100%;font-size:14px;color:#FF9700;padding-left:10px;'>����ѧУ</div>
	
<?php 
$link=mysql_connect("localhost","root","KeYpZrZx") or dir('���ӷ�����ʧ�ܣ�'.mysql_error());
mysql_select_db("shaoer", $link); //ѡ�����ݿ� 
$q = "SELECT * FROM t_school order by id"; //SQL��ѯ��� 
mysql_query("SET NAMES GB2312"); 
$rs = mysql_query($q, $link); //��ȡ���ݼ� 
if(!$rs){die("Valid result!");} 
while($row = mysql_fetch_row($rs))
{ 
	echo "<div class=\"list-item img-rounded\"><div>"; 
	echo "<a href=\"detail.php?id=$row[0]\">";
	echo "<img src=\"upload/$row[2]\">";
	echo "	</a>";
	echo "	<span class=\"title\">";
	echo "		<a href=\"detail.php?id=$row[0]\">";
	echo "			$row[1]</a>";
	echo "				</span>";
	echo "</div>";
	echo "<span class=\"sold\">";
	echo "	<span style=\"float: right!important;background-color: #EE5E48;  border-radius: 3px;  padding: 2px 6px;  margin-right: 3px;  white-space: nowrap;  display: inline-block;  color: #FFF;\"><a href=\"detail.php?id=$row[0]#qrcode\"><span style=\"color: #FFF;\">��ע</span></a></span>";
	echo "</span>";
  echo "</div>";
}
mysql_free_result($rs); //�ر����ݼ�
?>
	
			
	</div>
</div>

<script type="text/javascript">
function loadPage(pindex, container, pcate, ccate) {
	pindex = parseInt(pindex) + 1;
	var pager = $('#pager_' + pcate + "_" + ccate);
	pager.html('���ڼ�������...');
	var url = "./index.php?i=2&c=entry&do=listmore&m=ewei_shopping";
	$.get(url, {'page' : pindex, 'pcate':pcate, 'ccate':ccate}, function(html){
		if (html.indexOf('list-item') > - 1) {
			pager.html('���������Ʒ');
			$('#' + container).append(html);
			pager.get(0).onclick = function(){
				loadPage(pindex, container, pcate, ccate);
			}
		} else {
			pager.html('�Ѿ���ʾȫ����Դ');
		}
	});
}

function loadRecPage(pindex, container) {
	pindex = parseInt(pindex) + 1;
	var pager = $('#pager_rec');
	pager.html('���ڼ�������...');
	var url = "./index.php?i=2&c=entry&do=listmore_rec&m=ewei_shopping";
	$.get(url, {'page' : pindex}, function(html){
		if (html.indexOf('list-item') > - 1) {
			pager.html('������෿Դ');
			$('#' + container).append(html);
			pager.get(0).onclick = function(){
				loadRecPage(pindex, container);
			}
		} else {
			pager.html('�Ѿ���ʾȫ����Դ');
		}
	});
}
</script>

<!--
					<div class="text-center footer" style="margin:10px 0; width:100%; text-align:center; word-break:break-all;">
									<a href="http://www.51fjj.com">���Ҽ�</a>&nbsp;&nbsp;								&nbsp;&nbsp;			</div>
						<script>require(['bootstrap']);</script>
	</div>
	<style>
		h5{color:#555;}
	</style>
	<script type="text/javascript">
	
	wx.config(jssdkconfig);
	
	var $_share = {"title":"\u623f\u5bb6\u52a0\u516c\u5bd3","imgUrl":"","desc":"","link":"http:\/\/wx.51fjj.com\/app\/index.php?i=2&c=entry&do=list&m=ewei_shopping"};
	
	if(typeof sharedata == 'undefined'){
		sharedata = $_share;
	} else {
		sharedata['title'] = sharedata['title'] || $_share['title'];
		sharedata['desc'] = sharedata['desc'] || $_share['desc'];
		sharedata['link'] = sharedata['link'] || $_share['link'];
		sharedata['imgUrl'] = sharedata['imgUrl'] || $_share['imgUrl'];
	}

	function tomedia(src) {
		if(typeof src != 'string')
			return '';
		if(src.indexOf('http://') == 0 || src.indexOf('https://') == 0) {
			return src;
		} else if(src.indexOf('../addons') == 0 || src.indexOf('../attachment') == 0) {
			src=src.substr(3);
			return window.sysinfo.siteroot + src;
		} else if(src.indexOf('./resource') == 0) {
			src=src.substr(2);
			return window.sysinfo.siteroot + 'app/' + src;
		} else if(src.indexOf('images/') == 0) {
			return window.sysinfo.attachurl+ src;
		}
	}
	
	if(sharedata.imgUrl == ''){
		var _share_img = $('body img:eq(0)').attr("src");
		if(_share_img == ""){
			sharedata['imgUrl'] = window.sysinfo.attachurl + 'images/global/wechat_share.png';
		} else {
			sharedata['imgUrl'] = tomedia(_share_img);
		}
	}
	
	if(sharedata.desc == ''){
		var _share_content = _removeHTMLTag($('body').html());
		if(typeof _share_content == 'string'){
			sharedata.desc = _share_content.replace($_share['title'], '')
		}
	}
	
	wx.ready(function () {
		wx.onMenuShareAppMessage(sharedata);
		wx.onMenuShareTimeline(sharedata);
		wx.onMenuShareQQ(sharedata);
		wx.onMenuShareWeibo(sharedata);
	});
		</script>
	<script>
		require(['jquery'],function(){
			$(function(){
				if($('.quick')!=null && $('.quick')!=''){
					var h = $('.quick').height()+'px';
					$('body').css("padding-bottom",h);
				}else{
					$('body').css("padding-bottom", "0");
				}
			})
		});
	</script>
</body>
</html>

<style>
	.footerbar{position:fixed; left:0; bottom:0px; width:100%; height:50px; background:#f1f1f1; border-top:1px solid #c9c9c9; z-index:5;}
	.footerbar a{display:block; float:left; padding:5px 0; width:24.5%; height:50px; text-align:center; color: #4f4f4f; text-decoration:none; border-left:1px solid #e1e1e1;}
	.footerbar a:first-child{border-left:0;}
	.footerbar a i{font-size:20px; display:block;}
	#footer { position:fixed;width:100%;left:0;bottom:0px;height:30px;line-height:30px;color:#fff;background:#333;border-top:0;}
</style>

<div class="footerbar">
	<a href="./index.php?i=2&c=entry&do=list&m=ewei_shopping"><i class="fa fa-gift"></i> �̳���ҳ</a>
	<a href="./index.php?i=2&c=entry&do=mycart&m=ewei_shopping"><i class="fa fa-shopping-cart"></i> ���ﳵ</a>
	<a href="./index.php?i=2&c=entry&do=myorder&m=ewei_shopping"><i class="fa fa-user"></i> �ҵĶ���</a>
	<a href="./index.php?i=2&c=entry&do=contactus&m=ewei_shopping"><i class="fa fa-globe"></i> Ʒ�ƽ���</a>
</div>

<script>
	document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		WeixinJSBridge.call('hideToolbar');
				WeixinJSBridge.call('showOptionMenu');
			});
</script>-->

