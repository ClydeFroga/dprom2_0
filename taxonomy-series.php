<?php get_header();
$term_id = get_queried_object_id();
$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
$image_url = wp_get_attachment_image_url( $image_id, 'full' );
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<article class="singleArticle">
						<h1 class="seriesTitle"><?php echo single_term_title('',0);?></h1>
						<img src="<?php echo $image_url ?>" alt="<?php echo $tax_term->name; ?>" class="magazine__img" style="margin-bottom: 2.5em;">
					</article>
					<?php 
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
										the_post_thumbnail('full', $imgArr);	
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
							echo kama_excerpt(array('maxchar'=>150, 'text'=>$text));
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
		<?php get_template_part('includes/bannerE');?>
	</div>
	<?php get_template_part('includes/sector2');
	?>
</div>
<?php get_footer();?>