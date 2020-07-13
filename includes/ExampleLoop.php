					<?php 
	$args = array(
	'posts_per_page'=> 8,
	'category__not_in' => array(405,1,751,23)
);
	$query = new WP_Query($args);
	$i = 0; 
	if($query->have_posts()){
		while($query->have_posts()){
				$query->the_post();
				if($i == 0){
					?>
					<div class="dblArcticles">
						<a href="<?php the_permalink();?>" class="dblArcticles__leftBlock">
							
							<?php 
								$imgArr = array('class' =>'dblArcticles__lbImg');
								the_post_thumbnail('large', $imgArr);
							?>
							<div class="dblArcticles__lbInfo">
								<div class="dblArcticles__row">
									<span class="dblArcticles__lbData"><?php the_time('d.m.Y')?></span>
									<span class="dblArcticles__lbHeading">
										<?php 
											$category = get_the_category();
											echo $category[0]->cat_name;
										?>			
									</span>
								</div>
								<h2 class="dblArcticles__lbHeader"><?php the_title();?></h2>
								<?php 
									$text = get_the_excerpt();
									echo kama_excerpt(array('maxchar'=>120, 'text'=>$text));
								?>
							</div>
						</a>
					<?php
					$i++;
					continue;
				};
				if($i == 1){
					?>
					<a href="<?php the_permalink();?>" class="dblArcticles__rightBlock">
					<?php 
						$imgArr = array('class' =>'dblArcticles__rbImg');
						the_post_thumbnail('large', $imgArr);
					?>
						<div class="dblArcticles__rbInfo">
							<div class="dblArcticles__row">
								<span class="dblArcticles__rbData"><?php the_time('d.m.Y');?></span>
								<span class="dblArcticles__rbHeading">
									<?php 
										$category = get_the_category();
										echo $category[0]->cat_name;
									?>	
								</span>
							</div>
							<h2 class="dblArcticles__rbHeader"><?php the_title();?></h2>
							<?php 
									$text = get_the_excerpt();
									echo kama_excerpt(array('maxchar'=>120, 'text'=>$text));
								?>
						</div>
					</a>
				</div>
					<?php
				$i++;
				continue;
			};
			if($i >= 2 && $i<5){
					if($i == 2){
						?>
						<div class="trplArticles">
						<?php
					}
					?>
							<a href="<?php the_permalink();?>" class="trplArticles__rightBlock">
								<?php 
									$imgArr = array('class' =>'trplArticles__img');
									the_post_thumbnail('thumbnail', $imgArr);
								?>
								<div class="trplArticles__info">
									<div>
										<span class="trplArticles__data"><?php the_time('d.m.Y');?></span>
										<span class="trplArticles__heading">
											<?php 
												$category = get_the_category();
												echo $category[0]->cat_name;
											?>	
										</span>
									</div>
									<h2 class="trplArticles__header">
										<?php 
											$text = get_the_title();
											echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
										?>
									</h2>
								</div>
							</a>
					<?php
				$i++;
				continue;
				}
				?>
			</div>
			<div class="hrArticles">
	<?php
	if($i>=5 && $i<8){
		if($i==5){
			get_template_part('includes/hrBnr');
		?>
			
		<?php }; ?>
		<a href="<?php the_permalink();?>" class="hrArticle">
				<?php 
					$imgArr = array('class' =>'hrArticle__img');
					the_post_thumbnail('thumbnail', $imgArr);
				?>
				<div class="hrArticle__info">
					<h3 class="hrArticle__header">
						<?php 
							$text = get_the_title();
							echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
						?>
					</h3>
					<span class="hrArticle__text">
						<?php 
							$text = get_the_excerpt();
							echo kama_excerpt(array('maxchar'=>90, 'text'=>$text));
						?>
					</span>
					<span class="hrArticle__heading">
						<?php 
							$category = get_the_category();
							echo $category[0]->cat_name;
						?>
					</span>
				</div>
		</a>
		<?php
		$i++;
		continue;
	};
	?>
	</div>
	<?php
};
};
wp_reset_query();
?>