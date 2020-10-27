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
	$post_themes;
	$terms_theme = get_the_terms($id, 'mainthemes'); 
	if($terms_theme){
		foreach ($terms_theme as $oneTheme) {
			$post_themes[]=$oneTheme->term_id;
			echo $oneTheme->term_name;
		};
	};
	$noin = false;
	$post_caty = get_the_category($id);
	if($post_caty){
		$caty_post = array();	
		foreach ($post_caty as $key) {
			if($key->term_id == 2370){$noin = true;}
			$caty_post[] = $key->term_id;
		}
	}
	if($noin){echo "<meta name='robots' content='noindex,nofollow'>";};
	?>
<div class="table">
	<div class="middle-block">
		<?php get_sidebar('single');?>
		
	<main>
		<article class="singleArticle">
			<header class="singleArticle__title">
				<div class="metaData">
					<span class="metaData__date"><?php  the_time('d.m.Y')?></span>
				</div>
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				<h1><?php the_title();?></h1>
			</header>
			<?php the_content();

			get_template_part('includes/sendPulseFormC');
			$terms=get_the_terms( $id, 'series' );
   			if( is_array( $terms ) ){
    			foreach( $terms as $term ){
     			echo '<div class="writer"><span class="writer__text" >Статья опубликована в журнале <a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'">'. $term->name .'</a></span></div>';
    }
   }
			the_tags( '<ul class="marks"><span class="marks__text">Теги:</span><li class="marks__link">','</li><li class="marks__link">','</li></ul>'); ?>

			<footer class="singleArticle__ft">
				<?php get_template_part('includes/sharing');	
				?>
			</footer>
		</article>
		<?php 
			get_template_part('includes/bannerD');
			get_template_part('includes/comments');
			get_template_part('includes/bannerE');
		;?>
			</main>
	<?php get_sidebar('right');?>	
		</div>
</div>
<!--START Sector2 -->
<?php 
include(locate_template('includes/sector2_single.php'));?>
<!--END SECTOR2 -->

</div>
<a id="upArrow" class="upArrow">
		<svg class="upArrow__img">
			<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#upLogo"></use>
		</svg>
	</a>
<?php get_footer();?>