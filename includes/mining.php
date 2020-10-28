<article class="shaht-post">
	<div class="shaht-post__img">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
			<div class="shaht-post__deco">
				<svg width="40px" height="40px" viewBox="0 0 242.61 242.61">
					<path class="cls-1" fill="#1a171b" d="M121.31,20.9A100.52,100.52,0,0,0,20.9,121.31H31.35a90,90,0,1,1,90,90v10.45a100.41,100.41,0,1,0,0-200.81Z"/>
					<path class="cls-2" fill="#ca9e64" d="M190.36,121.31a69.06,69.06,0,1,1-69.05-69.06V41.8a79.5,79.5,0,1,0,79.5,79.5Z"/>
					<path class="cls-3"  fill="#9d6a36" d="M207.08,35.53A120.52,120.52,0,0,0,121.31,0V10.45A110.86,110.86,0,1,1,10.45,121.31H0V242.61H121.31A121.31,121.31,0,0,0,207.08,35.53Z"/>
					<path class="cls-1" fill="#1a171b" d="M121.31,0a121.29,121.29,0,0,1,121.3,121.31V0Z"/>
				</svg>
			</div>
		</a>
	</div>
	<a href="<?php the_permalink(); ?>" class="shaht-post__title">
		<h3><?php the_title(); ?></h3>
	</a>
	<p class="shaht-post__excerpt">
		<?php $text = get_the_excerpt();
			echo kama_excerpt(array('maxchar'=>120, 'text'=>$text)); ?></p>
</article>