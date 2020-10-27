<div class="col">
	<a href="<?php the_permalink();?>">
		<?php the_post_thumbnail('medium'); ?>
		<div>
			<p><?php the_title(); ?></p>
			<span><?php echo get_the_category()[0] -> name; ?></span>
		</div>
	</a>
</div>
