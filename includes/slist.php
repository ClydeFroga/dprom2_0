<?php 
$args = array(
	'post__not_in'=> array($id),
	'numberposts' =>5,
	'fields' => 'ids',
	'tag_id'=>2140,
);
$myAnswer = get_posts($args);
if ($myAnswer){
	?>
<section class="slist">
	<p class="slist__desc">Посмотрите другие материалы проекта "День шахтёра":</p>
		<ul class="slist__ls">
	<?php 
	$rnd_posts = array_rand($myAnswer, 3);
	foreach ($rnd_posts as $key) {
	 	$my_id = (int)$myAnswer[$key];
	 	$my_post = get_post($my_id);?>
			<li class="slist__link"><a href="<?php the_permalink($my_post->ID); ?>">
				<?php $text = get_the_title($my_post->ID); echo $text;?>
			</a></li>
		<?php 
	}?>
		</ul>
</section>	
<?php }; ?>