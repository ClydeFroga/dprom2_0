<?php get_header();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<?php 
					if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs();
					if(have_posts()){
						$i = 0;
						while(have_posts()){
							the_post();
							if($i == 0 || $i%3==0){
								?>
								<div class="hrArticles">
								<?php
							}
							?>
								<a href="<?php the_permalink();?>" class="hrArticle">
				<?php 
									$imgArr = array('class' =>'hrArticle__img');
									if(get_the_post_thumbnail()){
										the_post_thumbnail('thumbnail', $imgArr);	
									}else{
										?>
										<img src="<?php bloginfo('template_url')?>/img/placeholder.jpg?>" alt="" class="hrArticle__img">
										<?php
									}
								?>
				<div class="hrArticle__info">
					<h3 class="hrArticle__header">
						<?php 
							$text = get_the_title();
							echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
						?>
					</h3>
					<span class="hrArticle__text">
						<?php 
							$text = get_the_excerpt();
							echo kama_excerpt(array('maxchar'=>90, 'text'=>$text));
						?>
					</span>
					<span class="hrArticle__heading"  onclick="event.preventDefault();window.location='<?php $category = get_the_category();
												$idC = $category[0]->cat_ID;
												echo get_category_link($idC);
											?>'">
						<?php echo $category[0]->cat_name;?>
					</span>
				</div>
		</a>
							<?php	
							$i++;
							if($i!= 0 && $i%3 == 0){
								?>
							</div>
								<?php
							}
						}
					}
					the_posts_pagination(
							$args = array(
						    'show_all'     => false,
						    'end_size'     => 2,
						    'mid_size'     => 2,
						    'prev_next'    => true,
						    'prev_text'    => '«',
						    'next_text'    => '»',
						    'add_args'     => false,
						    'add_fragment' => '',
						    'before_page_number' => '',
						        'after_page_number' => '',
						    'screen_reader_text' => '',
						));
					?>
				<?php get_template_part('includes/bannerD');?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>
	<?php get_template_part('includes/archive');?>
	<div class="main">
		<?php //get_template_part('includes/bannerE');?>
	</div>
	<?php get_template_part('includes/sector2');
	?>
</div>
<?php get_footer();?>