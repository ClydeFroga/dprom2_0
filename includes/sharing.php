<div class="sharing">
								<a href="http://vk.com/share.php?url=<?php the_permalink();?>&title=<?php the_title();?>&image=<?php $thumb_id = get_post_thumbnail_id(); $thumb_cover_url = wp_get_attachment_image_src($thumb_id, 'og-image', true); echo $thumb_cover_url[0];?>&noparse=true" target="_blank" onclick="return Share.me(this);" class="sharing__item vk" target="_blanc">
									<svg>
										<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#vk_logo"></use>
									</svg>
								</a>
								<a  href="http://www.facebook.com/sharer/sharer.php?s=100&p%5Btitle%5D=<?php the_title();?>&p%5Bsummary%5D=<?php the_excerpt();?>&p%5Burl%5D=<?php the_permalink();?>&p%5Bimages%5D%5B0%5D=<?php $thumb_id = get_post_thumbnail_id(); $thumb_cover_url = wp_get_attachment_image_src($thumb_id, 'og-image', true); echo $thumb_cover_url[0];?>" target="_blank" onclick="return Share.me(this);" class="sharing__item fb">
									<svg>
										<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#fb_logo">
										</use>
									</svg>
								</a>
								<a  href="https://connect.ok.ru/dk?st.cmd=WidgetSharePreview&st.shareUrl=<?php the_permalink(); ?>" onclick="window.open(this.href, 'Опубликовать ссылку в Одноклассники', 'width=800,height=300'); return false" target="_blank" onclick="return Share.me(this);" class="sharing__item od">
									<svg>
										<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#classmates_logo"></use>
									</svg>
								</a>
								<a href="https://getpocket.com/save?url=<?php the_permalink();?>&title=<?php the_title();?>" target="_blanc" class="sharing__item pocket">
									<svg>
										<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#pocket_logo"></use>
									</svg>
								</a>
								<a href="https://telegram.me/share/url?url=<?php the_permalink();?>&text=<?php the_title();?>" rel="nofollow" class="sharing__item telegram">
									<svg>
										<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#telegram_logo"></use>
									</svg>
								</a>
								<a href="viber://forward?text=<?php the_title();?>" class="sharing__item viber">
									<svg>
										<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#viber_logo"></use>
									</svg>
								</a>
								<a href="https://wa.me/?text=<?php the_title(); the_permalink();?>" class="sharing__item wApp">
									<svg>
										<use xlink:href="<?php bloginfo('template_url')?>/svgsprite.svg#wApp_logo"></use>
									</svg>
								</a>
							</div>