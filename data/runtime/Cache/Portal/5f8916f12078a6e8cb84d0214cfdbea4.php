<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>联系我们 <?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
	<?php  function _sp_helloworld(){ echo "hello 天缘网络技术有限公司1!"; } function _sp_helloworld2(){ echo "hello 天缘网络技术有限公司2!"; } function _sp_helloworld3(){ echo "hello 天缘网络技术有限公司3!"; } ?>
	<?php $portal_index_lastnews="2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"天缘网络技术有限公司官网即将发布啦,尽情期待！", "slide_pic"=>$tmpl."Public/images/ad_1.jpg", "slide_url"=>"#", ), array( "slide_name"=>"天缘网络技术有限公司官网即将发布啦，尽情期待！", "slide_pic"=>$tmpl."Public/images/ad_2.jpg", "slide_url"=>"#", ), array( "slide_name"=>"天缘网络技术有限公司官网即将发布啦，尽情期待！", "slide_pic"=>$tmpl."Public/images/ad_3.jpg", "slide_url"=>"#", ), ); ?>
	<meta name="author" content="天缘网络技术有限公司">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/thinkcmf/themes/simplebootx/Public/images/logo.png" type="image/x-icon">
	<link rel="shortcut icon" href="/thinkcmf/themes/simplebootx/Public/images/logo.png" type="image/x-icon">
    <link href="/thinkcmf/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/thinkcmf/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/thinkcmf/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/thinkcmf/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/thinkcmf/themes/simplebootx/Public/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#ff7f50}
		#main-menu-user li.user{display: none}
	</style>
	

<script src="http://api.map.baidu.com/api?v=1.3"></script>

<style>
img 
{
	max-width: none;
}
.banner
 {
	background-color: #FFF;
	background-image: url("/thinkcmf/themes/simplebootx/Public/images/banner_2.png");
}
</style>
</head>
<body class="body-white">
	<?php echo hook('body_start');?>

<style>




</style>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/thinkcmf/"><img src="/thinkcmf/themes/simplebootx/Public/images/logo.png"/></a>
       <div class="nav-collapse collapse" id="main-menu">
  <!--     	php
			$effected_id="main-menu";
		  	$filetpl="<a href='\$href' target='\$target'>\$label</a>";
		  	$foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>";
		  	$ul_class="dropdown-menu" ;
		  	$li_class="" ;
		  	$style="nav";
		  	$showlevel=7;
		  	$dropdown='dropdown';
		  echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown);
		?> -->
		<!--要会使用系统函数，上面的数据这真的很不错-->
	   
<ul class="nav">
	<li class="dropdown" id="menu-item-1"><a href="/thinkcmf" target="" class="dropdown-toggle">首页</a>
	<ul class="dropdown-menu">
	<li class="" id="menu-item-11">
		    <a href="<?php echo U('portal/index/domain');?>" target="">公司新闻</a>
   </li>
	<li class="" id="menu-item-11">
	      <a  href="" target="">产品与服务</a>
	</li>	
		
	<li class="" id="menu-item-11">
		    <a href="<?php echo U('portal/index/article');?>" target="">行业动态</a>
		</li>
		
		<li class="" id="menu-item-11">
		    <a href="" target="">公司资质</a>
		</li>
		
		<li class="" id="menu-item-11">
		    <a href="<?php echo U('portal/index/va');?>" target="">关于我们</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="<?php echo U('portal/index/enter_culture');?>" target="">企业文化</a>
		</li>
		<li class="" id="menu-item-11">
		<a href="<?php echo U('portal/Index/zhaopin');?>" target="">招聘信息</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="<?php echo U('portal/Index/contact');?>" target="_blank">联系我们</a>
		</li>
	</ul>
	</li>
	<li class="dropdown" id="menu-item-11"><a href="" target="" class="dropdown-toggle">产品与服务</a>
	<ul class="dropdown-menu">
	<li class="" id="menu-item-11">
		    <a href="#" target="">产品与服务一</a>
		</li>
	<li class="" id="menu-item-11">
		    <a href="#" target="">产品与服务二</a>
		</li>
	<li class="" id="menu-item-11">
		    <a href="#" target="">产品与服务三</a>
		</li>
	<li class="" id="menu-item-11">
		    <a href="#" target="">产品与服务四</a>
		</li>
	<li class="" id="menu-item-11">
		    <a href="#" target="">产品与服务五</a>
		</li>
	</ul>
	</li>
	<li class="dropdown" id="menu-item-12">
	    <a class="dropdown-toggle" href="<?php echo U('portal/index/domain');?>" target="">公司新闻</a>
            <ul class="dropdown-menu">
		<li class="" id="menu-item-11">
		    <a href="#" target="">公司新闻一</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">公司新闻二</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">公司新闻三</a>
		</li>
	    </ul>
	</li>
	
<li class="dropdown" id="menu-item-12">
	    <a class="dropdown-toggle" href="<?php echo U('portal/index/article');?>" target="">行业动态</a>
            <ul class="dropdown-menu">
		<li class="" id="menu-item-11">
		    <a href="#" target="">行业动态一</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">行业动态二</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">行业动态三</a>
		</li>
	    </ul>
	</li>

	<li class="dropdown" id="menu-item-12">
	    <a class="dropdown-toggle" href="<?php echo U('portal/index/enter_culture');?>" target="">企业文化</a>
            <ul class="dropdown-menu">
		<li class="" id="menu-item-11">
		    <a href="#" target="">企业文化一</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">企业文化二</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">企业文化三</a>
		</li>
	    </ul>
	</li>
	
	

		<li class="dropdown" id="menu-item-12">
	    <a class="dropdown-toggle" href="<?php echo U('portal/index/va');?>" target="">关于我们</a>
		<ul class="dropdown-menu">
		<li class="" id="menu-item-11">
		<a href=""target=""><img src="/thinkcmf/themes/simplebootx/Public/images/logo.png"></a>
		</li>
		</ul>
	</li>
	<li class="dropdown" id="menu-item-12">
	    <a class="dropdown-toggle" href="<?php echo U('portal/Index/contact');?>" target="">联系我们</a>
	<ul class="dropdown-menu">
		<li class="" id="menu-item-11">
		<a href=""target="">0571-123456</a>
		</li>
		</ul>
	</li>
		<li class="dropdown" id="menu-item-12">
	    <a class="dropdown-toggle" href="<?php echo U('portal/Index/zhaopin');?>" target="">招聘信息</a>
            <ul class="dropdown-menu">
		<li class="" id="menu-item-11">
		    <a href="#" target="">招聘信息一</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">招聘信息二</a>
		</li>
		<li class="" id="menu-item-11">
		    <a href="#" target="">招聘信息三</a>
		</li>
	    </ul>
	</li>
</ul>
		<!--用户登录-->
		<!--  <ul class="nav pull-right" id="main-menu-user">
			<li class="dropdown user login">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <img src="/thinkcmf/themes/simplebootx//Public/images/headicon.png" class="headicon"/>
	            <span class="user-nicename"></span><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	              <!--  <li><a href="<?php echo U('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li> -->
	              <!--  <li class="divider"></li>
	               <li><a href="<?php echo U('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
          	</li>
          	<li class="dropdown user offline">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/thinkcmf/themes/simplebootx//Public/images/login.jpg" class="headicon"/>登录?注册<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right"> --> 
	               <!-- <li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li> -->
	 <!--               <li><a href="<?php echo leuu('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo leuu('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul>
          	</li>
		</ul>  -->
	<!-- <div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
				 <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
			</form>
		</div> --> 
       </div>
     </div>
   </div>
 </div>
<div  class="banner">
<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/banner_2.png') no-repeat center top; height:270px;width:100%;">
&nbsp;
</div>
</div>
	<div class="section slice no-padding">
		
		<div id="mapCanvas" class="map-canvas no-margin" style="height:400px;width:57%;text-align:center;margin:0 auto;">
			<script type="text/javascript">
				var map = new BMap.Map("mapCanvas"); // 创建Map实例
				var point = new BMap.Point("120.1227", "30.1254"); // 创建点坐标
				map.centerAndZoom(point, 15); // 初始化地图,设置中心点坐标和地图级别。
				map.enableScrollWheelZoom(); //启用滚轮放大缩小
				//添加缩放控件
				map.addControl(new BMap.NavigationControl());
				map.addControl(new BMap.ScaleControl());
				map.addControl(new BMap.OverviewMapControl());

				var marker = new BMap.Marker(point); // 创建标注 
				map.addOverlay(marker); // 将标注添加到地图中
				var infoWindow = new BMap.InfoWindow("天缘网络技术有限公司<br/><span class=''>地址：杭州市滨江区滨盛路1505号银丰大厦4楼</span>"); // 创建信息窗口对象
				marker.openInfoWindow(infoWindow);
			</script>
		</div>
	</div>
	
	<div class="container">

		<div class="row">
			<div class="span6">
				<h3 class="section-title"><b style="font-size:27px;">|</b>联系我们</h3>
				<form class="form-light js-ajax-form" role="form" method="post"
					action="<?php echo U('api/guestbook/addmsg');?>">
					<div class="row">
						<div class="span3">
							<div class="form-group">
								<label>姓名<font color="red">(*此项必填！！)</font> </label><input type="text" class="span3" placeholder="请输入您的姓名" name="full_name">
							</div>
						</div>
						</div>
				
						<div class="row">
						<div class="span3">
							<div class="form-group">
								<label>邮箱<font color="red">(*此项必填！！)</font> </label><input type="email" class="span3" placeholder="请输入您邮箱地址" name="email">
							</div>
						</div>
					</div>
				
					
					<!--添加的标题-->
						<div class="row">
						<div class="span3">
							<div class="form-group">
								<label>标题</label><input type="text" class="span3" placeholder="请输入标题内容" name="title" id="title">
							</div>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label>内容<font color="red">(</font>可选填<font color="red">)</font></label>
						<textarea class="span6" id="message" placeholder="请输入您要输入的内容(0-100字左右)" style="height: 100px;" name="msg"></textarea>
					</div>

					<div class="row">
						<div class="span3">
							<div class="form-group">
								<label>验证码</label> <input type="text" class="span3" placeholder="请输入正确的验证码" name="verify" autocomplete="off">
							</div>
						</div>
						<div class="span3">
							<div class="form-group">
							<label>&nbsp;</label>
								<?php echo sp_verifycode_img('length=4&font_size=16&width=150&height=34&use_noise=0&use_curve=0','style="cursor:pointer;vertical-align: top;" title="看不清，请点击刷新验证码"');?>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary js-ajax-submit" data-wait="1200">发送留言</button>
				</form>
			</div>
			<div class="span6">
				<div class="row">
					<div class="span3">
						<h3 class="section-title"><b style="font-size:27px;">|</b>联系方式</h3>
						<div class="contact-info">
							<h4>地址</h4>
							<p>杭州市滨江区滨盛路1505号银丰大厦4楼</p>
							<h4>邮箱</h4>
							<p><?php echo ($site_admin_email); ?></p>

							<h4>电话</h4>
							<p>XXXXXXXXX</p>
							<h4>公司商城网站</h4>
							<p>www.tytaohuo.com</p>
						</div>
					</div>
				</div>
				<h3 class="section-title">快捷交流</h3>
				<p>点击以下QQ图标,免加好友即时洽谈合作</p>
				<div class="social-media">
				<!--这里的QQ主要是客服QQ-->
           <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2740478497&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:479923197:51" alt="点击这里给我发消息" title="点击这里给我发消息" /></a>
				</div>
			</div>
		</div>
		
<style>
.bottom {
	background-color: #23282c;
	height:auto;
}
.dibu1 {
	background-color: #2d3236;
	height: 190px;
}
.banquan {
	font-size: 14px;
	line-height: 59px;
	font-weight: 700;
	color: #c6cacd;
	text-align: center;
	height: 59px;
}
.bottom .dibu1 .dibu_list.center {
	padding-top: 14px;
}
.bottom .dibu1 .dibu_list.center table tr td h3 {
	color: #cccdd1;
	line-height: 30px;
	font-size: 16px;
	font-weight: 700;
	
}
.bottom .dibu1 .dibu_list.center table tr td .wm a {
	font-size: 14px;
	line-height: 30px;
	color: #cccdd1;
	margin: 10px;
}
.bottom .dibu1 .dibu_list.center table tr td .wm {
	color: #cccdd1;
}
.bottom .dibu1 .dibu_list.center table tr td {
	text-align: left;
}
.bottom .dibu1 .dibu_list.center table tr td h4 {
	line-height: 40px;
	color: #cccdd1;
	font-size: 14px;
}
.bottom .dibu1 .dibu_list.center table tr td table {
	color: #a8a9ab;
}
.bottom .dibu1 .dibu_list.center table tr td table tr td {
	line-height: 30px;
	text-align: center;
}
.di
{
width:100%;
height:200px;
background:#4abe00;
}

</style>
<!-- Footer这是页脚需要重新写-->
<!-- 	   <link rel="stylesheet" href="/thinkcmf/themes/simplebootx/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/thinkcmf/themes/simplebootx/Public/css/global.css" />
		<link rel="stylesheet" href="/thinkcmf/themes/simplebootx/Public/css/style1.css" /> -->
<?php echo hook('footer');?>
	<!--  <div class="links">
		<?php $links=sp_getlinks(); ?>
		<?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?>|</br></a><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>  -->
	<hr>
	<div>
	<p >
    <center>
	<tr style="font-family:宋体;color:blue;"><a href="javascript:void"style="text-decoration:none;color:grey;"target="_blank">关于我们 &nbsp;|&nbsp;联系我们&nbsp;|&nbsp;欢迎合作&nbsp;|&nbsp;法律声明&nbsp;|&nbsp;服务条款&nbsp;|&nbsp;客服中心 
	</a></tr>
</br>	
</br>
	<a href="http://www.51taohuo.com" target="_blank"style="text-decoration:none;">天缘网络技术有限公司@copyRight2009-<?php echo date('Y',time()); ?>版权所有，翻版必究</a>
	</center>
	</p>
</div>
<?php echo ($site_tongji); ?>






	</div>

	<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/thinkcmf/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/thinkcmf/public/js/jquery.js"></script>
    <script src="/thinkcmf/public/js/wind.js"></script>
    <script src="/thinkcmf/themes/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/thinkcmf/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/thinkcmf/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>



</body>
</html>