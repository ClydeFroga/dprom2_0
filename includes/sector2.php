<div class="sector2">
			<div class="sector2row">
				<?php get_sidebar('bottomSidebarLeft');
					$args = array(
						'category__in' => array(1412,1411),
						'posts_per_page'=> 6,
					);
					$query = new WP_Query($args);
					if($query->have_posts()){
						?>
						<div class="tileWrapper">
						<h2 class="archive__title"><a href="<?php echo get_term_link(1412);?>">Рынок</a></h2>
							<div class="tileNews">
						<?php
						while($query->have_posts()){
							$query->the_post();
							?>
								<div class="tileNews__item">
									<a href="<?php the_permalink();?>" class="tileNews__info">
										<?php 
										$imgArr = array('class' =>'tileNews__img');
										if(get_the_post_thumbnail()){
											the_post_thumbnail('large', $imgArr);
										}else{?>
											<img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="tileNews__img">
											<?php
											}?>
										<span class="tileNews__title">
											<?php 
												$text = get_the_title();
												echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
											?>
										</span>
									</a>
									<?php
										$category = get_the_terms('','mainthemes');
										
										?>
									<a href="<?php echo get_term_link($category[0]->term_id);?>" class="tileNews__heading">
										<?php echo $category[0]->name;?>
									</a>
								</div>	
							<?php
						}
						?>
							</div>
						</div>
						<?php
					}else{
						echo "<span>Not found</span>";
					}
					wp_reset_query();
				?>
				<div class="bottomSidebarRight">
					<?php get_sidebar('bottomSidebarRight');?>
				</div>
			</div>
		</div>
		<?php get_template_part('includes/sliderAns');?>