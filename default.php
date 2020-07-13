<?php get_header();?>
<div class="table">
      <div class="middle-block">
        <?php get_sidebar();?>
        <main>
          <?php wp_list_cats('hierarchical=0&optioncount=1&show_count=1'); ?>
        </main>
        <?php get_sidebar('right');?>
      </div>
    </div>

      <?php get_template_part('includes/archive');?>
      
<?php get_template_part('includes/sector2');?>
</div>
<?php get_footer();?>