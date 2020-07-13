<div class="sector2">
			<div class="sector2row">
			<div class="tileWrapper">
			<?php
					$args = array(
						'post__not_in'=>array($id),
						'category__not_in' => array(2419, 2370),
						'posts_per_page'=>9,
						'ignore_sticky_posts' => 1,
					);
					$query = new WP_Query($args);
					if($query->have_posts()){
						?>
							<div class="loadNews">
						<?php
						while($query->have_posts() ){
							$query->the_post();
							?>
									<a href="<?php the_permalink(); ?>" class="loadNews__item">
										<div class="loadNews__imgWrap">
											<?php 
											if(get_the_post_thumbnail()){
											$imgArr = array('class' =>'loadNews__img');
											the_post_thumbnail('large', $imgArr);
											}else{
												?>
												<img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="loadNews__img">
												<?php
											}
											?>
										</div>
										<span class="loadNews__title">
											<?php 
												$text = get_the_title();
												echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
											?>
										</span>
									</a>
									
							<?php
						}
						?>
						</div>
				<?php		
				if (  $query->max_num_pages > 1 ) : ?>
				<script id="true_loadmore_single">
					var ajaxurl_single = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var true_posts_single = '<?php echo serialize($query->query_vars); ?>';
					var current_page_single = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
					var max_pages_single = '<?php echo $query->max_num_pages; ?>';
				</script>
				<?php endif; ?>
						</div>
						<?php
					}
					?>
				<div class="bottomSidebarRight">
					<?php get_sidebar('bottomSidebarRight');?>
				</div>
				</div>
			</div>
		</div>	
		<?php //get_template_part('includes/sliderAns');?>