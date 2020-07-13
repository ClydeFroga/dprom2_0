 <?php get_header();
?>
</div>
<div class="wrapper">
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
<?php
	$args = array(
	'posts_per_page'=> 8,
	'category__not_in' => array(1,2,2419,2551)
);
	$query = new WP_Query($args);
	$homie = 0; 
	if($query->have_posts()){
		while($query->have_posts() && $homie<8){
				$query->the_post();
				if($homie == 0){
					?>
					<div class="dblArcticles">
						<a href="<?php the_permalink();?>" class="dblArcticles__leftBlock">
                            <div class="dblArcticles__img">
                                <?php
                                    $imgArr = array('class' =>'dblArcticles__lbImg');
                                    if(get_the_post_thumbnail()){
                                        the_post_thumbnail('large', $imgArr);
                                    }else{
                                        ?>
                                    <img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="dblArcticles__lbImg">
                                        <?php
                                    }

                                ?>
                                <span class="dblArcticles__lbHeading"  onclick="event.preventDefault();window.location='<?php $category = get_the_category();
																	$idC = $category[0]->cat_ID;
																	echo get_category_link($idC);
																?>'">
                                                <?php
																									echo $category[0]->cat_name;?>
                                    </span>
                                <div class="dblArcticles__lbInfo">
                                    <h2 class="dblArcticles__lbHeader"><?php the_title();?></h2>
                                    <p class="dblArcticles__lbText">
                                        <?php
                                            $text = get_the_excerpt();
                                            echo kama_excerpt(array('maxchar'=>120, 'text'=>$text));
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="dblArcticles__lbInfo576">
                                <h2 class="dblArcticles__lbHeader"><?php the_title();?></h2>
                                <p class="dblArcticles__lbText">
																	<?php
																		$text = get_the_excerpt();
																		echo kama_excerpt(array('maxchar'=>120, 'text'=>$text));
																	?>
                                </p>
                            </div>
						</a>
					<?php
					$homie++;
					continue;
				};
				if($homie == 1){
					?>
					<a href="<?php the_permalink();?>" class="dblArcticles__rightBlock">
                        <div class="dblArcticles__rightTopBlock">
													<?php
														$imgArr = array('class' =>'dblArcticles__rbImg');
														if(get_the_post_thumbnail()){
															the_post_thumbnail('large', $imgArr);
														}else{
															?>
                                <img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="dblArcticles__rbImg">
															<?php
														}

													?>
                            <span class="dblArcticles__rbHeading"  onclick="event.preventDefault();window.location='<?php $category = get_the_category();
															$idC = $category[0]->cat_ID;
															echo get_category_link($idC);
														?>'">
									<?php echo $category[0]->cat_name;?>
								</span>
                        </div>

						<div class="dblArcticles__rbInfo">
							<h2 class="dblArcticles__rbHeader"><?php the_title();?></h2>
							<p class="dblArcticles__rbText">
							<?php 
									$text = get_the_excerpt();
									echo kama_excerpt(array('maxchar'=>120, 'text'=>$text));
								?>
							</p>
						</div>
					</a>
				</div>
					<?php
				$homie++;
				continue;
			};
			if($homie >= 2 && $homie<5){
					if($homie == 2){
						?>
						<div class="trplArticlesHome">
						<?php
					}
					?>
							<a href="<?php the_permalink();?>" class="trplArticlesHome__rightBlock">
                                <div class="trplArticlesHome__imgBlock">
                                    <div class="trplArticlesHome__imgWrap">
                                      <?php
                                        $imgArr = array('class' =>'trplArticlesHome__img');
                                        if(get_the_post_thumbnail()){
                                            the_post_thumbnail('full', $imgArr);
                                        }else{
                                            ?>
                                            <img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="trplArticlesHome__img">
                                            <?php
                                        }
                                    ?>
                                    </div>
                                    </div>

                                <span class="trplArticlesHome__heading"  onclick="event.preventDefault();window.location='<?php $category = get_the_category();
																	$idC = $category[0]->cat_ID;
																	echo get_category_link($idC);
																?>'">
											<?php echo $category[0]->cat_name;?>
										</span>

									<h2 class="trplArticlesHome__header">
										<?php
											$text = get_the_title();
											echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
										?>
									</h2>

							</a>
					<?php
				$homie++;
				continue;
				}
				?>
			</div>
			<div class="hrArticles">
	<?php
	if($homie>=5 && $homie<8){
		if($homie==5){
			get_template_part('includes/bannerD');
		?>
			
		<?php }; ?>
		<a href="<?php the_permalink();?>" class="hrArticle">
				<?php 
					$imgArr = array('class' =>'hrArticle__img');
					if(get_the_post_thumbnail()){
						the_post_thumbnail('full', $imgArr);	
					}else{
					?>
					<img src="<?php bloginfo('template_url')?>/img/placeholder.jpg?>" alt="" class="hrArticle__img">
					<?php
						}
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
							echo kama_excerpt(array('maxchar'=>150, 'text'=>$text));
						?>
					</span>
					<span class="hrArticle__heading"  onclick="event.preventDefault();window.location='<?php $category = get_the_category();
												$idC = $category[0]->cat_ID;
												echo get_category_link($idC);
											?>'">
						<?php echo $category[0]->cat_name;?>
					</span>
				</div>
		</a>
		<?php
		$homie++;
		continue;
	};
	?>
	</div>
	<?php
};
};
wp_reset_query();
?>
</div>
<?php
get_template_part('includes/bannerE');
get_template_part('includes/news');
?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>
		<?php get_template_part('includes/archive');
			get_template_part('includes/sector2');?>
	</div>
<?php get_footer();?>