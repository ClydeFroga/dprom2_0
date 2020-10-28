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
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/spec/style.css?version=40">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/fontStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script charset="UTF-8" src="<?php bloginfo('template_url')?>/js/mwr2020ver3.js"></script>
	<script charset="UTF-8" src="<?php bloginfo('template_url')?>/js/metrika.js"></script>
	<script charset="UTF-8" src="//cdn.sendpulse.com/js/push/74999fab3ffe98925101622225952634_1.js" async></script>
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-356287-12bDs"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script>
	<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-356287-12bDs" style="position:fixed; left:-999px;" alt=""/></noscript>
	<script src="https://yastatic.net/pcode/adfox/loader.js" crossorigin="anonymous"></script>
	<link rel="canonical" href="<?php echo get_home_url() . '/specials/mwr/'?>" />
	<?php
		$taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
	?>
	<meta property="og:title" content="<?php single_term_title(); ?>" />
	<meta property="og:description" content="<?php echo $taxonomy->description; ?>" />
	<meta property="og:url" content="<?php echo get_home_url() . '/specials/mwr/'?>" />
	<meta property="og:site_name" content="Добывающая промышленность" />
	<meta property="og:image" content="https://dprom.online/wp-content/uploads/2020/10/vyrav.jpg" />
	<meta property="og:image:secure_url" content="https://dprom.online/wp-content/uploads/2020/10/vyrav.jpg" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?php single_term_title(); ?>" />
	<meta name="twitter:description" content="<?php echo $taxonomy->description; ?>" />
	<meta name="twitter:image" content="https://dprom.online/wp-content/uploads/2020/10/vyrav.jpg" />
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
						<use xlink:href="<?php bloginfo('template_url')?>/img/svgsprite.svg#burgerMenu2"></use>
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
</div>

<div class="backImg">
	<div class="container-md wrapper-top">
		<div class="row">
			
			<div class="col-12 col-lg-9">
				<div class="blocks blocks__bot">
				<?php
					$argsTag = new WP_Query( 'post_type=project&cat=1828,1827,1831&posts_per_page=25&tag_id=2851');
					
					$args = new WP_Query( 'post_type=post&tag=mwr2020&category_name=novosti&posts_per_page=18' );
	
					function forArgs($a, $b ) {
						if ($a -> post_date_gmt == $b -> post_date_gmt) {
							return 0;
						}
						return ($a -> post_date_gmt  < $b -> post_date_gmt ) ? 1 : -1;
					}
					
					$args3 = $argsTag -> posts;
					
					foreach ($args -> posts as $el) {
						array_push($args3, $el);
					}
	
					$num = 0;

					if(count($args3) > 0) {
					foreach( $args3 as $post ){
						setup_postdata($post);
				?>
						<?php if($num === 2 ) { ?>
							<div class="blocks__bot-telegram">
								<a target="_blank" href="tg://resolve?domain=dprom">
									БУДЬ С НАМИ В TELEGRAM
									<div class="customAnim"></div>
								</a>
							</div>
							
							<?php $num++;
						} ?>
						<?php if($num === 8 ) { ?>
							<div class="blocks__bot-inst">
								<a target="_blank" href="https://www.instagram.com/dprom.online/">
									БОЛЬШЕ ФОТО В INSTAGRAM
									<div class="customAnim"></div>
								</a>
							</div>
							
							<?php $num++;
							
						} ?>
						<?php if($num === 13 ) { ?>
							<div class="blocks__bot-vk">
								<a target="_blank" href="https://vk.com/dprom.online">
									БУДЬ С НАМИ ВКОНТАКТЕ
									<div class="customAnim"></div>
								</a>
							</div>
							
							<?php $num++;
							
						} ?>
						<?php if($num === 17 ) { ?>
							<div class="blocks__bot-facebook">
								<a target="_blank" href="https://www.facebook.com/dprom.online">
									БУДЬ С НАМИ В FACEBOOK
									<div class="customAnim"></div>
								</a>
							</div>
							
							<?php $num++;
						} ?>
				<?php if($num !== 2 && $num !== 8 && $num !== 13 && $num !== 17) { ?>
						<?php if($num == 0) { ?>
							<div class="one">
								<a href="<?php the_permalink();?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(null,'large'); ?>'); background-position: 50%">
									<div>
										<p><?php the_title(); ?></p>
										<span><?php echo get_the_category()[0] -> name; ?></span>
									</div>
								</a>
							</div>
						<?php  } else if($num == 4) { ?>
							<div class="two">
								<a href="<?php the_permalink();?>" style="background-image: url('<?php echo get_the_post_thumbnail_url(null,'large'); ?>'); background-position: 50%">

									<div>
										<p><?php the_title(); ?></p>
										<span><?php echo get_the_category()[0] -> name; ?></span>
									</div>
								</a>
							</div>
						<?php  } else if($num == 11) { ?>
							<div class="three">
								<a href="<?php the_permalink();?>">
									<?php the_post_thumbnail('medium'); ?>
									<div>
										<p><?php the_title(); ?></p>
										<span><?php echo get_the_category()[0] -> name; ?></span>
									</div>
								</a>
							</div>
						<?php } else { ?>
								<div class="">
									<a href="<?php the_permalink();?>">
										<?php the_post_thumbnail('medium'); ?>
										<div>
											<p><?php the_title(); ?></p>
											<span><?php echo get_the_category()[0] -> name; ?></span>
										</div>
									</a>
								</div>
						<?php } ?>

						
					<?php $num++;
						continue;
						} ?>
						

					<?php  }
						}?>
				
						<div onclick="arrowDown()" class="arrowDown">
							<div>
								<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-bar-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
								</svg>
							</div>
						</div>
				</div>
		</div>

            <?php if(count($args3) > 17) { ?>
            <script>
              document.addEventListener("DOMContentLoaded", arrowDisp);
            </script>
            <?php } ?>

<?php wp_reset_query(); ?>
		<div class="col-12 col-lg-3">
			<div class="foxy mt-3">
				<?php get_template_part('includes/foxy1'); ?>
				
			</div>
		
		</div>
		
		<div class="col-12 bigBanner">
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
	</div>
</div>
</div>

<div class="container-fluid allWidth">
	<div class="swiper-container allWidth__sw allWidth__main">
		<div class="swiper-wrapper">
			<?php
				$argsPaid = [];
				
				for($pp = 0; $pp < 5; $pp++) {
					array_push($argsPaid, $argsTag -> posts[$pp]);
				}
				
				$argsSlider = array(
					'posts_per_page' =>5,
					'post_type' => 'project',
					'tag__not_in' => 2851,
					'tax_query' => [
						[
							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => [1831, 1830, 1415],
						]
					]
				);
				
				$queryOther = new WP_Query($argsSlider);
				
				$querySlider = array_merge($argsPaid, $queryOther -> posts);
    
				uasort($querySlider, 'forArgs');
				
				if(count($querySlider) > 0) {
					foreach( $querySlider  as $post ){
						setup_postdata($post);
			?>
			<a href="<?php the_permalink();?>" class="swiper-slide">
				<div>
					<?php echo get_the_post_thumbnail( null, 'medium', array('class' => 'NotLazySlider') ); ?>
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
</div>
<?php wp_reset_query(); ?>


<div class="container-md">
	
	<div class="row">
		<div class="col-12 col-md-8 col-lg-9">
			<h2 class="spec-title">
				ОТРАСЛЕВЫЕ РЕШЕНИЯ
			</h2>
			
			<div class="row row-cols-2 row-cols-lg-4 midBlocks">
				<?php
					$argsOtrasl = array(
						'post_type' => array('post', 'project'),
						'posts_per_page' =>8,
						'tag_id' => 1649,
					);
					$myArray = array();$i=0;$myArray[0]=22689;
					$queryOtrasl = new WP_Query($argsOtrasl);
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
					// 	if(get_post_type() == 'project'){
					// 	$myArray[$i] = get_the_ID();
					// 	$i++;
					// }
				?>
				
				<a href="<?php the_permalink();?>" class="col">
					<?php the_post_thumbnail('medium'); ?>
					<span><?php echo get_the_category()[0] -> name; ?></span>
					<p>
						<?php $title = get_the_title();
									echo kama_excerpt(['maxchar' => 70, 'text' => $title]);
						?>
					</p>
				</a>
				
				<?php }
					} ?>
			</div>
			
			<?php if (  $queryOtrasl->max_num_pages > 1 ) : ?>
				<script>
					var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var true_posts1 = '<?php echo serialize($queryOtrasl->query_vars); ?>';
					var current_page1 = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 2; ?>;
					var max_pages1 = '<?php echo $queryOtrasl->max_num_pages; ?>';
				</script>
				
				<button id="mwr1" class="loadMore">
				<span>
					ПОДГРУЗИТЬ ЕЩЕ
				</span>
				</button>
				
			<?php endif; ?>
			

		</div>
		
		<?php wp_reset_query(); ?>
		
		<div class="col-12 col-md-3 ">
			<div class="foxy middle">
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
		<div class="col col-md-8 col-lg-9">
			<h2 class="spec-title">
				ПО ТЕМЕ
			</h2>
			<div class="row row-cols-2 botBlocks">
				<?php
				/*обычные посты с меткой  Mining World Russia 2020 2781*/
//					$argsPoTeme = array(
//						'tag_id' => 2781,
//						'posts_per_page' =>4,
//						'post_type' => 'post',
////						'tag' => 'mwr2020',
//					);
					
					$queryPoTeme = new WP_Query( 'post_type=project&cat=1827&posts_per_page=4&tag__not_in=2851');
					
//					$queryPoTeme = new WP_Query($argsPoTeme);
					if($queryPoTeme->have_posts()){
					while($queryPoTeme->have_posts()){
						$queryPoTeme->the_post();
				?>
				
				<a href="<?php the_permalink();?>" class="col-12 col-lg-6">
					<div>
						<?php the_post_thumbnail('medium'); ?>
						<div>
							<p>
								<?php the_title(); ?>
							</p>
						</div>
					</div>
				</a>
				
				<?php }
				} ?>

				
			</div>
			<?php if ( $queryPoTeme->max_num_pages > 1 ) :?>
				<script>
					var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var true_posts2 = '<?php echo serialize($queryPoTeme->query_vars); ?>';
					var current_page2 = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 2; ?>;
					var max_pages2 = '<?php echo $queryPoTeme->max_num_pages; ?>';
				</script>
				
				<button id="mwr2" class="loadMore">
					<span>
						ПОДГРУЗИТЬ ЕЩЕ
					</span>
				</button>
			<?php endif; ?>


		</div>
		<?php wp_reset_query(); ?>
		<div class="col-12 col-md-3">
				<div class="foxy middle">
					<?php get_template_part('includes/foxy3'); ?>
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

<div class="container-fluid bottomness">
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
			<?php wp_reset_query(); ?>
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
				slidesPerView: 2,
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

		<a href="https://metrika.yandex.ru/stat/?id=47347473&amp;from=informer"
			 target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/47347473/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
																					 style="width:88px; height:31px; border:0; display: block; margin:0 auto;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="47347473" data-lang="ru" /></a>

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