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
		'post_type'=>'functions',
		'post__not_in' => array ($id),
		'posts_per_page' =>6,
		'tag__in'=>$myTagsID,
		'ignore_sticky_posts'=>1,
	);
	$my_query = new WP_Query($args);
	if($my_query->have_posts()){
		$count = 0;
		 ?>
		<!-- <h2 class="archive__title">Ещё материалы по теме</h2> -->
		<div class="trplArticles">
		<?php
		while($my_query->have_posts()){
			$my_query->the_post();
			$idOfPopPosts[$count] = get_the_ID();
			?>
			<a href="<?php the_permalink();?>" class="trplArticles__rightBlock">
					<?php 
		$imgArr = array('class' =>'trplArticles__img');
		if(get_the_post_thumbnail()){
			the_post_thumbnail('thumbnail', $imgArr);	
		}else{?>
			<img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="trplArticles____img">
			<?php
			}?>
			<div class="trplArticles__info">
				<div>
					<?php 
						$category = get_the_category();
						if(!$category){
							$category = get_the_terms('','mainthemes');
						}
					?>
					<span class="trplArticles__heading" 
					onclick="event.preventDefault();window.location='<?php echo get_term_link($category[0]->term_id); ?>'">
					<?php 
					echo $category[0]->name;?>	
					</span>
				</div>
				<h2 class="trplArticles__header">
					<?php $text = get_the_title();
							echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));?>
				</h2>
			</div>
			</a>
			<?php
			if($count==2){
				echo "</div>";
				echo "<div class='trplArticles'>";
			}
			$count++;
		}
		?>
		</div>
		<?php
		
	}	else{
		echo "<h2>Нет записей</h2>";
	};
wp_reset_query();