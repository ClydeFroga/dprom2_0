<?php 
	$idOfPopPosts = array();
	$myTags = get_the_tags($id);
	$myTagsID = array();
	$i = 0;
	foreach ($myTags as $tag) {
		$myTagsID[$i] = $tag->term_id;
		$i++;
	}
	$args = array(
		'post__not_in' => array ($id),
		'posts_per_page' =>5,
		'tag__in'=>$myTagsID,
		'ignore_sticky_posts'=>1,
	);
	$my_query = new WP_Query($args);
	if($my_query->have_posts()){
		$count = 0;
		?>
		<!-- <h2 class="archive__title">Ещё материалы по теме</h2> -->
		<div class="popular">
		<?php
		while($my_query->have_posts()){
			$my_query->the_post();
			$idOfPopPosts[$count] = get_the_ID();
			?>
			<a href="<?php the_permalink();?>" class="popular__item">
					<h3 class="popular__header">
						<?php 
							the_title();
						?>
					</h3>
					<span class="popular__heading">
						<?php
							$category = get_the_category();
							echo $category[0]->cat_name;
						?>
					</span>
			</a>
			<?php
			$count++;
		}
		?>
		</div>
		<?php
		
	}	else{
		echo "<h2>Нет записей</h2>";
	};
wp_reset_query();