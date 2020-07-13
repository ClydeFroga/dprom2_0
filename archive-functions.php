<?php
/*
Template name: Уголь и майнинг 2019
Template Post Type: page
*/
 get_header();
?>
<div class="table">
			<div class="middle-block">
				
				<main class="spec">
					<h1 class="spec__title">Выставка «Уголь России и Майнинг» 2019</h1>
<?php
	$args = array(
	'post_type' =>'functions',
	'posts_per_page'=>11,
	'ignore_sticky_posts'=>true,
);
	$query = new WP_Query($args);
	$homie = 0; 
	if($query->have_posts()){
		while($query->have_posts()){
			$query->the_post();
			if($homie == 0){
				?>
				<div class="special">
					<div class="ground">
						<a href="<?php the_permalink();?>" class="ground__article">
							<div class="ground__clearfix"></div>
							<?php 
								$imgArr = array('class' =>'ground__img');
								if(get_the_post_thumbnail()){
										the_post_thumbnail('full', $imgArr);	
									}else{
										?>
										<img src="https://picsum.photos/800/600?random=1" alt="random_img" class="ground__article">
										<?php
									}
							?>
							<div class="ground__info">
								<h2 class="ground__title">
									<?php 
										$text = get_the_title();
										echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
									?>
								</h2>
								<p class="ground__text">
									<?php 
										$text = get_the_excerpt();
										echo kama_excerpt(array('maxchar'=>150, 'text'=>$text));
									?>
								</p>
								<span class="ground_date">
									<?php the_time('d.m.Y');?>
								</span>
							</div>
						</a>
					</div>
				<?php
			}
			if($homie>0 && $homie<=4){
				if($homie == 1){
					?>
					<div class="fourth">
					<?php
				};
				?>
					<a href="<?php the_permalink();?>" class="fourth__article">
						<?php 
								$imgArr = array('class' =>'fourth__img');
								if(get_the_post_thumbnail()){
										the_post_thumbnail('full', $imgArr);	
									}else{
										?>
										<img src="https://picsum.photos/300/200?random=1" alt="" class="fourth__img">
										<?php
									}
							?>
					<div class="fourth__info">
						<h2 class="fourth__title">
							<?php 
								$text = get_the_title();
								echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
							?>
						</h2>
						<p class="fourth__text">
							<?php 
								$text = get_the_excerpt();
								echo kama_excerpt(array('maxchar'=>150, 'text'=>$text));
							?>
						</p>
						<span class="fourth__date">
							<?php the_time('d.m.Y');?>
						</span>
					</div>
				</a>
				<?php
				if($homie == 4){
					?>
				</div>
			</div>
					<?php
				}
			}
			if($homie>4){
				if($homie==5){
					?>
					<div class="trplspec">
					<?php
				}
				?>
				<a href="<?php the_permalink();?>" class="trplspec__article">
					<div class="trplspec__imgWrap">
						<?php 
							$imgArr = array('class' =>'trplspec__img');
							if(get_the_post_thumbnail()){
								the_post_thumbnail('large', $imgArr);	
							}else{
							?>
								<img src="https://picsum.photos/600/400?random=8" alt="" class="trplspec__img">
							<?php
								}
							?>
					</div>
					<div class="trplspec__info">
						<h3 class="trplspec__title">
							<?php 
								$text = get_the_title();
								echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
								?>
						</h3>
						<span class="trplspec__date"><?php the_time('d.m.Y');?></span>
					</div>
				</a>
				<?php
				if($homie == 10){
					?>
				</div>
					<?php 
				}
			}
			$homie++;
		}

	}else{
		echo "<h4>Нет постов по теме</h4>";
	}
	if (  $query->max_num_pages > 1 ) : ?>
	<script id="true_loadmore">
		var ajaxurl = '<?php echo site_url()?>/wp-admin/admin-ajax.php';
		var true_posts = '<?php echo serialize($query->query_vars); ?>';
		var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
	</script>
<?php endif; ?>
</main>
<?php get_sidebar('right');?>
	</div>
	<script>
		var sidebar = document.querySelector(".sidebar-right");
		console.log(typeof(sidebar));
		sidebar.style.paddingTop = "4.9em";
	</script>
		</div>
	</div>
<?php get_footer();?>
