<?php
/*
Template Name: Шаблон для каталога
*/
?>
<?php 
get_header();
the_post();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
					<article class="singleArticle">
					<?php the_content();?>
				</article>
				<?php 
					get_template_part('includes/hrBnr');?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>

			<?php //get_template_part('includes/archive');?>
			<div class="main">
				<?php 
					get_template_part('includes/hrBnr2');
				?>
			</div>
<?php //get_template_part('includes/sector2');?>
</div>
<?php get_footer();
?>