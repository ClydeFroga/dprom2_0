<?php get_header();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<div class="breadcrumbs">
						<span><a href="<?php home_url();?>" class="breadcrumbs__link">Главная</a></span>
						<span class="breadcrumbs__separator"></span>	
						<span class="breadcrumbs__current"><?php echo single_cat_title();?></span>
					</div>
					<?php 
					
					if(have_posts()){
						$i = 0;
						while(have_posts()){
							the_post();
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
										<span class="trplArticles__data"><?php the_time('d.m.Y');?></span>
										<span class="trplArticles__heading" onclick="event.preventDefault();window.location='<?php $category = get_the_category();
												$idC = $category[0]->cat_ID;
												echo get_category_link($idC);
											?>'">
											<?php 
												
												echo $category[0]->cat_name;
											?>	
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
										<span class="hrArticle__heading" onclick="event.preventDefault();window.location='<?php $category = get_the_category();
												$idC = $category[0]->cat_ID;
												echo get_category_link($idC);
											?>'">
											<?php 
												$category = get_the_category();
												echo $category[0]->cat_name;
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
										<span class="trplArticles__heading">
											<?php 
												$category = get_the_category();
												echo $category[0]->cat_name;
											?>	
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
										<span class="hrArticle__heading">
											<?php 
												$category = get_the_category();
												echo $category[0]->cat_name;
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
<?php get_template_part('includes/sector2');?>
</div>
<?php get_footer();?>