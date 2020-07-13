<?php 
	$args = array(
		'category__in' => array(2),
		'posts_per_page' =>5,
		'ignore_sticky_posts'=>1,
	);
	$i = 0;
	$my_query = new WP_Query($args);
	if($my_query->have_posts()){
		$titles = array();
		$dates = array();
		$iter = 0;
		?>
		<h2 class="archive__title"><a href="<?php echo get_term_link(2)?>">Новости</a></h2>
		<div class="news">
			<div class="news__slider">
				<?php
				while ( $my_query->have_posts()) {
					$my_query->the_post();
					?>
					<a href="<?php the_permalink();?>" class="news__item">
						<?php 	$ttl=get_the_title();
								$postDate = get_the_date('d.m.Y');
								if(get_the_post_thumbnail()){
										the_post_thumbnail('full');
									}else{
										?>
										<img src="<?php bloginfo('template_url')?>/img/placeholder.jpg?>" alt="Добывающая промышленность - портал для недропользоваталей">
										<?php
									}
						?>
						<div class="news__info">
							<h3 class="news__title">
								<?php echo $ttl;?>
							</h3>
							<span class="news__date"><?php echo $postDate;?></span>
						</div>
					</a>
					<?php
					$titles[$iter] = $ttl;
					$dates[$iter]= $postDate;
					$iter++;
				}
				?>
			</div>
			<div class="news__contents">
				<?php 
				$length = count($titles);
				for($i = 0; $i<$length; $i++){
					?>
					<div class="news__controls">
						<span>
							<?php echo $titles[$i]?>
						</span>
						<span class="news__cdate">
							<?php echo $dates[$i];?>
						</span>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	<?php
	 };
wp_reset_query();
		?>

