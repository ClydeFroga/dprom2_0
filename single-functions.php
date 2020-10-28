<?php get_header(); 
the_post();
$id = get_the_ID();
	$post_tags = get_the_tags($id);
	if($post_tags){
		$tags_array = array();
		foreach($post_tags as $key) {
			$tags_array[] = $key->term_id;
		 }	
	}
	$post_caty = get_the_category($id);
	if($post_caty){
		$caty_post = array();	
		foreach ($post_caty as $key) {
			$caty_post[] = $key->term_id;
		}
	}
?>
<div class="table">
	<div class="middle-block">
		<?php get_sidebar('single');?>
	<main>
		<article class="singleArticle">
			<header class="singleArticle__title">
				<div class="metaData">
					<span class="metaData__date"><?php  the_time('d.m.Y')?></span>
					<span class="pageviews-placeholder">
						<?php echo do_shortcode('[tptn_views]');?>
					</span>
				</div>
				<h1><?php the_title();?></h1>
			</header>
			<?php the_content();?>
			
			<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
				<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a class="breadcrumbs__link" href="https://dprom.online/" itemprop="item">
						<span itemprop="name">Главная</span>
					</a>
					<meta itemprop="position" content="1" />
				</span>
				<span class="breadcrumbs__separator"></span>
				<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
					<a class="breadcrumbs__link" href="https://dprom.online/ugol-mining/" itemprop="item">
						<span itemprop="name">Уголь и Майнинг 2019</span>
					</a>
					<meta itemprop="position" content="2" /></span>
					<span class="breadcrumbs__separator"></span>
					<span class="breadcrumbs__current"><?php the_title();?></span>
				</div>
					<!-- .breadcrumbs -->	
			<footer class="singleArticle__ft">
				<?php get_template_part('includes/sharing');	  
				?>
			</footer>
		</article>
		<?php 
			get_template_part('includes/bannerD');
			include(locate_template('includes/singleTopSpec.php'));
			get_template_part('includes/bannerE');
		;?>
			</main>
	<?php get_sidebar('right');?>

		</div>
</div>
		<!--END SECTOR2 -->
</div>
<a id="upArrow" class="upArrow">
		<svg class="upArrow__img">
			<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#upLogo"></use>
		</svg>
	</a>
<?php get_footer();?>