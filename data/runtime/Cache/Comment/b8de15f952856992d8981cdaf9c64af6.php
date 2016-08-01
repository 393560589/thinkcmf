<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html lang="en">
	<head>
		<title>ThinkCMF-跳转提示</title>
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
	
		<style type="text/css">
		*{ padding: 0; margin: 0; }
		body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
		.system-message{ padding: 24px 48px;text-align: center; }
		.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; text-align: center;}
		.system-message .jump{ padding-top: 10px}
		.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
		.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
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
		<a href="" target="">招聘信息</a>
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
	    <a class="dropdown-toggle" href="" target="">招聘信息</a>
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
	<div class="system-message">
	<?php if(isset($message)): ?><h1>^_^</h1>
	<p class="success"><?php echo($message); ?></p>
	<?php else: ?>
	<h1>&gt;_&lt;</h1>
	<p class="error"><?php echo($error); ?></p><?php endif; ?>
	<p class="detail"></p>
	<p class="jump">
	ThinkCMF：页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
	</p>
	</div>
	<script type="text/javascript">
	(function(){
	var wait = document.getElementById('wait'),href = document.getElementById('href').href;
	var interval = setInterval(function(){
		var time = --wait.innerHTML;
		if(time <= 0) {
			location.href = href;
			clearInterval(interval);
		};
	}, 1000);
	})();
	</script>

</body>
</html>