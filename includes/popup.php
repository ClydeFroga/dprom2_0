<?php 
/*
Ныне нафиг никому ненужная конструкция для всплывающей формы. 
Из правого сайдбара вырезается форма, накладывается на всплывающую подложку и выводится. JavaScript в комментах в everyWhere.js
Вместо этой формы проставлена всплывающая форма от SendPulse.
*/
?>
<div class="popupWrapper"></div>
<div class="popupWrapper__form" id="ppForm">
			<span class="popupWrapper__close" id="ppCl">
				<svg class="popupWrapper__icon">
					<use xlink:href="<?php bloginfo('template_url');?>/svgsprite.svg#close"></use>
				</svg>
			</span>
	</div>