<?php get_header(); ?>
<div class="table">
	<div class="middle-block">
		<main class="newYear">
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs();		
		if(have_posts()){
				?>
				<div class="congrats">
					<?php 
					$count=0;
			while(have_posts()){
				the_post();
				if($count == 0){
			?>
				<div class="congrats__item">
					<a href="<?php the_permalink();?>" class="congrats__link">
						<div class="congrats__imgWrap" style="background:url('<?php echo get_the_post_thumbnail_url( $post, 'full' );?>') 50% 50% no-repeat; background-size:cover;">
						</div>
						<span class="congrats__text">
									<span class="congrats__who"> <?php  the_post_thumbnail_caption()?>  </span>
									<span class="congrats__speech">
									<?php the_excerpt();?>
									</span>
									<span class="congrats__btn">Получить поздравление</span>
								</span>	
					</a>
				</div>	
			<?php
				}else{
					?>
					<div class="congrats__item wow fadeInUp"  data-wow-offset="100">
					<a href="<?php the_permalink();?>" class="congrats__link" >
						<div class="congrats__imgWrap" style="background:url('<?php echo get_the_post_thumbnail_url( $post, 'full' );?>') 50% 50% no-repeat; background-size:cover;">
						</div>
						<span class="congrats__text">
									<span class="congrats__who"><?php  the_post_thumbnail_caption()?></span>
									<span class="congrats__speech">
									<?php the_excerpt();?>
									</span>
									<span class="congrats__btn">Получить поздравление</span>
								</span>	
					</a>
				</div>
					<?php
				}
				?>

				<?php
				$count++;
			}
					?>
				</div>
				<?php
			}
			?>
					</main>
			<?php get_sidebar('right');?>
				</div>
				<script>
					var sidebar = document.querySelector(".sidebar-right");
					sidebar.style.paddingTop = "4.9em";
				</script>
					</div>
				</div>
			<?php get_footer();?>
			 <script>
			    new WOW().init();
			 </script>

