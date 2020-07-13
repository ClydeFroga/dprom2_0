
									<a href="<?php the_permalink(); ?>" class="loadNews__item">
										<div class="loadNews__imgWrap">
											<?php 
											$imgArr = array('class' =>'loadNews__img');
											the_post_thumbnail('large', $imgArr);
											?>
										</div>
										<span class="loadNews__title">
											<?php 
												$text = get_the_title();
												echo kama_excerpt(array('maxchar'=>60, 'text'=>$text));
											?>
										</span>
									</a>
