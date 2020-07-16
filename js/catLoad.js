// jQuery(document).ready(function ($) {
//     let $mainBox = $('main');
//
//     $('.widget_categories .cat-item a').click(function (e) {
//     e.preventDefault();
//
//     let link = $(this).attr('href');
//     let title = $(this).text();
//
//     document.title = title + ' | Добывающая промышленность';
//     history.pushState({page_title: title}, title, link);
//
//     ajaxCat(link);
//     });
//
//     window.addEventListener('popstate', function (event) {
//         document.title = event.state.page_title;
//         ajaxCat(location.href);
//     }, false);
//
//     function ajaxCat(link) {
//         $mainBox.animate({opacity: 0.5}, 300)
//         jQuery.post(
//             catLoad.ajaxurl,
//             {
//                 action: 'catLoad',
//                 link: link,
//             },
//             function (responce) {
//                 $mainBox.html(responce);
//                 $mainBox.animate({opacity: 1}, 300)
//             }
//         );
//     }
// });
