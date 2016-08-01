<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/thinkcmf/public/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/thinkcmf/public/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/thinkcmf/public/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/thinkcmf/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/thinkcmf/public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
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
    <script src="/thinkcmf/public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body>
	<div class="wrap">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('navcat/index');?>"><?php echo L('ADMIN_NAVCAT_INDEX');?></a></li>
			<li><a href="<?php echo U('navcat/add');?>"><?php echo L('ADMIN_NAVCAT_ADD');?></a></li>
		</ul>
		<form method="post" class="form-horizontal js-ajax-form" action="<?php echo U('navcat/edit_post');?>">
			<fieldset>
				<div class="control-group">
					<label class="control-label"><?php echo L('CATEGORY_NAME');?></label>
					<div class="controls">
						<input type="hidden" name="navcid" value="<?php echo ($navcid); ?>">
						<input type="text" name="name" value="<?php echo ($name); ?>">
						<span class="form-required">*</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo L('DESCRIPTION');?></label>
					<div class="controls">
						<textarea name="remark" rows="5" cols="57"><?php echo ($remark); ?></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo L('MAIN_NAVCAT');?></label>
					<div class="controls">
						<?php $mainmenu_checked=$active?"checked":""; ?>
						<input type="checkbox" name="active" value="1" <?php echo ($mainmenu_checked); ?>>
					</div>
				</div>
			</fieldset>
			<div class="form-actions">
				<button type="submit" class="btn btn-primary js-ajax-submit"><?php echo L('SAVE');?></button>
				<a class="btn" href="<?php echo U('navcat/index');?>"><?php echo L('BACK');?></a>
			</div>
		</form>
	</div>
	<script src="/thinkcmf/public/js/common.js"></script>
</body>
</html>