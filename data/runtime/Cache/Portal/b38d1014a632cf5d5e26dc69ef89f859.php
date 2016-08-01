<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title>首页-<?php echo ($site_name); ?></title>
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
	
		<link href="/thinkcmf/themes/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet">
		<style>
			.caption-wraper{position: absolute;left:50%;bottom:2em;}
			.caption-wraper .caption{
			position: relative;left:-50%;
			background-color: rgba(0, 0, 0, 0.54);
			padding: 0.4em 1em;
			color:#fff;
			-webkit-border-radius: 1.2em;
			-moz-border-radius: 1.2em;
			-ms-border-radius: 1.2em;
			-o-border-radius: 1.2em;
			border-radius: 1.2em;
			}
			@media (max-width: 767px){
				.sy-box{margin: 12px -20px 0 -20px;}
				.caption-wraper{left:0;bottom: 0.4em;}
				.caption-wraper .caption{
				left: 0;
				padding: 0.2em 0.4em;
				font-size: 0.92em;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				-ms-border-radius: 0;
				-o-border-radius: 0;
				border-radius: 0;}
			}
.indexBoxTwoCase{ width:1230px; }
.indexBoxTwoCase > div:first-child{ height:80px; font-size:23px; line-height:80px; text-indent:5px; }
.indexBoxTwoCase hr{ width:1097px; float:right; margin-top:40px;}
.indexBoxTwoCaseBody li{ width:199px; height:100px; float:left; border:1px solid #d9d9d9; margin:-1px -1px 0 0; }
.indexBoxTwoCaseBody li:hover{ border:1px solid #EF512C; z-index:1; position:relative; }																					
.indexBoxTwoNews{ width:1200px; margin-top:10px; }
.indexBoxTwoNewsLeft{ width:570px; float:left; }		
.indexBoxTwoNews > div:first-child{ height:80px; font-size:23px; line-height:80px; }
.indexBoxTwoNews hr{ width:1102px; float:right; margin-top:40px;}
.indexBoxTwoNews h2{ font-weight:normal; }
.indexBoxTwoNewsRight{ width:570px; float:right; }
.indexBoxTwoNewsLeftText div{ float:left; font-size:16px; }
.indexBoxTwoNewsLeft > div{ border:1px solid #d9d9d9; padding:20px 5px; margin:15px 0; }
.indexBoxTwoNewsRight > div{ border:1px solid #d9d9d9; padding:20px 5px; margin:15px 0; }						
.indexBoxThree{ width:100%; min-height:100px; background:#fff; margin-top:20px; padding-bottom:40px; }
.indexBoxThreeBody{ width:1200px; min-height:50px; margin:0 auto;}
.hezuo{ font-size:16px; line-height:50px;}
.indexBoxThreeBody div{ width:200px; height:80px; background:white; float:left; margin-right:50px; margin-bottom:10px; }
.indexBoxThreeBody div:nth-child(5){ margin-right:0; }
.indexBoxThreeBody div:nth-child(10){ margin-right:0; }
.indexBoxThreeBody div:nth-child(15){ margin-right:0; }
.indexBoxThreeBody div:nth-child(20){ margin-right:0; }
.indexBoxThreeBody div:nth-child(25){ margin-right:0; }	
 .a{font-size:18px;color:#CDCDB4;text-decoration:none;}	
 
 .indexBoxTwoDescribe{ width:1200px; }
.indexBoxTwoDescribe > div{ height:80px; font-size:23px;  line-height:80px; text-indent:5px; }
.indexBoxTwoDescribe hr{ width:1097px; float:right; margin-top:40px;}
.indexBoxTwoDescribe td{ border:0 solid #d9d9d9; padding:0 0; width:298px; height:400px; }
.indexBoxTwoDescribe h2{ margin:10px 0; text-align:center; font-weight:normal; }
.indexBoxTwoDescribe table div{ font-size:14px; color:#666666; }

.indexBoxTwoDescribes{ width:1200px; margin-top:10px; }
.indexBoxTwoDescribes > div{ height:80px; font-size:23px; line-height:80px; text-indent:5px; }
.indexBoxTwoDescribes hr{ width:1030px; float:right; margin-top:40px;}
.indexBoxTwoDescribes table{ margin-top:-20px; }
.indexBoxTwoDescribes td{ width:400px; height:140px; }
.indexBoxTwoDescribesText1{ float:left; width:170px; text-align:center; }
.indexBoxTwoDescribesText2{ float:left; width:190px; }
.indexBoxTwoDescribesText2 h2{ margin-top:20px; font-weight:normal; }
.indexBoxTwoDescribesText2 span{ font-size:14px; color:#666; }


 .indexBoxTwoDescribe1{ width:1200px; }
.indexBoxTwoDescribe1 > div{ height:80px; font-size:23px;  line-height:80px; text-indent:5px; }
.indexBoxTwoDescribe1 hr{ width:1097px; float:right; margin-top:40px;}
.indexBoxTwoDescribe1 td{ border:0 solid #d9d9d9; padding:0 0; width:298px; height:300px; }
.indexBoxTwoDescribe1 h2{ margin:10px 0; text-align:center; font-weight:normal; }
.indexBoxTwoDescribe1 table div{ font-size:14px; color:#666666; }
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

<?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
<ul id="homeslider" class="unstyled">
	<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
		<div class="caption-wraper">
			<div class="caption"><?php echo ($vo["slide_name"]); ?></div>
		</div>
		<a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt="" title=""></a>
	</li><?php endforeach; endif; ?>
</ul>

<div class="">
<div>
<div class="container">
<div class="indexBoxTwo">
        <div class="indexBoxTwoDescribe">
            <div>关于我们<hr color="#d9d9d9" size="1"></hr></div>
            <table>
				<tbody><tr border="2" cellpadding="0" cellspacing="3px">
               <td style="no-repeat center 180px; cellspacing:0px;" valign="top">
			 <!--添加代码结束-->
				  <!--  <img src="/thinkcmf/themes/simplebootx/Public/images/bank/3.jpg"width="298px"height="200px" title="关于我们" > -->
				   <p style="text-align:center;font-size:20px;">关于我们</p>
				    <!--添加代码-->
			  <?php $sp=sp_sql_posts('cid:11;field:post_title,post_excerpt,smeta,tid,post_content,post_modified;order:post_modified desc;limit:1;'); ?>
			   <?php if(is_array($sp)): foreach($sp as $key=>$vo8): $smeta=json_decode($vo8['smeta'],true); ?>
		<div class="span3">
			<div class="tc-gridbox">
				<div class="header">
					<div class="item-image">
							<?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo8["post_title"]); ?>" /> <?php echo (msubstr($vo8["post_excerpt"],0,35)); ?>	
				   <a href="<?php echo U('portal/index/va');?>" class='a'target="">更多详情&gt;&gt;</a>  
							<?php else: ?> 
							<?php echo (msubstr($vo8["post_content"],0,35)); ?>
							<a href="<?php echo U('portal/index/va');?>" class='a'target="">更多详情&gt;&gt;</a><?php endif; ?>
					</div>
					</div>
					</div><?php endforeach; endif; ?>
           </td>
                    <td style="no-repeat center 180px;" valign="top">
                      <!--   <img src="/thinkcmf/themes/simplebootx/Public/images/bank/1.jpg" width="298px"height="200px" title="公司品牌"> -->
									   <p style="text-align:center;font-size:20px;">公司品牌</p>
									   <?php $sp1=sp_sql_posts('cid:18;field:post_title,post_excerpt,post_content,smeta,tid,post_modified;order:post_modified desc;limit:1;'); ?>
						<?php if(is_array($sp1)): foreach($sp1 as $key=>$vo9): ?><!--代码添加-->
			<?php $smeta=json_decode($vo9['smeta'],true); ?>
	      	<div class="span3">
			<div class="tc-gridbox">
				<div class="header">
					<div class="item-image">
							<?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo9["post_title"]); ?>" /><?php echo (msubstr($vo9["post_excerpt"],0,35)); ?> 
						<a href="#" class="a" target="">更多详情&gt;&gt;</a>
							<?php else: ?> 
								<?php echo (msubstr($vo9["post_content"],0,35)); ?>
								<a href="#" class="a" target="">更多详情&gt;&gt;</a><?php endif; ?>
						</div>
						</div>
					</div>
					</div>
						<!--代码添加结束--><?php endforeach; endif; ?>						
                   
                    <td style="no-repeat center 180px;" valign="top">
                      <!--  <img src="/thinkcmf/themes/simplebootx/Public/images/bank/5.jpg"width="298px"height="200px"title="公司发展规划"> -->
					   <p style="text-align:center;font-size:20px;">公司发展规划</p>
             <?php $sp3=sp_sql_posts('cid:20;field:post_title,post_excerpt,post_content,post_modified,tid,smeta;order:post_modified desc;limit:1'); ?> 
   			 <?php if(is_array($sp3)): foreach($sp3 as $key=>$vo11): $smeta=json_decode($vo11['smeta'],true); ?>
			 <div class="span3">
								<div class="tc-gridbox">
							<div class="header">
								<div class="item-image">
								<?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo11["post_title"]); ?>" /> 
								<?php echo (msubstr($vo11["post_excerpt"],0,35)); ?>
			              <a href="#"class="a"target="">更多详情&gt;&gt;</a>
							<?php else: ?> 
								<?php echo (msubstr($vo11["post_content"],0,35)); ?>
								<a href="#" class="a" target="">更多详情&gt;&gt;</a><?php endif; ?>
						
					</div>
			</div>
			</div>
			</div><?php endforeach; endif; ?>
            </td>
			
			 </td>
                    <td style="no-repeat center 180px;" valign="top">
                      <!--   <img src="/thinkcmf/themes/simplebootx/Public/images/bank/4.jpg"width="298px"height="200px" title="公司业务"> -->
									   <p style="text-align:center;font-size:20px;">企业文化</p>
									   <?php $sp2=sp_sql_posts('cid:13;field:post_title,post_content,post_excerpt,post_modified,smeta,tid;order:post_modified desc;limit:1'); ?>
									   <?php if(is_array($sp2)): foreach($sp2 as $key=>$vo10): $smeta=json_decode($vo10['smeta'],true); ?>
										<div class="span3">
								<div class="tc-gridbox">
							<div class="header">
								<div class="item-image">
								<?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo10["post_title"]); ?>" /> <?php echo (msubstr($vo10["post_excerpt"],0,35,utf8,true)); ?> 
                          <a href="<?php echo U('portal/index/enter_culture');?>" class='a'target="">更多详情&gt;&gt;</a>  
							<?php else: ?> 
								<?php echo (msubstr($vo10["post_content"],0,35)); ?>
								<a href="<?php echo U('portal/index/enter_culture');?>" class="a" target="">更多详情&gt;&gt;</a><?php endif; ?>
					</div>
					</div>
					</div>
					</div>
						<!--代码添加结束--><?php endforeach; endif; ?>
                    </td>
			
          </tr>
         </tbody>
			</table>
        </div>
        <div class="indexBoxTwoDescribes">
            <div>公司的主导业务<hr color="#d9d9d9" size="1"></div>
            <table>
                <tbody><tr>
				       <!--此处利用sp_sql_posts函数来获取公司主导业务的内容-->
					   <?php $zhudao=sp_sql_posts('cid:12;field:post_title,post_excerpt,smeta,tid,post_content,post_modified;order:post_modified desc;limit:0,4;'); ?>
					   <?php if(is_array($zhudao)): foreach($zhudao as $key=>$vo4): ?><td>
                        <!-- <div class="indexBoxTwoDescribesText1"><img src="/thinkcmf/themes/simplebootx/Public/images/bank/1.jpg" alt=""></div> -->
                        <ul>
						<div class="indexBoxTwoDescribesText2"><a href="<?php echo U('portal/article/index',array('id'=>$vo4[tid],'cid'=>$vo4['term_id']));?>" style="text-decoration:none;">
						<h2>
						<?php echo ($vo4["post_title"]); ?></h2></a></div>
                    </ul></td><?php endforeach; endif; ?>
                </tr>
            </tbody>
			</table>
        </div>
		
		<!--添加代码-->
		  <div class="indexBoxTwoDescribe1">
            <div>案例展示<hr color="#d9d9d9" size="1"></hr></div>
            <table>
				<tbody><tr border="2" cellpadding="0" cellspacing="3px">
               <td style="no-repeat center 180px; cellspacing:0px;" valign="top">
			  <?php $sp=sp_sql_posts('cid:22;field:post_title,post_excerpt,smeta,tid,post_content,post_modified;order:post_modified desc;limit:1;'); ?>
			   <?php if(is_array($sp)): foreach($sp as $key=>$vo8): $smeta=json_decode($vo8['smeta'],true); ?>
		<div class="span3">
			<div class="tc-gridbox">
				<div class="header">
					<div class="item-image">
							<?php if(!empty($smeta['thumb'])): ?><a href=><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo8["post_title"]); ?>" /><?php endif; ?>
					</div>
					</div>
					</div><?php endforeach; endif; ?>
           </td>
                    <td style="no-repeat center 180px;" valign="top">
                      <!--   <img src="/thinkcmf/themes/simplebootx/Public/images/bank/1.jpg" width="298px"height="200px" title="公司品牌"> -->
									<!--    <p style="text-align:center;font-size:20px;">公司品牌</p> -->
									   <?php $sp1=sp_sql_posts('cid:23;field:post_title,post_excerpt,post_content,smeta,tid,post_modified;order:post_modified desc;limit:1;'); ?>
						<?php if(is_array($sp1)): foreach($sp1 as $key=>$vo9): ?><!--代码添加-->
			<?php $smeta=json_decode($vo9['smeta'],true); ?>
	      	<div class="span3">
			<div class="tc-gridbox">
				<div class="header">
					<div class="item-image">
							<?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo9["post_title"]); ?>" /><?php echo (msubstr($vo9["post_excerpt"],0,35)); endif; ?>
						</div>
						</div>
					</div>
					</div>
						<!--代码添加结束--><?php endforeach; endif; ?>						
                   
                    <td style="no-repeat center 180px;" valign="top">
                      <!--  <img src="/thinkcmf/themes/simplebootx/Public/images/bank/5.jpg"width="298px"height="200px"title="公司发展规划"> -->
					<!--    <p style="text-align:center;font-size:20px;">公司发展规划</p> -->
             <?php $sp3=sp_sql_posts('cid:24;field:post_title,post_excerpt,post_content,post_modified,tid,smeta;order:post_modified desc;limit:1'); ?> 
   			 <?php if(is_array($sp3)): foreach($sp3 as $key=>$vo11): $smeta=json_decode($vo11['smeta'],true); ?>
			 <div class="span3">
								<div class="tc-gridbox">
							<div class="header">
								<div class="item-image">
								<?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo11["post_title"]); ?>" /><?php endif; ?>
						
					</div>
			</div>
			</div>
			</div><?php endforeach; endif; ?>
            </td>
			
			 </td>
                    <td style="no-repeat center 180px;" valign="top">
                      <!--   <img src="/thinkcmf/themes/simplebootx/Public/images/bank/4.jpg"width="298px"height="200px" title="公司业务"> -->
								<!-- 	   <p style="text-align:center;font-size:20px;">企业文化</p> -->
									   <?php $sp2=sp_sql_posts('cid:25;field:post_title,post_content,post_excerpt,post_modified,smeta,tid;order:post_modified desc;limit:1'); ?>
									   <?php if(is_array($sp2)): foreach($sp2 as $key=>$vo10): $smeta=json_decode($vo10['smeta'],true); ?>
										<div class="span3">
								<div class="tc-gridbox">
							<div class="header">
								<div class="item-image">
								<?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo10["post_title"]); ?>" /><?php endif; ?>
					</div>
					</div>
					</div>
					</div>
						<!--代码添加结束--><?php endforeach; endif; ?>
                    </td>
			
          </tr>
         </tbody>
			</table>
        </div>
		
		
		
		
		
		
		<!--添加代码-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    <!--     <div class="indexBoxTwoCase">
            <div>案例展示<hr color="#d9d9d9" size="1"></div>
			<?php $sp=sp_sql_posts('cid:22;field:post_title,post_excerpt,post_content,post_modified,tid,smeta;order:post_modified desc;limit:1;'); $sp1=sp_sql_posts('cid:23;field:post_title,post_excerpt,post_content,post_modified,tid,smeta;order:post_modified desc;limit:1;'); $sp2=sp_sql_posts('cid:24;field:post_title,post_excerpt,post_content,post_modified,tid,smeta;order:post_modified desc;limit:1;'); $sp3=sp_sql_posts('cid:25;field:post_title,post_excerpt,post_content,post_modified,tid,smeta;order:post_modified desc;limit:1;'); ?> -->
	        
           <!--  <ul class="indexBoxTwoCaseBody">
	          		<li><?php if(is_array($sp)): foreach($sp as $key=>$vo13): echo ($vo13["post_title"]); ?>
						 
	<!-- 					<a href="javascript:void"><li style="background:url(/thinkcmf/themes/simplebootx/Public/images/bank/12.jpg) no-repeat center center;background-size: 90%;"></li></a>-->
			           <!--<?php endforeach; endif; ?>
						</li>
					</li>	<?php if(is_array($sp1)): foreach($sp1 as $key=>$vo14): echo ($vo14["post_title"]); endforeach; endif; ?>
						</li>
						<li><?php if(is_array($sp2)): foreach($sp2 as $key=>$vo15): echo ($vo15["post_title"]); endforeach; endif; ?>
						</li>
						<li>
						<?php if(is_array($sp3)): foreach($sp3 as $key=>$vo16): echo ($vo16["post_title"]); endforeach; endif; ?>
						</li>
						</ul> -->
            <div style="clear:both;"></div>
        </div>
	<div class="indexBoxTwoNews">
     <div >新闻中心
	
			<hr color="#d9d9d9" size="1"></div>
            <div>
                <div class="indexBoxTwoNewsLeft">
				
                    <h3 style="font-size:23px;">公司新闻&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('portal/index/domain');?>" class="a" title="请点击浏览更多资讯">更多&gt;&gt;</a></h3>
                    <div>
					
                        <div class="indexBoxTwoNewsLeftText">
						 <?php $company_news=sp_sql_posts("cid:7;field:post_title,post_excerpt,tid,smeta,post_modified;order:post_modified desc;limit:5;"); ?>
						<?php if(is_array($company_news)): $i = 0; $__LIST__ = $company_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div style="float:left;width:400px;">
                    <img src="/thinkcmf/themes/simplebootx/Public/images/2.png" alt="">
                      <a href="<?php echo U('portal/article/index',array('id'=>$vo1[tid],'cid'=>$vo1['term_id']));?>"><?php echo ($vo1["post_title"]); ?></a>
                            </div>
                            <div style="float:left;"><?php echo ($vo1["post_modified"]); ?></div>
                        
                                <p style="clear:both;"></p><?php endforeach; endif; else: echo "" ;endif; ?> 
                        </div>
						 
                    </div>
                </div>
                <div class="indexBoxTwoNewsRight">
                    <h3 style="font-size:23px;">行业动态&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('portal/index/article');?>"class="a" title="请点击浏览更多资讯">更多&gt;&gt;</a></h3>
                    <div>
                        <div class="indexBoxTwoNewsLeftText">
						<?php $hangye_domain=sp_sql_posts("cid:8;field:post_title,post_excerpt,tid,smeta,post_modified;order:post_modified desc;limit:5"); ?>
						   <?php if(is_array($hangye_domain)): $i = 0; $__LIST__ = $hangye_domain;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><div style="float:left;width:400px;">
                                <img src="/thinkcmf/themes/simplebootx/Public/images/2.png" alt="">
                                <a href="<?php echo leuu('portal/article/index',array('id'=>$vo2['tid'],'cid'=>$vo2['term_id']));?>" target='_blank'><?php echo ($vo2["post_title"]); ?></a>
                            </div>
                            <div style="float:left;"><?php echo ($vo2["post_modified"]); ?></div>
                             <p style="clear:both;"></p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
				
	<div class="indexBoxThree">
        <div class="indexBoxThreeBody hezuo"style="font-size:27px;">合作伙伴</div>
	   </br>
        <div class="indexBoxThreeBody">
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/logo/chinanet.png') no-repeat center center;background-size: 100%;"></div>
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/logo/mobile.png') no-repeat center center;background-size: 100%;"></div>
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/logo/unicom.png') no-repeat center center;background-size: 100%;"></div>
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/logo/yizhifu.png') no-repeat center center;background-size: 100%;"></div>
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/logo/tianyi.png') no-repeat center center;background-size: 100%;"></div>
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/logo/super.png') no-repeat center center;background-size: 100%;"></div>
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/1.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/2.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/3.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/4.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/5.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/6.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/7.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/8.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/9.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/10.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/11.jpg') no-repeat center center;background-size:100%;"></div>	
					<div style="background:url('/thinkcmf/themes/simplebootx/Public/images/bank/12.jpg') no-repeat center center;background-size:100%;"></div>	
		            <p style="clear:both;"></p>
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


<script src="/thinkcmf/themes/simplebootx/Public/js/slippry.min.js"></script>
<script>
$(function() {
	var demo1 = $("#homeslider").slippry({
		transition: 'fade',
		useCSS: true,
		captions: false,
		speed: 1000,
		pause: 2000,
		auto: true,
		preload: 'visible'
	});
});
</script>
<?php echo hook('footer_end');?>
</body>
</html>