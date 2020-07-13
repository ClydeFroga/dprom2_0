<?php 
/*
Template name: Страница без заголовка
Template Post Type: page
*/
get_header();
the_post();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<article class="singleArticle">
					<?php the_content();?>
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				</article>
				<?php
					get_template_part('includes/hrBnr');
					get_template_part('includes/popular');
				?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>
			<?php get_template_part('includes/archive');?>
			
<?php get_template_part('includes/sector2');?>
</div>
<?php get_footer();?>