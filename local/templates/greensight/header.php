<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET;?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<meta name="viewport" content="width=1024, initial-scale=1.0" />
		<meta name="format-detection" content="telephone=no" />
		
		<link rel="icon" href="/favicon.ico" />
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<meta name="Copyright" content="(C) <?=date('Y');?> Borisenko Valentin <vb@valentin-borisenko.com>" />
		<meta name="Powered By" content="My hands Engine Copyright(C) <?=date('Y');?>" />
		<meta name="Developed By" content="Borisenko Valentin <vb@valentin-borisenko.com>" />
		<meta name="author" content="Borisenko Valentin <vb@valentin-borisenko.com>" />		

		<title>Главная</title>

		<!-- Bootstrap core CSS -->
		<link href="<?=SITE_TEMPLATE_PATH;?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=SITE_TEMPLATE_PATH;?>/css/dialog.css" rel="stylesheet">
		<link href="<?=SITE_TEMPLATE_PATH;?>/css/dialog-sandra.css" rel="stylesheet">
		<link href="<?=SITE_TEMPLATE_PATH;?>/owl/owl.carousel.css" rel="stylesheet">
		<link href="<?=SITE_TEMPLATE_PATH;?>/owl/animate.css" rel="stylesheet">
		<link href="<?=SITE_TEMPLATE_PATH;?>/css/style.css" rel="stylesheet">

		<script src="<?=SITE_TEMPLATE_PATH;?>/js/ie-emulation-modes-warning.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH;?>/js/ie10-viewport-bug-workaround.js"></script>
		<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?$APPLICATION->ShowHead();?>
	</head>
	<body>
		<?$APPLICATION->ShowPanel();?>
		<div class="header-line">
			<div class="container">
				<div class="shops pull-left"><a href="#">Магазины</a></div>
				<div class="phone pull-left">+7 (495) 705 93 38</div>
				<div class="find pull-right">
					<form action="search.html" method="get" id="search-form">
						<a href="javascript:void(0);"></a>
						<input type="text" placeholder="Найти..." name="q" value=""/>
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="auth-link pull-right"><a data-dialog="authorization"  href="javascript:void(0);"></a></div>
				<div class="links l2 pull-right"><a href="#">оптовые продажи</a></div>
				<div class="links l1 pull-right"><a href="#">франчайзинг</a></div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="logo">
			<div class="container text-center"><a href="/"><img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.png" alt=""/></a>
			</div>
		</div>
		<div class="main-menu-wrap">
			<div class="container">
				<div class="main-menu">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "", array(
						"ROOT_MENU_TYPE" => "top",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(""),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N"
					));?>
<!--
					<ul class="clearfix">
						<li><a href="#">О компании</a></li>
						<li><a href="#">Бренды</a></li>
						<li><a href="#">Покупателям</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Карьера</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
-->
				</div>
			</div>
		</div>