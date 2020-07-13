<?php 
$args= array(
	'orderby'=>'rand',
	'tag_id'=>1649,//for local 71, for global 1649
	'posts_per_page'=>10,
);
$my_query = new WP_Query($args);
if($my_query->have_posts()){
	?>
	<div class="main">
		<div class="sliderAns">
			<h3 class="archive__title"><a href="<?php echo get_term_link(1649);?>">Отраслевые решения</a></h3>
			<div class="sliderAns__wrapper">
				<span class="sliderAns__arrow" id="sliderLeft"></span>
				<ul class="sliderAns__list">
					<?php
						while($my_query->have_posts()){
							$my_query->the_post();
							?>
							<li class="sliderAns__item">
								<a href="<?php the_permalink();?>" class="sliderAns__link">
									<div class="sliderAns__imgWrap">
									<?php 
										$imgArr = array('class' =>'sliderAns__img');
											the_post_thumbnail('small', $imgArr);
									?>
									</div>
									<span class="sliderAns__date">
										<?php 
											$category = get_the_terms('','mainthemes');
											if($category){
												echo $category[0]->name;
											}else{
												echo "Добывающая промышленность";
											}	
										?>
										</span>
									<span class="sliderAns__title">
										<?php $text = get_the_title();
												echo kama_excerpt(array('maxchar'=>80, 'text'=>$text));?>
									</span>
									
								</a>
							</li>
							<?php
						}
					?>
				</ul>
			<span class="sliderAns__arrow" id="sliderRight"></span>
			</div>
		</div>	
	</div>	
	<?php
}
?>