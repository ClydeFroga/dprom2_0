<?php 
$args = array(
	'category__in'=>'1411,1414,1415', //1411,1414,1415 eyes,interview, bs-case
	'posts_per_page'=>3,
	'ignore_sticky_posts' => 1,
);
$new_query = new WP_Query($args);
if($new_query->have_posts()){
	?>
	<section class="sidebarNews">
		<?php while($new_query->have_posts()){
			$new_query->the_post();
			?>
			<a href="<?php the_permalink();?>" class="sidebarNews__item">
				<span class="sidebarNews__heading">
					<?php
						$category = get_the_category();
						echo $category[0]->name;
					?>
				</span>
				<span class="sidebarNews__title">
					<?php 
						$text = get_the_title();
						echo kama_excerpt(array('maxchar'=>80, 'text'=>$text));
					?>
				</span>
			</a>
			<?php
		}?>
	</section>
	<?php
};
wp_reset_query();
?>