function arrowDisp() {
	let arrow = document.querySelector('.arrowDown')
	let blc = document.querySelector('.blocks__bot')
	blc.classList.add('more')
	arrow.style.display = 'flex'
}

function arrowDown() {
	let arrow = document.querySelector('.arrowDown')
	let blc = document.querySelector('.blocks__bot')
	let height = blc.clientHeight
	let opa = 1
	let timerId = setInterval(() => {
		if(blc.clientHeight <  blc.scrollHeight) {
			blc.style.maxHeight = height + 'px'
			arrow.style.opacity = opa
			height+=7
			opa -= 0.05
		} else {
			clearInterval(timerId)
			blc.style.maxHeight = 'none'
			arrow.style.display = 'none'
		}
	})
}

jQuery(function($){
	$('#mwr1').click(function(){
		$(this).html('<span>ЗАГРУЖАЮ...</span>'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'mwr1',
			'query': true_posts1,
			'page' : current_page1
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) {
					$('#mwr1').html('<span>ПОДГРУЗИТЬ ЕЩЁ</span>');
					$('.midBlocks').append(data); // вставляем новые посты
					current_page1++; // увеличиваем номер страницы на единицу
					if (current_page1 == max_pages1) $("#mwr1").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#mwr1').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});

jQuery(function($){
	$('#mwr2').click(function(){
		$(this).html('<span>ЗАГРУЖАЮ...</span>'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'mwr2',
			'query': true_posts2,
			'page' : current_page2
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) {
					$('#mwr2').html('<span>ПОДГРУЗИТЬ ЕЩЁ</span>');
					$('.botBlocks').append(data); // вставляем новые посты
					current_page2++; // увеличиваем номер страницы на единицу
					if (current_page2 == max_pages2) $("#mwr2").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#mwr2').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
});