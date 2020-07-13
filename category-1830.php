<?php get_header();
$args = array(
	'post_type' =>'functions',
	'ignore_sticky_posts'=>true,
	'category__in'=>array(1830),
);
$query = new WP_Query($args);
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<?php 
					if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs();
					if($query->have_posts()){
						$i = 0;
						while($query->have_posts()){
							$query->the_post();
							if($i>=0 && $i<3){
								if($i==0){
									?>
									<div class="trplArticles">
									<?php
								}
								?>
							<a href="<?php the_permalink();?>" class="trplArticles__rightBlock">
								<?php 
									$imgArr = array('class' =>'trplArticles__img');
									if(get_the_post_thumbnail()){
										the_post_thumbnail('thumbnail', $imgArr);	
									}else{
										?>
										<img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="trplArticles____img">
										<?php
									}
								?>
								<div class="trplArticles__info">
									<div>
										<span class="trplArticles__data">
											<?php the_time('d.m.Y');?>
										</span>
									</div>
									<h2 class="trplArticles__header">
										<?php 
											$text = get_the_title();
											echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
										?>
									</h2>
								</div>
							</a>
								<?php
								$i++;
								continue;
							}
							if($i == 3){
								?>
							</div>
							<?php get_template_part('includes/bannerD');?>
							<div class="hrArticles">
								<?php
							}
							if($i >= 3 && $i<6){
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
										<span class="hrArticle__data" >
											<?php the_time('d.m.Y');?>
										</span>
										<h3 class="hrArticle__header">
											<?php 
												$text = get_the_title();
												echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
											?>
										</h3>
										<span class="hrArticle__text">
											<?php 
												$text = get_the_excerpt();
												echo kama_excerpt(array('maxchar'=>120, 'text'=>$text));
											?>
										</span>
										
									</div>
								</a>
								<?php
								$i++; 
								continue;
							}
							if($i == 6){
								?>
								</div>
								<div class="trplArticles">
								<?php
							}
							if($i>=6 && $i<9){
								?>
								<a href="<?php the_permalink();?>" class="trplArticles__rightBlock">
								<?php 
									$imgArr = array('class' =>'trplArticles__img');
									if(get_the_post_thumbnail()){
										the_post_thumbnail('thumbnail', $imgArr);	
									}else{
										?>
										<img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="trplArticles____img">
										<?php
									}
									
								?>
								<div class="trplArticles__info">
									<div>
										<span class="trplArticles__data"><?php the_time('d.m.Y');?></span>
									</div>
									<h2 class="trplArticles__header">
										<?php 
											$text = get_the_title();
											echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
										?>
									</h2>
								</div>
							</a>
								<?php
							$i++; 
							continue;
						}
						
						if($i == 9){
							?>
							</div>
							<?php get_template_part('includes/bannerE');?>
							<div class="hrArticles">
							<?php
						}
						if($i>=9 && $i<12){
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
										<span class="hrArticle__data">
											<?php 
												the_time('d.m.Y');
											?>
										</span>
										<h3 class="hrArticle__header">
											<?php 
												$text = get_the_title();
												echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
											?>
										</h3>
										<span class="hrArticle__text">
											<?php 
												$text = get_the_excerpt();
												echo kama_excerpt(array('maxchar'=>120, 'text'=>$text));
											?>
										</span>
										
									</div>
								</a>
							<?php
						$i++;
						continue;
						}
						if($i == 12){
							?>
						</div>
							<?php
						}else{
							?>
						</div>
							<?php
						}
						}
					}
					wp_reset_query();
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
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>		
<?php  get_template_part('includes/popularSector2');?>
</div>
<?php get_footer();?>