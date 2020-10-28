jQuery(function($){
	$('#anonce').click(function(){
		$(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#anonce').text('Загрузить ещё').before(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#anonce").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#anonce').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});
	
});
