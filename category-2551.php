<?php get_header();?>
</div>
	<div class="tinaWell__wrapper">
			<div class="tinaWell">
			</div>
		<div class="tinaWell__description">
				<h1 class="tinaWell__title">
					#dprom_нонстоп
				</h1>
				<span class="tinaWell__desc">
					<?php echo category_description(); ?>
				</span>
				<p class="tinaWell__spec">
					Специальный проект dprom.online. Коронакризис в пролёте
				</p>
			</div>
		</div>
		<div class="wrapper">
		<div class="middle-block">
			<main class="spec">
				<?php if (have_posts()){
					$count = 0;
					?>
					<div class="cWrap">
					<?php
					while(have_posts()){
						the_post();
						?>
						<a href="<?php the_permalink();?>" class="stona">
						<div class="stona__wrap">
							<?php 
									
									if(get_the_post_thumbnail()){
										the_post_thumbnail('large');	
									}else{
										?>
										<img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="">
										<?php
									}
								?>
						</div>
						<div class="stona__info">
							<p class="stona__title">
							<?php 
								$text = get_the_title();
								echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
							?>
							</p>
							<span class="stona__desc"><?php 
											$text = get_the_excerpt();
											echo kama_excerpt(array('maxchar'=>180, 'text'=>$text));
										?></span>
						</div>
					</a>
						<?php
						if($count%2==1){
							if($count==1){
								?>
							</div>
								<?php
								get_template_part('includes/bannerD');
								?>
								<div class="cWrap">
								<?php
							}else{
								?>
								</div>
								<div class="cWrap">
								<?php
							}
						}
						$count++;
					}
					?>
				</div>
					<?php
				}
				get_template_part("includes/bannerE");
				the_posts_pagination(
							$args = array(
						    'show_all'     => false,
						    'end_size'     => 2,
						    'mid_size'     => 2,
						    'prev_next'    => true,
						    'prev_text'    => '«',
						    'next_text'    => '»',
						    'add_args'     => false,
						    'add_fragment' => '',
						    'before_page_number' => '',
						        'after_page_number' => '',
						    'screen_reader_text' => '',
						));
					?>
			</main>
			<?php get_sidebar('functions')?>
		</div>
	</div>
	<?php get_footer();?>