<?php 
/*
Template name: Архив номеров
Template Post Type: page
*/
get_header();
?>
<div class="table">
			<div class="middle-block">
				<?php get_sidebar();
	$args = array(
        'taxonomy' => 'series',
        'hide_empty' => true,
    );
    $termc = get_terms( $args);
    $all_brands = count($termc);
    $count_page_brand =12; 
    $count_pagenate =ceil(($all_brands/$count_page_brand)); 
    $in_page =(get_query_var('paged')) ? get_query_var('paged') : 1; 
    if($in_page) {
        $offset = ($in_page*$count_page_brand)-$count_page_brand; 
    } else {
        $offset = 0; 
    }
    $tax =array( 'taxonomy'=>'series',
                'orderby' => 'slug',
                'order' => 'desc',
                'hide_empty'=>true,
                'offset'=>$offset,
                'number'=> $count_page_brand
             ); 
    $tax_terms = get_terms($tax);?>

	<main>
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
		<section class="magazine">
	<?php if ($tax_terms) {
    	  foreach ($tax_terms as $tax_term) {
          $image_id = get_term_meta( $tax_term->term_id, '_thumbnail_id', 1 );
          $image_url = wp_get_attachment_image_url( $image_id, 'full' );
   ?>
		<div class="magazine__item">

            <a href="<?php echo get_term_link((int)$tax_term->term_id);?>" class="magazine__anchor">
                <img src="<?php echo $image_url ?>" alt="<?php echo $tax_term->name; ?>" class="magazine__img">
                <p class="magazine__title"><?php echo $tax_term->name; ?></p>
            </a>
        </div>
		
		<?php 
	};
};
?>	
</section>	
	<?php get_template_part('includes/bannerD');?>
	</main>

	<?php get_sidebar('right');?>
	</div>

</div>
<?php 
get_template_part('includes/sector2');?>
</div>
<?php get_footer();?>