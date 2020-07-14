<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta property="fb:app_id" content="2005773896303783"/>
	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css?version=198">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/fontStyle.css?version=1">
	<meta name="yandex-verification" content="05fbeb46b6985c8b"/>
	<?php wp_head();?>
	<script charset="UTF-8" src="//cdn.sendpulse.com/js/push/74999fab3ffe98925101622225952634_1.js" async></script>
	
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-356287-12bDs"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-356287-12bDs" style="position:fixed; left:-999px;" alt=""/></noscript>

<?php 
if (is_page_template('charcoalMining.php')){
	wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/js/loadmore2.js', array('jquery') );
	wp_enqueue_script( 'brands', get_stylesheet_directory_uri() . '/js/brands.js', array('jquery') );
}
if(is_category(2)){
	wp_enqueue_script( 'ajnews', get_stylesheet_directory_uri() . '/js/ajnews.js', array('jquery') );
}
if(is_category(2419)){
	echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>";
	wp_enqueue_script( 'ajnews', get_stylesheet_directory_uri() . '/js/wow.min.js', array('jquery') );
}
if(is_category(2551)){
?>
<meta property="og:title" content="#Коронакризис в пролёте  | Добывающая промышленность" />
<meta property="og:description" content="Актуальные задачи и современные решения. Достижения и рекорды. Мнения и прогнозы. Работа отрасли в условиях новой реальности." />
<meta property="og:url" content="https://dprom.online/topics/covid-19/" />
<meta property="og:site_name" content="Добывающая промышленность" />
<meta property="og:image" content="https://dprom.online/wp-content/uploads/2020/04/dpromcovid.jpg" />
<meta property="og:image:secure_url" content="https://dprom.online/wp-content/uploads/2020/04/dpromcovid.jpg" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="«#Коронакризис в пролёте  | Добывающая промышленность" />
<meta name="twitter:description" content="Актуальные задачи и современные решения. Достижения и рекорды. Мнения и прогнозы. Работа отрасли в условиях новой реальности." />
<meta name="twitter:image" content="https://dprom.online/wp-content/uploads/2020/04/dpromcovid.jpg" />
<?php
}
if(is_single()){
	 wp_enqueue_script( 'true_loadmore_single', get_stylesheet_directory_uri() . '/js/loadmoreSingle.js', array(),null,true );
}
?>
</head>
<body>
	<div class="darkMenu">
			<div class="wrapper">
				<?php wp_nav_menu([
					'theme_location'=>'topMenuDark',
					'container' => '',
					'menu_class'=>'darkList'
				]);?>
			</div>
		</div>	
		<div class="wrapper">
		<header class="dpHeader">
			<div class="headerFirstPart">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php bloginfo('template_url')?>/img/lgDProm.png" alt="Журнал Добывающая промышленность">
					</a>
				</div>
				<div class="infoBlock">
					<div class="tie">
						<span class="tie__phone">
							Добывающая промышленность
						</span>
						<div class="formWrapper">
							<input type="checkbox" id="formVision" class="tie__formVision">
							<form id="searchform" role="search" method="get" class="tie__search searchform" action="<?php echo home_url('/');?>">
							<input type="text" id="s" name="s" class="tie__searchText"  tabindex="1" placeholder="поиск" >
							<button id="searchsubmit" class="searchSubmit">
								<svg class="searchSubmit__icon">
									<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#searchIcon"></use>
								</svg>
							</button>
</form>
						</div>
					</div>
				</div>
				<div class="categoryMenu">
					<input type="checkbox" id="lop" name="menuCheck">
					<label for="lop">
						<svg class="categoryMenu__svg">
							<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#burgerMenu2"></use>
						</svg>
					</label>
					<?php wp_nav_menu([
							'theme_location' =>'topCategoryMenu',
							'container' =>'',
							'menu_class'=>'categoryMenu__list'
						]);?>
				</div>
			</div>
		</header>
		<div class="menu">
						<label for="menuCheck" class="menu__label">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#burgerMenu"></use>
							</svg>
						</label>
						<input type="checkbox" class="menu__check" id="menuCheck">
						<?php wp_nav_menu([
							'theme_location' =>'topLightMenu',
							'container' => '',
							'menu_class'=>'heading'
						]);?>
					</div>
		<script src="https://yastatic.net/pcode/adfox/loader.js" crossorigin="anonymous"></script>