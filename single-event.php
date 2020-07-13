<?php get_header();
the_post();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
				<article class="singleArticle">
						<header class="singleArticle__title">
							<div class="metaData">
								<span class="metaData__date"><?php the_time('d.m.Y')?></span>
							</div>
						</header>
						<h1>
							<?php the_title();?>
						</h1>
						<div class="eventImg">
							<?php the_post_thumbnail();?>
						</div>
						<p>
       						<?php echo do_shortcode("[event post_id=' ' ]
				                <b>Дата:</b> #_EVENTDATES
				                <br>
				                <b>Время:</b> #_EVENTTIMES
				                <br>
				                <b>Адрес:</b> #_LOCATIONADDRESS  #_LOCATIONTOWN
				                <br>
				                #_LOCATIONSTATE

				            [/event]");?>
				        </p>
						 <?php echo do_shortcode("[event post_id=' ' ] #_EVENTNOTES  <br>
				                #_LOCATIONMAP[/event]")?>
						
						<footer class="singleArticle__ft">
							<?php get_template_part('includes/sharing');?>
						</footer>
					</article>
					<?php 	get_template_part('includes/comments');
							get_template_part('includes/bannerD');
					?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>

			<?php get_template_part('includes/archive');?>
		<div class="main">
			<div class="mini-events">
				<?php dynamic_sidebar('events-gif');?>
			</div>
		</div>
<?php get_template_part('includes/sector2');?>
</div>
<?php get_footer();?>