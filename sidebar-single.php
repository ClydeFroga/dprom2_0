<div class="sidebar-left">
	<?php global $EM_Event;?>
					<div class="events">
						<h3 class="events__header">Мероприятия</h3>
						<table class="events__table">
							<?php echo do_shortcode("[events_list scope='future' limit=5]
								<tr class='events__row'>
								<td class='events__date'>#_EVENTDATES</td>
								<td class='events__name'>
									#_EVENTLINK
								</td>
							</tr>
							[/events_list]");?>
								</table>
					</div>
					<?php get_template_part('includes/newMagazine');
						get_template_part('includes/sidebarNewsSingle');
					?>
				</div>