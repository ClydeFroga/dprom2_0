<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
	<title>Mining World Russia</title>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="fb:app_id" content="2005773896303783"/>
	<?php wp_head();
		get_template_part('includes/yaMetrika');
		?>
	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url')?>/img/favicon.png">
	<meta name="yandex-verification" content="05fbeb46b6985c8b"/>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/spec/swiper.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/spec/style.css?version=47">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/fontStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script charset="UTF-8" src="<?php bloginfo('template_url')?>/js/mwr2020.js"></script>
	<script charset="UTF-8" src="<?php bloginfo('template_url')?>/js/metrika.js"></script>
	<script charset="UTF-8" src="//cdn.sendpulse.com/js/push/74999fab3ffe98925101622225952634_1.js" async></script>
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-356287-12bDs"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script>
	<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-356287-12bDs" style="position:fixed; left:-999px;" alt=""/></noscript>
	<script src="https://yastatic.net/pcode/adfox/loader.js" crossorigin="anonymous"></script>
</head>

<body>

<a href="<?php echo get_home_url() . '/specials/mwr2020/'?>">
	<div class="header">
		<span>СПЕЦПРОЕКТ</span>
		<div class="container-md">
			<h1>
				Mining World Russia 2020
			</h1>
		</div>
	</div>
</a>

<div class="top__gradient">
	<div class="container-md">
		<div class="darkMenu">
			<div class="wrapper">
				<?php wp_nav_menu([
					'theme_location'=>'topMenuDark',
					'container' => '',
					'menu_class'=>'darkList'
				]);?>
			</div>
		</div>
	</div>
</div>

<div class="wrapper container-md">
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
									<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#searchIcon"></use>
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
</div>

<?php the_post(); ?>

<div class="container-md">
	<div class="bigBanner">
		<div id="adfox_160135644721115288"></div>
		<script>
			window.Ya.adfoxCode.create({
				ownerId: 299653,
				containerId: 'adfox_160135644721115288',
				params: {
					pp: 'h',
					ps: 'dgkb',
					p2: 'gypw'
				}
			});
		</script>
	</div>
	
	<div class="row singleCpes">
		<div class="col-lg-7">
			<article class="singleArticle">
				<header class="singleArticle__title">
					<div class="metaData">
						<span class="metaData__date"><?php the_date(); ?></span>
					</div>
					<div class="breadcrumbs">
						<span>
							<a class="breadcrumbs__link" href="<?php echo get_home_url(); ?>">
								Главная
							</a>
						</span>
						<span class="breadcrumbs__separator"></span>
						<span>
							<a class="breadcrumbs__link" href="<?php echo get_home_url() . '/specials/mwr2020/'?>">
								Mining World Russia 2020
							</a>
						</span>
						<span class="breadcrumbs__separator"></span>
						<span class="breadcrumbs__current">
							<?php the_title(); ?>
						</span>
					</div>
					
					<h1>
						<?php the_title(); ?>
					</h1>
				</header>
				
				<?php the_content(); ?>
				
				<div class="tags">
					Теги:
					<?php echo  get_the_tag_list('','',''); ?>
				</div>
				
				<footer class="singleArticle__ft">
					<div class="sharing">
						<a href="http://vk.com/share.php?url=<?php the_permalink();?>&title=<?php the_title();?>&image=<?php $thumb_id = get_post_thumbnail_id(); $thumb_cover_url = wp_get_attachment_image_src($thumb_id, 'og-image', true); echo $thumb_cover_url[0];?>&noparse=true" target="_blank" onclick="return Share.me(this);" class="sharing__item vk" target="_blanc">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#vk_logo"></use>
							</svg>
						</a>
						<a  href="http://www.facebook.com/sharer/sharer.php?s=100&p%5Btitle%5D=<?php the_title();?>&p%5Bsummary%5D=<?php the_excerpt();?>&p%5Burl%5D=<?php the_permalink();?>&p%5Bimages%5D%5B0%5D=<?php $thumb_id = get_post_thumbnail_id(); $thumb_cover_url = wp_get_attachment_image_src($thumb_id, 'og-image', true); echo $thumb_cover_url[0];?>" target="_blank" onclick="return Share.me(this);" class="sharing__item fb">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#fb_logo">
								</use>
							</svg>
						</a>
						<a  href="https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl=<?php the_permalink(); ?>" onclick="window.open(this.href, 'Опубликовать ссылку в Одноклассники', 'width=800,height=300'); return false" target="_blank" onclick="return Share.me(this);" class="sharing__item od">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#classmates_logo"></use>
							</svg>
						</a>
						<a href="https://getpocket.com/save?url=<?php the_permalink();?>&title=<?php the_title();?>" target="_blanc" class="sharing__item pocket">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#pocket_logo"></use>
							</svg>
						</a>
						<a href="https://telegram.me/share/url?url=<?php the_permalink();?>&text=<?php the_title();?>" rel="nofollow" class="sharing__item telegram">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#telegram_logo"></use>
							</svg>
						</a>
						<a href="viber://forward?text=<?php the_title();?>" class="sharing__item viber">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#viber_logo"></use>
							</svg>
						</a>
						<a href="https://wa.me/?text=<?php the_title(); the_permalink();?>" class="sharing__item wApp">
							<svg>
								<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#wApp_logo"></use>
							</svg>
						</a>
					</div>
				</footer>
				
			
			</article>
		
		
		</div>
		
		<div class="col-lg-3">
			<div class="foxy">
				<?php get_template_part('includes/foxy1'); ?>
			</div>
			<div class="foxy">
				<?php get_template_part('includes/foxy2'); ?>
			</div>
		</div>
	
	</div>
	
	<div class="long-foxy">
				<div id="adfox_159469906814914799"></div>
				<script>
					window.Ya.adfoxCode.create({
						ownerId: 299653,
						containerId: 'adfox_159469906814914799',
						params: {
							pp: 'g',
							ps: 'dgkb',
							p2: 'gwsy'
						}
					});
				</script>
	</div>
	
	<div class="row">
		<div class="col-12 col-md-8 col-lg-9">
			<h2 class="spec-title">
				ОТРАСЛЕВЫЕ РЕШЕНИЯ
			</h2>
			
			<div class="row row-cols-2 row-cols-lg-4 midBlocks">
				<?php
					$argsOtrasl = array(
						'post_type' => ['post', 'project'],
						'posts_per_page' =>8,
						'tag_id' => 1649,
					);
					$queryOtrasl = new WP_Query($argsOtrasl);
					$myArray = array();$i=0;$myArray[0]=22689;
					if($queryOtrasl->have_posts()){
						while($queryOtrasl->have_posts()){
							$queryOtrasl->the_post();
							$tags = get_the_tags();
							$count8 = count($tags);
							for($f = 0;$f<$count8; $f++ ){
								if($tags[$f]->term_id == 2793){
									$myArray[$i] = get_the_ID();
									$i++;
								}
							}
							?>
							
							<a href="<?php the_permalink();?>" class="col">
								<?php the_post_thumbnail('medium'); ?>
								<span><?php echo get_the_category()[0] -> name; ?></span>
								<p>
									<?php the_title(); ?>
								</p>
							</a>
						
						<?php }
					} ?>
			</div>

		</div>
	</div>
	
	<div class="long-foxy">
				<div id="adfox_159469909267855195"></div>
				<script>
					window.Ya.adfoxCode.create({
						ownerId: 299653,
						containerId: 'adfox_159469909267855195',
						params: {
							pp: 'h',
							ps: 'dgkb',
							p2: 'gwsz'
						}
					});
				</script>
	</div>

</div>

<div class="container-fluid bottomness allWidth">
	<div class="swiper-container allWidth__sw">
		<div class="swiper-wrapper">
			<?php
				$argsTag = new WP_Query( 'post_type=project&cat=1827&posts_per_page=5&tag_id=2851');
				
				$args2 = new WP_Query( 'post_type=project&cat=1828,1831,1830,1415&posts_per_page=5&tag__not_in=2851');
				
				$querySlider = array_merge($argsTag -> posts, $args2 -> posts);
				
				function forArgs($a, $b ) {
					if ($a -> post_date_gmt == $b -> post_date_gmt) {
						return 0;
					}
					return ($a -> post_date_gmt  < $b -> post_date_gmt ) ? 1 : -1;
				}
				
				uasort($querySlider, 'forArgs');
				
				if(count($querySlider) > 0) {
					foreach( $querySlider as $post ){
						setup_postdata($post);
						?>
						<a href="<?php the_permalink();?>" class="swiper-slide">
							<div>
								<?php the_post_thumbnail('medium'); ?>
								<div class="forTag"></div>
								<span class="allWidth__cat">
							<?php echo get_the_category()[0] -> name; ?>
						</span>
								<p>
									<?php the_title(); ?>
								</p>
							</div>
						</a>
					<?php }
				} ?>
		</div>
		
		<div class="swiper-pagination"></div>
	</div>
	
	
	
	
	<div class="container-md">
		<div class="row">
			<div class="col col-md-8 col-lg-9 bottomness__blc">
				<?php
					shuffle($myArray);
					$queryDay = get_post($myArray[0]);
					if($queryDay){
						?>
						
						<h2 class="spec-title">
							МАТЕРИАЛ ДНЯ
						</h2>
						<?php echo get_the_post_thumbnail($queryDay->ID, 'large'); ?>
						<p>
							<?php echo $queryDay->post_title; ?>
						</p>
						<a href="<?php the_permalink($queryDay->ID);?>" >ЧИТАТЬ >></a>
						
						<?php
					} ?>
			</div>
			
			<div class="col-12 col-md-3">
				<div class="foxy small">

										<div id="adfox_159469912854826632"></div>
										<script>
											window.Ya.adfoxCode.create({
												ownerId: 299653,
												containerId: 'adfox_159469912854826632',
												params: {
													pp: 'i',
													ps: 'dgkb',
													p2: 'gwta'
												}
											});
										</script>
				</div>
				<div class="foxy small">

										<div id="adfox_159523947444285824"></div>
										<script>
											window.Ya.adfoxCode.create({
												ownerId: 299653,
												containerId: 'adfox_159523947444285824',
												params: {
													pp: 'i',
													ps: 'dgkb',
													p2: 'gwtb'
												}
											});
										</script>
				</div>
				<div class="foxy medium">
					<div class="">
						<a style="background-image: url('https://dprom.online/wp-content/uploads/2020/07/r-banner-2.png')" href="http://www.mining-portal.ru/">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php bloginfo('template_url')?>/js/news.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url')?>/js/swiper.min.js"></script>
<script>
	window.onload = function toTop() {
		let header = document.querySelector('.header');
		let bot = header.getBoundingClientRect().bottom;
		document.addEventListener('scroll', function () {
			if(pageYOffset <= bot) {
				header.style.backgroundPositionY = pageYOffset  + 'px';
			}
		})
	}
	
	var allWidth = new Swiper('.allWidth__sw', {
		spaceBetween: 30,
		slidersPerView: 1,
		freeMode: false,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
		},
		breakpoints: {
			577: {
				slidesPerView: 3,
				pagination: {
					el: '',
				},
			},
			993: {
				slidesPerView: 5,
				pagination: {
					el: '',
				},
			}
		}
	});
</script>

<footer class="dpFooter">
	<div class="wrapper">
		<div class="interactive">
			<a href="#" class="interactive__sbscr" id="pp">Подписаться</a>
			<div class="interactive__social">
				<span class="interactive__text">Мы в социальных сетях</span>
				<?php wp_nav_menu([
					'theme_location'=>'social',
					'container' => '',
					'menu_class'=>'interactive__list'
				]);?>
			</div>
			<div class="interactive__list">
				<span class="interactive__text">Правила</span>
				<?php wp_nav_menu([
					'theme_location'=>'rules',
					'container' => '',
					'menu_class'=>'interactive__list'
				]);?>
			</div>
		</div>
		<div class="copyright">
			<span class="copyright__title">&copy; ООО "ПромоГрупп Медиа", 2016-<?php echo date('Y');?></span>
			<span class="copyright__text">
					Копирование материалов запрещено.
				</span>
			<span class="copyright__title">Возрастное ограничение 16+</span>
			<span class="copyright__desc">Сетевое издание dprom.online зарегистрировано<br> в Федеральной службе по надзору в сфере связи,<br> информационных технологий и массовых коммуникаций<br> (Роскомнадзор). <br>Свидетельство ЭЛ № ФС 77 - 76725 от 02.09.2019</span>
		</div>
	</div>
	<div class="counter" style="padding-bottom:1.5em;">
		<!-- Yandex.Metrika informer -->
		<a href="https://metrika.yandex.ru/stat/?id=47347473&amp;from=informer"
			 target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/47347473/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
																					 style="width:88px; height:31px; border:0; display: block; margin:0 auto;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="47347473" data-lang="ru" /></a>
		<!-- /Yandex.Metrika informer -->
	</div>
</footer>
<?php get_template_part('includes/counters');
	get_template_part('includes/popupSend');
	get_template_part('includes/popup');
	get_template_part('includes/facebookPixel');
	
	wp_footer();?>
<script>svg4everybody();</script>
</body>
</html>