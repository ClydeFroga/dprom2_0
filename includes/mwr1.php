<a href="<?php the_permalink();?>" class="col">
	<?php the_post_thumbnail('medium'); ?>
	<span><?php echo get_the_category()[0] -> name; ?></span>
	<p>
		<?php the_title(); ?>
	</p>
</a>
