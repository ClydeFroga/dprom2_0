<?php get_header();
?>
<div class="table">
			<div class="middle-block">
				<main class="spec">
					<div class="breadcrumbs">
						<span><a href="<?php home_url();?>" class="breadcrumbs__link">Главная</a></span>
						<span class="breadcrumbs__separator"></span>
						<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a class="breadcrumbs__link" href="https://dprom.online/ugol-mining/" itemprop="item">
							<span itemprop="name">Уголь и Майнинг 2019</span>
						</a>
						<meta itemprop="position" content="2" /></span>
						<span class="breadcrumbs__separator"></span>	
						<span class="breadcrumbs__current"><?php echo single_cat_title();?></span>
					</div>
					<?php 
					
					if(have_posts()){
						?>
						<div class="hrArticles">
						<?php
						while(have_posts()){
							the_post();
							?>
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
											echo kama_excerpt(array('maxchar'=>190, 'text'=>$text));
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
						}?>
						</div>
					<?php
				};
					wp_reset_query();
					get_template_part('includes/bannerE');
					get_template_part('includes/content2');
					?>

				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>		
</div>
<?php get_footer();?>