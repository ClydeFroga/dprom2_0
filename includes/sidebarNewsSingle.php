<?php 
$my_array = array();
if(is_single()){
$my_array[0] = $post->ID; 	
}
$args = array(
	'post__not_in'=>$my_array,
	'category__in'=>'2', //1411,1414,1415 eyes,interview, bs-case
	'posts_per_page'=>6,
	'ignore_sticky_posts' => 1,
);
$new_query = new WP_Query($args);
if($new_query->have_posts()){
	?>
	<section class="sidebarNews">
		<h3 class="sidebarNews__mainTitle">
			<a href="<?php echo get_category_link('2')?>" class="sidebarNews__link">
				<?php
					echo get_cat_name('2');
				 ?>
				</a>
		</h3>
		<?php while($new_query->have_posts()){
			$new_query->the_post();
			?>
			<a href="<?php the_permalink();?>" class="sidebarNews__item">
				<span class="sidebarNews__heading">
					<?php
						the_time('d.m.Y');
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