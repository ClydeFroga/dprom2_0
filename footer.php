	<footer class="dpFooter">
		<div class="wrapper">
			<div class="interactive">
				<a href="#" class="interactive__sbscr" id="pp">Подписаться</a>
				<div class="interactive__social">
					<span class="interactive__text">Мы в социальных сетях</span>
					<?php wp_nav_menu([
					'theme_location'=>'social',
					'container' => '',
					'menu_class'=>'interactive__list'
				]);?>
				</div>
				<div class="interactive__list">
					<span class="interactive__text">Правила</span>
					<?php wp_nav_menu([
					'theme_location'=>'rules',
					'container' => '',
					'menu_class'=>'interactive__list'
				]);?>
				</div>
			</div>
			<div class="copyright">
				<span class="copyright__title">&copy; ООО "ПромоГрупп Медиа", 2016-<?php echo date('Y');?></span>
				<span class="copyright__text">
					Копирование материалов запрещено.
				</span>
				<span class="copyright__title">Возрастное ограничение 16+</span>
				<span class="copyright__desc">Сетевое издание dprom.online зарегистрировано<br> в Федеральной службе по надзору в сфере связи,<br> информационных технологий и массовых коммуникаций<br> (Роскомнадзор). <br>Свидетельство ЭЛ № ФС 77 - 76725 от 02.09.2019</span>
			</div>
		</div>
		<div class="counter" style="padding-bottom:1.5em;">
			<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=47347473&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/47347473/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0; display: block; margin:0 auto;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="47347473" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->
		</div>
	</footer>
	<?php get_template_part('includes/counters');
	 get_template_part('includes/popupSend');
	 get_template_part('includes/popup');
	 get_template_part('includes/facebookPixel');
	 if(is_category(2419)){
	 	?>
	 	<script src="<?php bloginfo('template_url')?>/js/wow.min.js?>"></script>
			 <script>
			    new WOW().init();
			 </script>

	 	<?php
	 }
	 wp_footer();?>
		<script>svg4everybody();</script>
	</body>
</html>