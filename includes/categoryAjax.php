<?php
	if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs();
	$count_post = 0;
	$iter = 0;
	if(have_posts()){
		while(have_posts()){
			the_post();
			$count_post++;
		}
		if($count_post>0 && $count_post<=3){
			?>
			<div class="trplArticles">
				<?php
					while(have_posts()){
						the_post();
						get_template_part('includes/trplArticlesLoop');
					}
				?>
			</div>
			<?php
			get_template_part('includes/bannerD');
			get_template_part('includes/paginationStandart');
		}else
			if($count_post>3 && $count_post<=6){
				while(have_posts()){
					the_post(); $iter++;
					if($iter<=3){
						if($iter == 1){
							echo '<div class="trplArticles">';
						}
						get_template_part('includes/trplArticlesLoop');
						if($iter == 3){
							echo '</div>';
							get_template_part('includes/bannerD');
						}
					}
					if($iter>=4 && $iter <=6){
						if($iter == 4){
							echo '<div class="hrArticles">';
						}
						get_template_part('includes/hrArticleLoop');
					}
				}
				echo '</div>';
				get_template_part('includes/bannerE');
				get_template_part('includes/paginationStandart');
			}else
				if($count_post>=7 && $count_post <=9){
					while(have_posts()){
						the_post();$iter++;
						if($iter<=3){
							if($iter == 1){
								echo '<div class="trplArticles">';
							}
							get_template_part('includes/trplArticlesLoop');
							if($iter == 3){
								echo '</div>';
								get_template_part('includes/bannerD');
							}
						}
						if($iter>=4 && $iter <=6){
							if($iter == 4){
								echo '<div class="hrArticles">';
							}
							get_template_part('includes/hrArticleLoop');
							if($iter== 6){
								echo '</div>';
								get_template_part('includes/bannerE');
							}
						}
						if($iter>=7 && $iter<=9){
							if($iter == 7){
								echo '<div class="trplArticles">';
							}
							get_template_part('includes/trplArticlesLoop');
						}
					}
					echo '</div>';
					get_template_part('includes/paginationStandart');
				}else
					if($count_post>=10 && $count_post<=12){
						while(have_posts()){
							the_post(); $iter++;
							if($iter<=3){
								if($iter == 1){
									echo '<div class="trplArticles">';
								}
								get_template_part('includes/trplArticlesLoop');
								if($iter == 3){
									echo '</div>';
									get_template_part('includes/bannerD');
								}
							}
							if($iter>=4 && $iter <=6){
								if($iter == 4){
									echo '<div class="hrArticles">';
								}
								get_template_part('includes/hrArticleLoop');
								if($iter== 6){
									echo '</div>';
									get_template_part('includes/bannerE');
								}
							}
							if($iter>=7 && $iter<=9){
								if($iter == 7){
									echo '<div class="trplArticles">';
								}
								get_template_part('includes/trplArticlesLoop');
								if($iter == 9){
									echo '</div>';
								}
							}
							if($iter>=10 && $iter <=12){
								if($iter ==10){
									echo '<div class="hrArticles">';
								}
								get_template_part('includes/hrArticleLoop');
							}
						}
						echo '</div>';
						get_template_part('includes/paginationStandart');
					}
	}else{
		?>
		<h2>Всё пропало! 0_о </h2>
		<?php
		get_template_part('includes/bannerD');
		get_template_part('includes/popular');
		get_template_part('includes/bannerE');
	}
?>

