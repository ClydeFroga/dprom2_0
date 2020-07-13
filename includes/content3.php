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
					</div>
				</a>