<?php
	$tax =array( 'taxonomy'=>'series',
		'orderby' => 'slug',
		'order' => 'desc',
		'hide_empty'=>true,
		'number'=> 8
	);
	$tax_terms = get_terms($tax);
	if ($tax_terms) {
		?>
		<div class="archive">
			<section class="archive__wrapper">
				<h2 class="archive__title">Отраслевая пресса</h2>
				<?php
					foreach ($tax_terms as $tax_term) {
						$image_id = get_term_meta( $tax_term->term_id, '_thumbnail_id', 1 );
						$image_url = wp_get_attachment_image_url( $image_id, 'full' );
						?>
						<div class="archive__item">
							<a href="<?php echo get_term_link((int)$tax_term->term_id);?>" class="archive__link">
								<img src="<?php echo $image_url ?>" alt="" class="archive__img">
							</a>
						</div>
						<?php
					};
				?>
			</section>
		</div>
	<?php };