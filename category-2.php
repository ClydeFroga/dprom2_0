<?php
 get_header();
?>
<div class="table">
			<div class="middle-block">
				<main class="spec">
					<h1 class="spec__title">Новости</h1>
					<style>
						*{transition: 0.5s;}
					</style>
<?php
	$homie = 0; 
	if(have_posts()){
		while(have_posts()){
			the_post();
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
			if($homie>0 && $homie<=2){
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
				if($homie == 2){
					?>
				</div>
			</div>
					<?php
				}
			}
			if($homie>2){
				if($homie==3){
					get_template_part('includes/bannerD');
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
				if($homie == 11){
					?>
				</div>
					<?php 
					get_template_part('includes/bannerE');
				}
			}
			$homie++;
		}
	if($wp_query->max_num_pages > 1 ) : ?>
	<script>
		var ajaxurl2 = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
		var true_posts2 = '<?php echo serialize($wp_query->query_vars); ?>';
		var current_page2 = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
		var max_pages2 = '<?php echo $wp_query->max_num_pages; ?>';
	</script>
	<div id="true_News" class="anonce">Загрузить ещё</div>
	<?php endif; 
	}else{
		echo "<h4>Нет постов по теме</h4>";
	}
?>
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
