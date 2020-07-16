<?php get_header();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();?>
				<main>
                    <?php get_template_part('includes/taxonomyAjax');?>
				</main>
				<?php get_sidebar('right');?>
			</div>
		</div>		
<?php get_template_part('includes/sector2');?>
</div>
<?php get_footer();?>