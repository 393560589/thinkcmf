<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($post_title); ?> <?php echo ($site_name); ?> </title>
		<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
		<meta name="description" content="<?php echo ($post_excerpt); ?>">
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
	
		<style>
			#article_content img{height:auto !important}
			#article_content {word-wrap: break-word;}
    		.btn {margin-top: 33px;}
			h2{
			   font-size:25px;
			   color:#000;
		
			}			
</style>
</head>
<body class="">
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
<div class="container tc-main">
	<div class="row">
		<div class="span9">
			
			<div class="tc-box first-box article-box">
		    	<h2><b style="font-size:27px;">|</b>您当前的位置&gt;&gt;<?php echo ($domain); ?></h2>
		    	<div class="article-infobox">
		    	<!-- 	<span><?php echo ($post_date); ?> by <?php echo ((isset($user_nicename) && ($user_nicename !== ""))?($user_nicename):$user_login); ?></span>
		    		<span>
		    			<a href="javascript:;"><i class="fa fa-eye"></i><span><?php echo ($post_hits); ?></span></a>
						<a href="<?php echo U('article/do_like',array('id'=>$object_id));?>" class="js-count-btn"><i class="fa fa-thumbs-up"></i><span class="count"><?php echo ($post_like); ?></span></a>
						<a href="<?php echo U('user/favorite/do_favorite',array('id'=>$object_id));?>" class="js-favorite-btn" data-title="<?php echo ($post_title); ?>" data-url="<?php echo leuu('article/index',array('id'=>$tid,'cid'=>$term_id));?>" data-key="<?php echo sp_get_favorite_key('posts',$object_id);?>">
							<i class="fa fa-star-o"></i>
						</a>
					</span> -->
		    	</div>
		    	<hr>	  
		  <tr>
<h4 style="font-size:20px;text-align:center;">新闻标题&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更新时间</h4>
</tr>
<hr>
 <div>
 <div class="indexBoxTwoNewsLeftText">
 <?php $lists=sp_sql_posts_paged('cid:7;order:post_modified desc;',8); ?>
  <?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "亲,暂时没有本公司新闻!!!" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="float:left;width:670px;">
  <img src="/thinkcmf/themes/simplebootx/Public/images/2.png" alt="">
                                <a href="<?php echo leuu('portal/article/index',array('id'=>$vo['tid']));?>" target='_blank'><?php echo ($vo["post_title"]); ?></a>
                            </div>
                            <div style="float:left;"><?php echo ($vo["post_modified"]); ?></div>
                             <p style="clear:both;"></p><?php endforeach; endif; else: echo "亲,暂时没有本公司新闻!!!" ;endif; ?>
                        </div>
                    </div>
						<div class="pagination">
						<div style="padding-top:280px;">
						<center>
                 <ul>
    <?php echo ($lists['page']); ?>
    </ul>
	</center>
	</div>
</div>		
		<!--用于显示分页功能-->

		   <!--  	<div id="article_content">
		    	<?php echo ($post_content); ?>
		    	</div>
                <?php if(!empty($post_source)): ?><div>
                        <b>注：本文转载自<?php echo ($post_source); ?>，转载目的在于传递更多信息，并不代表本网赞同其观点和对其真实性负责。如有侵权行为，请联系我们，我们会及时删除。</b>
                    </div><?php endif; ?>
		    	<div> -->
					<!-- <?php if(!empty($prev)): ?><a href="<?php echo leuu('article/index',array('id'=>$prev['tid'],'cid'=>$prev['term_id']));?>" class="btn btn-primary pull-left">上一篇</a><?php endif; ?>
					<?php if(!empty($next)): ?><a href="<?php echo leuu('article/index',array('id'=>$next['tid'],'cid'=>$next['term_id']));?>" class="btn btn-warning pull-right">下一篇</a><?php endif; ?> -->
    	            <!-- <script type="text/javascript" src="/thinkcmf/themes/simplebootx/Public/js/qrcode.min.js"></script> -->
                    <!-- <div id="qrcode" style="width: 100px;margin:0 auto"></div> -->
    				<!-- 	<script type="text/javascript">
                        var qrcode = new QRCode(document.getElementById("qrcode"), {
                        width : 100,
                        height : 100
                        });
                        function makeCode () {		
                        qrcode.makeCode("http://<?php echo ($_SERVER['HTTP_HOST']); echo ($_SERVER['REQUEST_URI']); ?>");
                        }
                        makeCode();
                        </script> -->	
						</hr>
					<div class="clearfix"></div>
				</div>
		    	
		    <!-- 	
		    	<?php echo hook('comment',array( 'post_id'=>$object_id, 'post_table'=>'posts', 'post_title'=>$post_title ));?>
		    </div>
		     -->
		    <!-- <?php $ad=sp_getad("portal_article_bottom"); ?>
			<?php if(!empty($ad)): ?><div class="tc-box">
	        	<div class="headtitle">
	        		<h2>赞助商</h2>
	        	</div>
	        	<div>
		        	<?php echo ($ad); ?>
		        </div>
			</div><?php endif; ?>
		    
		</div>
		<div class="span3">
			<div class="tc-box first-box">
				<div class="headtitle">
	          		<h2>分享</h2>
	          	</div>
	          	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"32"},"share":{},"image":{"viewList":["weixin","tsina","qzone","tqq","renren"],"viewText":"分享到：","viewSize":"32"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["weixin","tsina","qzone","tqq","renren"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        	</div>
        	
        	<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>热门文章</h2>
	        	</div>
	        	<div class="ranking">
	        		<?php $hot_articles=sp_sql_posts("cid:$portal_hot_articles;field:post_title,post_excerpt,tid,smeta,term_id;order:post_hits desc;limit:5;"); ?>
		        	<ul class="unstyled">
		        		<?php if(is_array($hot_articles)): foreach($hot_articles as $key=>$vo): $top=$key<3?"top3":""; ?>
							<li class="<?php echo ($top); ?>"><i><?php echo ($key+1); ?></i><a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			
			<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>最新加入</h2>
	        	</div>
	        	<?php $last_users=sp_get_users("field:*;limit:0,8;order:create_time desc;"); ?>
	        	<ul class="list-unstyled tc-photos margin-bottom-30">
	        		<?php if(is_array($last_users)): foreach($last_users as $key=>$vo): ?><li>
	                    <a href="<?php echo U('user/index/index',array('id'=>$vo['id']));?>">
	                    <img alt="" src="<?php echo U('user/public/avatar',array('id'=>$vo['id']));?>">
	                    </a>
                    </li><?php endforeach; endif; ?>
                </ul>
			</div>
			
			<div class="tc-box">
	        	<div class="headtitle">
	        		<h2>最新评论</h2>
	        	</div>
	        	<div class="comment-ranking">
	        		<?php $last_comments=sp_get_comments("field:*;limit:0,5;order:createtime desc;"); ?>
	        		<?php if(is_array($last_comments)): foreach($last_comments as $key=>$vo): ?><div class="comment-ranking-inner">
	                        <i class="fa fa-comment"></i>
	                        <a href="<?php echo U('user/index/index',array('id'=>$vo['uid']));?>"><?php echo ($vo["full_name"]); ?>:</a>
	                        <span><?php echo ($vo["content"]); ?></span>
	                        <a href="/thinkcmf/<?php echo ($vo["url"]); ?>#comment<?php echo ($vo["id"]); ?>">查看原文</a>
	                        <span class="comment-time"><?php echo date('m月d日  H:i',strtotime($vo['createtime']));?></span>
	                    </div><?php endforeach; endif; ?>
                </div>
			</div>
        	
		</div>
		
	</div> -->
	
        

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