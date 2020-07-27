<?php
/*
Template name: День шахтера
Template Post Type: page
*/
	
 get_header();?>


<div class="middle-block">
	<main class="spec">
		<div class="shaht-row">
			
			<div class="shaht shtr">
				<div class="shaht-slider">
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://igrader.ru/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/01/69_gr_6_19-428x600.jpg.webp" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://igrader.ru/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/01/70_gr_6_19-429x600.jpg.webp" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://igrader.ru/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2020/01/71_gr_6_19-429x600.jpg.webp" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://picsum.photos/480/640/?random=125" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://picsum.photos/480/640/?random=33" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://picsum.photos/480/640/?random=79" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://picsum.photos/480/640/?random=5" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://picsum.photos/480/640/?random=5" alt="">
						</div>
					</div>
					<div class="shaht-slider__slide">
						<div class="shaht-slide fonBack">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, rerum eaque possimus libero quas. Animi quis deserunt minus earum aspernatur, debitis, ipsum dolores inventore corrupti dignissimos adipisci architecto officiis eligendi dolorum similique tempore est, alias facilis distinctio beatae ullam incidunt veniam! </p>
							<img src="https://picsum.photos/480/640/?random=5" alt="">
						</div>
					</div>
				</div>
				<script>
            $('.shaht-slider').slick({
                arrows:false,
                dots:true,
                autoplay:true,
                autoplaySpeed:2000,
                infinity:true,
                slidesToShow:1,
                draggable:true,
                focusOnSelect: true,
                swipeToSlide: true,
                accessibility: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            dots:true,
                        }
                    },
                ]
            });
				</script>
			</div>
   
			<div class="shaht-adv">
				<div class="">
					<img src="https://picsum.photos/250/375/?random=5" alt="">
                    <!--                    --><?php //get_template_part('includes/foxy1'); ?>
				</div>
			</div>
		</div>
		
		<div class="shaht-row">
			<?php
			$post = get_post(22068);
			?>
			<div class="shaht">
				<div class="shaht-description">
					<h1><?php echo $post->post_title ?></h1>
					<p><?php echo $post->post_content ?></p>
				</div>
			</div>
		
		</div>
		
		<div class="shaht-row">
			
			<div class="shaht">
				<div class="hr-shaht">
					<a href="#"><img src="https://picsum.photos/1000/150/?random=5" alt=""></a>
				</div>
			</div>
		
		</div>
        
        <div class="shaht-row">

            <div class="shaht">
                <div class="shaht-tile">
                    <?php
                    $args = array(
                        'tag_id' => 129,
                        'posts_per_page'=>6,
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()){
                    while($query->have_posts()){
                    $query->the_post();
                    ?>
                    
                    <article class="shaht-post">
                        <div class="shaht-post__img">
                            <a href="<?php the_permalink(); ?>">
                               <?php the_post_thumbnail('large'); ?>
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
                    <?php }
                    } ?>
                    
                  <?php if (  $query->max_num_pages > 1 ) : ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize($query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 2; ?>;
                        var max_pages = '<?php echo $query->max_num_pages; ?>';
                    </script>
                    <div class="anonce" id="mining">Больше статей</div>
                  <?php endif; ?>
                </div>
                
            </div>
            <?php wp_reset_query(); ?>
            <div class="shaht-adv">
                
                <div class="">
                    <img src="https://picsum.photos/250/375/?random=5" alt="">
                </div>

            </div>
        </div>

        <div class="shaht-row">

            <div class="shaht">
                <div class="hrBnr">
                    <a href="#"><img src="https://picsum.photos/728/90/?random=1" alt=""></a>
                </div>
            </div>

        </div>

        <div class="shaht-row">
            <div class="shaht">
                <div class="shaht-tile">
                    <?php
                    $args = array(
                    'tag_id' => 77,
                    'posts_per_page'=>6,
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()){
                    while($query->have_posts()){
                    $query->the_post();
                    ?>
                    <a href="<?php the_permalink() ?>" class="shaht-tile-nim">
                        <div>
                            <h3><?php the_title() ?></h3>
                            <p><?php $text = get_the_excerpt();
                            echo kama_excerpt(array('maxchar'=>60, 'text'=>$text)); ?></p>
                        </div>
                    </a>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="shaht-adv">
                <div class="">
                    <img src="https://picsum.photos/250/375/?random=5" alt="">
                </div>
            </div>
          <?php wp_reset_query(); ?>
        </div>

        <div class="shaht-row">

            <div class="shaht">
                <div class="shaht-tile">
                    <?php
                    $args = array(
                        'tag_id' => 891,
                        'posts_per_page'=>6,
                    );
                    $query = new WP_Query($args);
                    if($query->have_posts()){
                    while($query->have_posts()){
                    $query->the_post();
                    ?>
                    
                    <article class="shaht-post">
                        <div class="shaht-post__img">
                            <a href="<?php the_permalink(); ?>">
                               <?php the_post_thumbnail('large'); ?>
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
                        <a href="#" class="shaht-post__title">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <p class="shaht-post__excerpt">
                          <?php $text = get_the_excerpt();
                          echo kama_excerpt(array('maxchar'=>120, 'text'=>$text)); ?></p>
                    </article>
                    <?php }
                    } ?>

                    <?php if (  $query->max_num_pages > 1 ) : ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts2 = '<?php echo serialize($query->query_vars); ?>';
                        var current_page2 = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 2; ?>;
                        var max_pages2 = '<?php echo $query->max_num_pages; ?>';
                    </script>
                    <div class="anonce" id="mining2">Читать ещё</div>
                  <?php endif; ?>
                </div>
                
            </div>
            <?php wp_reset_query(); ?>
            
            <div class="shaht-adv">
                <div class="bottomSidebarRight" style="padding-top: 0;">
                    <div class="widget_media_image">
                        <a href="#">
                            <img src="https://picsum.photos/250/125/?random=19" alt="">
                        </a>
                    </div>
                    <div class="widget_media_image">
                        <a href="#">
                            <img src="https://picsum.photos/250/125/?random=111" alt="">
                        </a>
                    </div>
                    <div class="widget_media_image">
                        <a href="#">
                            <img src="https://picsum.photos/250/125/?random=191" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</main>
</div>
</div>

<?php get_footer(); ?>




