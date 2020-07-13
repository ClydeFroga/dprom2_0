<div class="sector2">
			<div class="sector2row">
				<?php get_sidebar('bottomSidebarLeft');
				$idOfPopPosts = array();
				$settings = array(
						'daily'=> true,
						'daily_range' =>30,
						'limit' =>20,
						'strict_limit'=>false,
					);
				$topPosts = get_tptn_pop_posts($settings);
				$topPosts = wp_list_pluck($topPosts, 'postnumber');
				$args = array(
					'post__in' =>$topPosts,
					'order_by' =>'post__in',
					'posts_per_page'=>6,
					'ignore_sticky_posts' =>true,
					'category__not_in' => array(2370),
					);
					$i2=0;
					$count_p = 0;
					$my_query = new WP_Query($args);
					if($my_query->have_posts()){
						?>
						<div class="tileWrapper">
						<h2 class="archive__title">Популярные материалы</h2>
							<div class="tileNews">
						<?php
						while($my_query->have_posts() && $i2<6){
							$my_query->the_post();
							?>
								<div class="tileNews__item">
									<a href="<?php the_permalink();?>" class="tileNews__info">
										<?php 
										$imgArr = array('class' =>'tileNews__img');
										the_post_thumbnail('large', $imgArr);
										?>
										<span class="tileNews__title">
											<?php 
												$text = get_the_title();
												echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
											?>
										</span>
									</a>
									<?php
										$category = get_the_terms('','mainthemes');
										if($category){
											$theme_link = get_term_link($category[0]->term_id);
											$theme_name = $category[0]->name;
										}else{
											$category = get_the_terms('','category');
											$theme_link = get_term_link($category[0]->term_id);
											$theme_name = $category[0]->name;;
										}
										?>
									<a href="<?php echo $theme_link; ?>" class="tileNews__heading">
										<?php echo $theme_name;?>
									</a>
								</div>	
							<?php
							$i2++;
						}
						?>
							</div>
						
						<?php
					}else{
						echo "no posts";
					}

				wp_reset_query();
				?>
				</div>
				<div class="bottomSidebarRight">
					<?php get_sidebar('bottomSidebarRight');?>
				</div>
			</div>
		</div>
		<?php get_template_part('includes/sliderAns');?>