jQuery(function($){$(window).scroll(function(){var bottomOffset = 2300;var data = {'action': 'loadmoresingle','query': true_posts_single,'page' : current_page_single};if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){$.ajax({url:ajaxurl_single,data:data,type:'POST',beforeSend: function( xhr){$('body').addClass('loading');},success:function(data){if( data ) {$('#true_loadmore_single').before(data);$('body').removeClass('loading');current_page_single++;}}});}});});