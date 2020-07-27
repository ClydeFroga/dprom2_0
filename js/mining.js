jQuery(function($){
    $('#mining').click(function(){
        $(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
        var data = {
            'action': 'mining',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl, // обработчик
            data:data, // данные
            type:'POST', // тип запроса
            success:function(data){
                if( data ) {
                    $('#mining').text('Загрузить ещё').before(data); // вставляем новые посты
                    current_page++; // увеличиваем номер страницы на единицу
                    if (current_page == max_pages) $("#mining").remove(); // если последняя страница, удаляем кнопку
                } else {
                    $('#mining').remove(); // если мы дошли до последней страницы постов, скроем кнопку
                }
            }
        });
    });
});

jQuery(function($){
    $('#mining2').click(function(){
        $(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
        var data = {
            'action': 'mining',
            'query': true_posts2,
            'page' : current_page2
        };
        $.ajax({
            url:ajaxurl, // обработчик
            data:data, // данные
            type:'POST', // тип запроса
            success:function(data){
                if( data ) {
                    $('#mining2').text('Загрузить ещё').before(data); // вставляем новые посты
                    current_page2++; // увеличиваем номер страницы на единицу
                    if (current_page2 == max_pages2) $("#mining2").remove(); // если последняя страница, удаляем кнопку
                } else {
                    $('#mining2').remove(); // если мы дошли до последней страницы постов, скроем кнопку
                }
            }
        });
    });
});