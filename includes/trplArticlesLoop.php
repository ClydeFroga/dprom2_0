<a href="<?php the_permalink();?>" class="trplArticles__rightBlock">
	<?php 
		$imgArr = array('class' =>'trplArticles__img');
		if(get_the_post_thumbnail()){
			the_post_thumbnail('full', $imgArr);	
		}else{?>
			<img src="<?php bloginfo('template_url')?>/img/placeholder2.jpg?>" alt="" class="trplArticles____img">
			<?php
			}?>
			<div class="trplArticles__info">
				<div>
					<?php 
					$category = get_the_terms('','mainthemes');
					if(!$category){
						$category = get_the_category();
						}
					?>
					<span class="trplArticles__heading" 
					onclick="event.preventDefault();window.location='<?php echo get_term_link($category[0]->term_id); ?>'">
					<?php 
					echo $category[0]->name;?>	
					</span>
				</div>
				<h2 class="trplArticles__header">
					<?php $text = get_the_title();
							echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));?>
				</h2>
			</div>
</a>