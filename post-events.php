<?php 
/*
* Template Name: Мероприятия
*
* @package WordPress

* @since DPROM2_0
*/
global $EM_Event;
the_post('event');
get_header();?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
					<div class="hrArticles">
					<?php echo do_shortcode("[events_list scope='future' limit=12]
						<a href='#_EVENTURL' class='hrArticle'>
							<img src='#_EVENTIMAGEURL' class='hrArticle__img'>
							<div class='hrArticle__info'>
								<h3 class='hrArticle__header'>#_EVENTNAME</h3>
								<span class='hrArticle__text'>#_EVENTEXCERPT{15,...}</span>
								<span class='hrArticle__date'>#_EVENTDATES</span>
							</div>
						</a>
						[/events_list]")?>
					</div>
					<?php 	get_template_part('includes/bannerD');
							get_template_part('includes/popular');
					?>
				<div class="mini-events">
						<?php dynamic_sidebar('events-gif');?>
				</div>
				</main>
				<?php get_sidebar('right');?>
			</div>
			
		</div>
			<?php get_template_part('includes/archive');?>
		<div class="main">
			<?php get_template_part('includes/bannerE');?>
			
		</div>	
<?php get_template_part('includes/sector2');?>
</div>
<?php get_footer();?>