<?php get_header();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<?php
					if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs();
					if(have_posts()){
						$count_post = 0;
						$iter = 0;
						?>
							<div class="hrArticles">
						<?php
						while(have_posts()){
							the_post();
							get_template_part('includes/hrArticleLoop');
							if($count_post == 0){
								?>
								</div>
								<?php
									get_template_part('includes/bannerD');
								?>
								<div class="hrArticles">
								<?php
							}
							if($count_post == 2){
								?>
								</div>
								<?php
									get_template_part('includes/bannerE');
								?>
								<div class="hrArticles">
								<?php
							};
							$count_post++;
						}
						?>
						</div>
						<?php
								if($count_post < 2){
									get_template_part('includes/news');
									get_template_part('includes/bannerE');
								}
								if($count_post > 2 && $count_post <7){
									get_template_part('includes/news');
								}
								get_template_part('includes/paginationStandart');
					}else{
						?>
							<h2>Всё пропало! 0_о </h2>
						<?php
						get_template_part('includes/bannerD');
						get_template_part('includes/news');
						get_template_part('includes/bannerE');
					}
					?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>		
		<?php get_template_part('includes/popularSector2');?>

</div>
<?php get_footer();?>