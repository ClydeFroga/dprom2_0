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
					<h1 class="spec__title"><?php the_title();?></h1>
<?php
$t = get_terms('umr');
$tMass =[];
foreach ($t as $key) {
	$tMass[]=$key->term_id;
}
$brandList = $tMass;
	$args = array(
	'post_type' =>'functions',
	'posts_per_page'=>6,
	'ignore_sticky_posts'=>true,
	'tax_query'=>array(
		array(
			'taxonomy'=>'umr',
			'field'=>'term_id',
			'terms'=> $brandList,
			'operator'=>'NOT IN',
		),
	),
);
	$query = new WP_Query($args);
	?>
	<?php
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
										the_post_thumbnail('large', $imgArr);	
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
								<?php 
									$category = get_the_category();
									if($category){
										$cID = $category[0]->term_id;
										switch ($cID) {
											case 1827:
												echo "<span class='ground__heading heading_anonce'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1829:
												echo "<span class='ground__heading heading_programm'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1415:
												echo "<span class='ground__heading heading_inrerview'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1828:
												echo "<span class='ground__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1830:
												echo "<span class='ground__heading heading_photo'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1831:
												echo "<span class='ground__heading heading_report'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1787:
												echo "<span class='ground__heading'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											default:
												echo "<span class='ground__heading'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
										}
									}else{
										echo  "<span class='ground__heading heading_anonce '>Анонс</span>";
									}	
								?>
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
										the_post_thumbnail('thumbnail', $imgArr);	
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
						<?php 
									$category = get_the_category();
									if($category){
										$cID = $category[0]->term_id;
										$cName =$category[0]->cat_name;
										switch ($cID) {
											case 1827:
												echo "<span class='fourth__heading heading_anonce'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1829:
												echo "<span class='fourth__heading heading_programm'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1415:
												echo "<span class='fourth__heading heading_inrerview'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1828:
												echo "<span class='fourth__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1830:
												echo "<span class='fourth__heading heading_photo'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1831:
												echo "<span class='fourth__heading heading_report'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1787:
												echo "<span class='fourth__heading'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											default:
												echo "<span class='fourth__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
										}
									}else{
										echo  "<span class='fourth__heading heading_anonce mr'>Анонс</span>";
									}

								?>
					</div>
				</a>
				<?php
				if($homie == 2){
					?>
				</div>
			</div>
					<?php

			get_template_part('includes/bannerD');
				}
			}
			if($homie>2){
				if($homie==3){
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
						<?php 
									$category = get_the_category();
									if($category){
										$cID = $category[0]->term_id;
										$cName =$category[0]->cat_name;
										switch ($cID) {
											case 1827:
												echo "<span class='trplspec__heading heading_anonce lab'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1829:
												echo "<span class='trplspec__heading heading_programm'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1415:
												echo "<span class='trplspec__heading heading_inrerview'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1828:
												echo "<span class='trplspec__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1830:
												echo "<span class='trplspec__heading heading_photo'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1831:
												echo "<span class='trplspec__heading heading_report'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1787:
												echo "<span class='trplspec__heading'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											default:
												echo "<span class='trplspec__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
										}
									}else{
										echo  "<span class='trplspec__heading heading_anonce mr'>Анонс</span>";
									}	
								?>
					</div>
				</a>
				<?php
				if($homie == 5){
					?>
				</div>
					<?php 
				}
			}
			$homie++;
		}
		?>
		
		<?php
		if ($query->max_num_pages > 1 ) : ?>
		<script>
			var ajaxurl = '<?php echo site_url()?>/wp-admin/admin-ajax.php';
			var true_posts = '<?php echo serialize($query->query_vars); ?>';
			var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1 ?>;
			var max_pages = '<?php echo $query->max_num_pages; ?>';
		</script>
		<div id="anonce" class="anonce">ещё материалы</div>
	<?php endif; ?>
		<?php
	}else{
		echo "<h4>Нет постов по теме</h4>";
	}
	?>
	<div class="brandsList">
		<h3 class="brandsList__title">
			Бренды
		</h3>
		<?php 
		$myArgs = array(
			'taxonomy'=>'umr',
			'format'=>'list',);
		$taxonomies = wp_tag_cloud( $myArgs );
		?>
	</div>
	<?php wp_reset_query();
	$brands = array(
		'post_type' =>'functions',
		'posts_per_page'=>6,
		'ignore_sticky_posts'=>true,
		'tax_query'=>array(
		array(
			'taxonomy'=>'umr',
			'field'=>'term_id',
			'terms'=> $tMass,
			'operator'=>'IN',
		),
	),
    	
);
	$wf = new WP_Query($brands);
	if($wf->have_posts()){
		?>
		<div class="trplspec">
		<?php
		while($wf->have_posts()){
			$wf->the_post();
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
						<?php 
									$category = get_the_category();
									if($category){
										$cID = $category[0]->term_id;
										$cName =$category[0]->cat_name;
										switch ($cID) {
											case 1827:
												echo "<span class='trplspec__heading heading_anonce lab'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1829:
												echo "<span class='trplspec__heading heading_programm'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1415:
												echo "<span class='trplspec__heading heading_inrerview'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1828:
												echo "<span class='trplspec__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1830:
												echo "<span class='trplspec__heading heading_photo'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1831:
												echo "<span class='trplspec__heading heading_report'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1787:
												echo "<span class='trplspec__heading'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											default:
												echo "<span class='trplspec__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
										}
									}else{
										echo  "<span class='trplspec__heading heading_anonce mr'>Анонс</span>";
									}	
								?>
					</div>
				</a>
			<?php	
		}?>
		</div>
<?php 
	if (  $wf->max_num_pages > 1 ) : ?>
		<script id="brands_more">
		var wf_url = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
		var wf_true_posts = '<?php echo serialize($wf->query_vars); ?>';
		var wf_current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
		var wf_max_pages = '<?php echo $wf->max_num_pages; ?>';
		</script>
		<?php endif;
		}else{
			echo "<h2>Брэнда больше нет</h2>";
		}
	?>
</main>
<?php get_sidebar('functions');?>
	</div>
	<script>
		var sidebar = document.querySelector(".sidebar-right");
		sidebar.style.paddingTop = "4.9em";
	</script>
		</div>
	</div>
<?php get_footer();?>
