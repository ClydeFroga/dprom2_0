<div class="sidebar-right">
	<div class="foxy">
		<?php get_template_part('includes/foxy1');?>
	</div>				
	<?php dynamic_sidebar('cat-menu');
		$terms = get_terms( [
		'taxonomy' => array('category', 'mainthemes'),
		'hide_empty' =>true,
		'exclude' => array(1, 2370,2419),//2115 - locale, 2419 -global
] );
		if($terms){
			?>
			<div class="widget_categories">
			<h3 class="widgettitle">Темы и разделы</h3>
				<ul>
				<?php
				foreach($terms as $key){
					?>
					
					<li class="cat-item" >

						<a class="<?php $key->term_id;?>" href="<?php echo get_term_link($key->term_id);?>"><?php echo $key->name;?></a>
					</li>
					<?php
				}
				?>
				</ul>
			</div>
			<?php
		}
		
		
	?>
	<div class="foxy">
		<?php get_template_part('includes/foxy2');?>
	</div>

	<?php 
	//dynamic_sidebar('newmagazine');?>				
	<div class="foxy">
		<?php get_template_part('includes/foxy3');?>
	</div>
	<div class="holdIt"></div>
					<script src="//static-login.sendpulse.com/apps/fc3/build/loader.js" sp-form-id="9d2709c14b871af5e433301964d9814d63457d165544554aa569c1ab91193429"></script>
					<style>
						.sidebar-right .sp-form-outer{
							margin-bottom: 1.5em;
						}
					</style>
<?php
					dynamic_sidebar('small-gif-blocks');?>
			
</div>