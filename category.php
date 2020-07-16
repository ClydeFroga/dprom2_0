<?php get_header();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>

                  <?php get_template_part('includes/categoryAjax');?>

                </main>
				<?php get_sidebar('right');?>
			</div>
		</div>		
		<?php get_template_part('includes/popularSector2');?>

</div>
<?php get_footer();?>