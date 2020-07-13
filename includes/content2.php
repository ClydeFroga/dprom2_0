<?php 
$args= array(
	'post_type'=>'functions',
	'post__not_in'=>array(get_the_ID()),
	'posts_per_page'=>9,
	'ignore_sticky_posts'=>1,
);
$q = new WP_Query($args);
if($q->have_posts()){
	?>
	<div class="trplspec">
	<?php
	while($q->have_posts()){
		$q->the_post();
		?>
		<a href="<?php the_permalink();?>" class="trplspec__article">
					<div class="trplspec__imgWrap">
						<?php 
							$imgArr = array('class' =>'trplspec__img');
							if(get_the_post_thumbnail()){
								the_post_thumbnail('large', $imgArr);	
							}else{
							?>
								<img src="https://picsum.photos/600/400?random=8" alt="" class="trplspec__img">
							<?php
								}
							?>
					</div>
					<div class="trplspec__info">
						<h3 class="trplspec__title">
							<?php 
								$text = get_the_title();
								echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
								?>
						</h3>
						<span class="trplspec__date"><?php the_time('d.m.Y');?></span>
						<?php 
									$category = get_the_category();
									if($category){
										$cID = $category[0]->term_id;
										$cName =$category[0]->cat_name;
										switch ($cID) {
											case 1827:
												echo "<span class='trplspec__heading heading_anonce org'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1829:
												echo "<span class='trplspec__heading heading_programm'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1415:
												echo "<span class='trplspec__heading heading_inrerview'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1828:
												echo "<span class='ground__heading heading_view'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1830:
												echo "<span class='trplspec__heading heading_photo'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1831:
												echo "<span class='trplspec__heading heading_report'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											case 1787:
												echo "<span class='trplspec__heading'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
											default:
												echo "<span class='trplspec__heading heading_anonce def'>";
												echo $category[0]->cat_name;
												echo "</span>";
												break;
										}
									}else{
										echo  "<span class='trplspec__heading heading_anonce mr'>Анонс</span>";
									}	
								?>
					</div>
				</a>
		<?php
	}
	?>
	</div>
	<?php
}else{
	echo "<h2> Нет искомых записей</h2>";
}
?>
