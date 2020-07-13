<?php
 get_header();
?>
<div class="table">
			<div class="middle-block">
				<main class="spec">
					<h1 class="spec__title">Уголь и Майнинг России 2019</h1>
<?php
	$args = array(
	'post_type' =>'functions',
);
	$query = new WP_Query($args);
	$homie = 0; 
	var_dump($query);
	wp_reset_query();
	?>
</main>
<?php get_sidebar('right');?>
	</div>
		</div>
		<?php get_template_part('includes/archive');
			get_template_part('includes/sector2');?>
	</div>
<?php get_footer();?>
