<?php 
get_header();
the_post();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<article class="singleArticle">
						<header class="singleArticle__title">
							<h1><?php the_title();?></h1>
						</header>
					<?php the_content();?>
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
				</article>
				<?php 
					get_template_part('includes/bannerD');?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>

			<?php get_template_part('includes/archive');?>
			<div class="main">
				<?php 
					get_template_part('includes/bannerE');
				?>
			</div>
<?php get_template_part('includes/sector2');?>
</div>
<?php get_footer();
?>