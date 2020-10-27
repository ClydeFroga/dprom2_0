<?php 
/*_____ADD MAinStyles___*/
function my_styles(){
	//wp_enqueue_style('fontStyle',  get_template_directory_uri().'/fontStyle.css', null,null);
  wp_enqueue_script( 'svgScript', get_template_directory_uri().'/js/svg4everybody.js', null,null,true);
  //wp_enqueue_script('jquery-CDN','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array(),false,true);
  wp_enqueue_script( 'everyWhere', get_template_directory_uri().'/js/everyWhere.js',array(),null,true);
}
add_action('wp_enqueue_scripts', 'my_styles');
/*____END MAinStyles____*/
/*______ADD myScripts_______*/
  function my_scripts(){
    if(is_front_page()){
      wp_enqueue_script( 'burnScript', get_template_directory_uri().'/js/unitMoving.js',array(), null, true);
      wp_enqueue_script( 'newsScript', get_template_directory_uri().'/js/news.js',array(), null, true);
  }
  if(is_search()){
   wp_enqueue_script( 'newsScript', get_template_directory_uri().'/js/news.js',array(), null, true); 
  }
  if(is_single()){
   wp_enqueue_script( 'shareScript', get_template_directory_uri().'/js/share.js',null,null, true); 
   wp_enqueue_script( 'singleScript', get_template_directory_uri().'/js/single.js',array(),null, true);
  }
}
add_action('wp_enqueue_scripts', 'my_scripts');

/*______End myScripts_______*/
/*___________START AJAX LOAD_______________*/

add_action('wp_ajax_mwr1', 'load_mwr1');
add_action('wp_ajax_nopriv_mwr1', 'load_mwr1');

function load_mwr1() {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	$args['posts_per_page'] = 8;
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();
 
			get_template_part( 'includes/mwr1', get_post_format() );
 
		endwhile;
 
	endif;
	die();
}

add_action('wp_ajax_mwr2', 'load_mwr2');
add_action('wp_ajax_nopriv_mwr2', 'load_mwr2');

function load_mwr2() {
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	$args['posts_per_page'] = 4;
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();
 
			get_template_part( 'includes/mwr2', get_post_format() );
 
		endwhile;
 
	endif;
	die();
}





add_action('wp_ajax_mining', 'load_mining');
add_action('wp_ajax_nopriv_mining', 'load_mining');

function load_mining(){
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // следующая страница
	$args['post_status'] = 'publish';
	$args['posts_per_page'] = 3;
 
	// обычно лучше использовать WP_Query, но не здесь
	query_posts( $args );
	// если посты есть
	if( have_posts() ) :
 
		// запускаем цикл
		while( have_posts() ): the_post();
 
			get_template_part( 'includes/mining', get_post_format() );
 
		endwhile;
 
	endif;
	die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function true_load_posts(){
  $args = unserialize( stripslashes( $_POST['query'] ) );
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  $args['posts_per_page'] =6;
  $args['tax'] ='umr';
  $mild = 0;
  // обычно лучше использовать WP_Query, но не здесь
  query_posts( $args );
  // если посты есть
  if( have_posts() ) :
 ?>
<div class="trplspec">
 <?php
    // запускаем цикл
    while( have_posts() ): the_post();
  
      get_template_part( 'includes/content', get_post_format() );

    $mild++;
    endwhile;
 ?>
</div>
 <?php
  endif;
  die();
}

  add_action('wp_ajax_brands', 'wf_load_posts');
  add_action('wp_ajax_nopriv_brands','wf_load_posts');
function wf_load_posts(){
  $wf_args = unserialize( stripslashes( $_POST['omg'] ) );
  $wf_args['paged'] = $_POST['page'] + 1; // следующая страница
  $wf_args['post_status'] = 'publish';
  // обычно лучше использовать WP_Query, но не здесь
  query_posts( $wf_args );
  // если посты есть
  if( have_posts() ) :
    ?>
    <div class="trplspec">
    <?php
    // запускаем цикл
    while( have_posts() ): the_post();
 
      get_template_part( 'includes/content', get_post_format() );
 
    endwhile;
 ?>
 </div>
 <?php
  endif;
  die();
}

function true_load_news(){
  $args = unserialize( stripslashes( $_POST['query'] ) );
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  // обычно лучше использовать WP_Query, но не здесь
  query_posts( $args );
  // если посты есть
  if( have_posts() ) :
    ?>
    <div class="trplspec">
    <?php
    while( have_posts() ): the_post();
      get_template_part( 'includes/content3', get_post_format() );
    endwhile;
    ?>
  </div>
    <?php
  endif;
  die();
}
add_action('wp_ajax_loadnews', 'true_load_news');
add_action('wp_ajax_nopriv_loadnews', 'true_load_news');


function true_load_posts_single(){
 
  $args = unserialize( stripslashes( $_POST['query'] ) );
  $args['paged'] = $_POST['page'] + 1; // следующая страница
  $args['post_status'] = 'publish';
  // обычно лучше использовать WP_Query, но не здесь
  query_posts( $args );
  // если посты есть
  if( have_posts() ) :
    ?>
    <div class="loadNews">
    <?php
    while( have_posts() ): the_post();
 
      get_template_part( 'includes/content4', get_post_format() );
 
    endwhile;
 ?>
 <div>
 <?php
  endif;
  die();
}
 
 
add_action('wp_ajax_loadmoresingle', 'true_load_posts_single');
add_action('wp_ajax_nopriv_loadmoresingle', 'true_load_posts_single');


/*___________END AJAX LOAD_______________*/

/*________ADD ThemeSupports_______*/
add_theme_support('widgets');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
/*________END ThemeSupports_______*/

/*________Start MENUS_____________*/
function themeMenuRegister(){
	register_nav_menu('topMenuDark', 'Верхнее тёмное меню для размещения максимум трёх статей');
	register_nav_menu('topLightMenu', 'Верхнее светлое маленькое меню. До четырёх разделов.');
	register_nav_menu('topCategoryMenu', 'Скрытое меню для мобилок');
	register_nav_menu('social', 'Социальные сети. Footer');
	register_nav_menu('rules', 'Правила, пользовательские соглашения');
}
add_action('after_setup_theme', 'themeMenuRegister');
/*________END MENUS_____________*/

/*________Start Sidebars_________*/
function register_my_widgets(){
  register_sidebar(array(
    'name'=>__('Верхняя панель справа под gif ', 'dprom2_0'),
    'id' => 'small-gif-blocks',
    'description' => __('Блоки размером 250*125 справа. Те, которые, по идее должны кануть в небытие, вместо которых будет третий баннер, который E','dprom2_0'),
    'before_widget'=> '<div class="widget %2$s" id="%1$s">',
    'after_widget'=>'</div>',
    'before_title'  => '<h3 class="widgettitle sidebar_title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'=>__('Меню категорий', 'dprom2_0'),
    'id' => 'cat-menu',
    'description' => __('меню категорий, один виджет категорий','dprom2_0'),
    'before_widget'=> '<div class="widget %2$s" id="%1$s">',
    'after_widget'=>'</div>',
    'before_title'  => '<h3 class="widgettitle sidebar_title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'=>__('Панель миниатюр под выставки', 'dprom2_0'),
    'id' => 'events-gif',
    'description' => __('Панель под маленькие блоки 100*100. На странице выставок и отдельной выставки','dprom2_0'),
    'before_widget'=> '<div class="widget %2$s" id="%1$s">',
    'after_widget'=>'</div>',
    'before_title'  => '<h3 class="widgettitle sidebar_title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'=>__('Панель справа нижняя', 'dprom2_0'),
    'id' => 'bottom-f-banners',
    'description' => __('Блоки с картинками 250*125, F-1, F-2','dprom2_0'),
    'before_widget'=> '<div class="widget %2$s" id="%1$s">',
    'after_widget'=>'</div>',
    'before_title'  => '<h3 class="widgettitle sidebar_title">',
    'after_title'   => '</h3>'
  ));
  register_sidebar(array(
    'name'=>__('Панель под новый журнал', 'dprom2_0'),
    'id' => 'newmagazine',
    'description' => __('html-виджет для новых журналов','dprom2_0'),
    'before_widget'=> '<div class="newMagazine %2$s" id="%1$s">',
    'after_widget'=>'</div>',
    'before_title'  => '<h3 class="widgettitle sidebar_title">',
    'after_title'   => '</h3>'
  ));
  
};
add_action( 'widgets_init', 'register_my_widgets' );
/*________END Sidebars___________*/


/*________Start KAmaExcerpt_______*/
function kama_excerpt( $args = '' ){
	global $post;
	if( is_string($args) )
		parse_str( $args, $args );
	$rg = (object) array_merge( array(
		'maxchar'   => 350, 
		'text'      => '', 
		'autop'     => true, 
		'save_tags' => '',   
		'more_text' => 'Читать дальше...', // 
	), $args );
	$rg = apply_filters( 'kama_excerpt_args', $rg );
	if( ! $rg->text )
		$rg->text = $post->post_excerpt ?: $post->post_content;
	$text = $rg->text;
	$text = preg_replace( '~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text ); 
	$text = preg_replace( '~\[/?[^\]]*\](?!\()~', '', $text ); 
	$text = trim( $text );
	if( strpos( $text, '<!--more-->') ){
		preg_match('/(.*)<!--more-->/s', $text, $mm );

		$text = trim( $mm[1] );

		$text_append = ' <a href="'. get_permalink( $post ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
	}
	else {
		$text = trim( strip_tags($text, $rg->save_tags) );

		if( mb_strlen($text) > $rg->maxchar ){
			$text = mb_substr( $text, 0, $rg->maxchar );
			$text = preg_replace( '~(.*)\s[^\s]*$~s', '\\1 ...', $text ); 
		}
	}
	if( $rg->autop ){
		$text = preg_replace(
			array("/\r/", "/\n{2,}/", "/\n/",   '~</p><br ?/?>~'),
			array('',     '</p><p>',  '<br />', '</p>'),
			$text
		);
	}
	$text = apply_filters( 'kama_excerpt', $text, $rg );
	if( isset($text_append) )
		$text .= $text_append;
	return ( $rg->autop && $text ) ? "$text" : $text;
}
/*________End KAmaExcerpt_______*/
/*_______Start BreadCrumbs______*/
/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2019.03.03
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = '<span class="breadcrumbs__separator">  </span>'; // разделитель между "крошками"
  $before = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"

  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $show_last_sep = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
  $link .= '<meta itemprop="position" content="%3$s" />';
  $link .= '</span>';
  $parent_id = ( $post ) ? $post->post_parent : '';
  $home_link = sprintf( $link, $home_url, $text['home'], 1 );

  if ( is_home() || is_front_page() ) {

    if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

  } else {

    $position = 0;

    echo $wrap_before;

    if ( $show_home_link ) {
      $position += 1;
      echo $home_link;
    }

    if ( is_category() ) {
      $parents = get_ancestors( get_query_var('cat'), 'category' );
      foreach ( array_reverse( $parents ) as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $cat = get_query_var('cat');
        echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_search() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $show_home_link ) echo $sep;
        echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['search'], get_search_query() ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_year() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_time('Y') . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_month() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_day() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
      $position += 1;
      echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_single() && ! is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $position += 1;
        $post_type = get_post_type_object( get_post_type() );
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } else {
        $cat = get_the_category(); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'cpage' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
          echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
        } else {
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        }
      }

    } elseif ( is_post_type_archive() ) {
      $post_type = get_post_type_object( get_post_type() );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . $post_type->label . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_attachment() ) {
      $parent = get_post( $parent_id );
      $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
      $parents = get_ancestors( $catID, 'category' );
      $parents = array_reverse( $parents );
      $parents[] = $catID;
      foreach ( $parents as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      $position += 1;
      echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_page() && ! $parent_id ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_title() . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_page() && $parent_id ) {
      $parents = get_post_ancestors( get_the_ID() );
      foreach ( array_reverse( $parents ) as $pageID ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
      }
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_tag() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $tagID = get_query_var( 'tag_id' );
        echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_author() ) {
      $author = get_userdata( get_query_var( 'author' ) );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_404() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . $text['404'] . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( has_post_format() && ! is_singular() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
}
/*_______End BreadCrumbs________*/
/*_______Start TaxonomyTheme____*/
function special_tax() {
  register_taxonomy('specials',
    array('post','functions'),
    array(
      'hierarchical' => true,
      'labels' => array(
        'name' => 'Спецпроекты',
        'singular_name' => 'Спецпроект',
        'search_items' =>  'Найти спецпроект',
        'popular_items' => 'Популярные спецпроекты',
        'all_items' => 'Все спецпроекты',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Редактировать спецпроект',
        'update_item' => 'Обновить спецпроект',
        'add_new_item' => 'Добавить новый спецпроект',
        'new_item_name' => 'Название нового спецпроект',
        'separate_items_with_commas' => 'Разделяйте спецпроекты запятыми',
        'add_or_remove_items' => 'Добавить или удалить спецпроект',
        'choose_from_most_used' => 'Выбрать из наиболее часто используемых спецпроектов',
        'menu_name' => 'Спецпроекты'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'show_tagcloud' => true,
      'query_var' => true,
      'rewrite' =>true,
      'has_archive'=>'themes',
      'show_in_rest' => true,
      'rest_base' => 'specials',
    )
  );
}
add_action( 'init', 'special_tax', 0 );

add_action( 'init', 'postForMWR' );
function postForMWR(){
	register_post_type( 'project', [
		'label'  => null,
		'labels' => [
			'name'               => 'Записи спецпроектов', // основное название для типа записи
			'singular_name'      => 'Запись спецпроекта', // название для одной записи этого типа
			'add_new'            => 'Добавить запись', // для добавления новой записи
			'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать запись', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => 'Запись', // для родителей (у древовидных типов)
			'menu_name'          => 'Записи спецпроектов', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['specials', 'category', 'post_tag', 'mainthemes'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}


function add_new_taxonomies() {  
  register_taxonomy('mainthemes',
    array('post','functions'),
    array(
      'hierarchical' => true,
      'labels' => array(
        'name' => 'Темы',
        'singular_name' => 'Тема',
        'search_items' =>  'Найти тему',
        'popular_items' => 'Популярные темы',
        'all_items' => 'Все темы',
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => 'Редактировать тему', 
        'update_item' => 'Обновить тему',
        'add_new_item' => 'Добавить новую тему',
        'new_item_name' => 'Название новой темы',
        'separate_items_with_commas' => 'Разделяйте темы запятыми',
        'add_or_remove_items' => 'Добавить или удалить тему',
        'choose_from_most_used' => 'Выбрать из наиболее часто используемых тем',
        'menu_name' => 'Темы'
      ),
      'public' => true, 
      'show_in_nav_menus' => true,
      'show_ui' => true,
      'show_tagcloud' => true,
      'query_var' => true,
      'rewrite' =>true,
      'has_archive'=>'themes',
      'show_in_rest' => true,
      'rest_base' => 'mainthemes',
    )
  );
}
add_action( 'init', 'add_new_taxonomies', 0 );

add_filter('post_link', 'rating_permalink', 10, 3);
add_filter('post_type_link', 'rating_permalink', 10, 3);
 
function rating_permalink($permalink, $post_id, $leavename) {
    if (strpos($permalink, '%mainthemes%') === FALSE) return $permalink;
     
        // Get post
        $post = get_post($post_id);
        if (!$post) return $permalink;
 
        // Get taxonomy terms
        $terms = wp_get_object_terms($post->ID,'mainthemes');   
        if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0])) $taxonomy_slug = $terms[0]->slug;
        else $taxonomy_slug = 'not-themes';
 
    return str_replace('%mainthemes%', $taxonomy_slug, $permalink);
}

function footer_enqueue_scripts() {
   remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
}
add_action('after_setup_theme', 'footer_enqueue_scripts');

/**
 * Возможность загружать изображения для терминов (элементов таксономий: категории, метки).
 *
 * Пример получения ID и URL картинки термина:
 *     $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
 *     $image_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
 *
 * @author: Kama http://wp-kama.ru
 *
 * @version 2.9
 */
if( is_admin() && ! class_exists('Term_Meta_Image') ){

  // init
  //add_action('current_screen', 'Term_Meta_Image_init');
  add_action( 'admin_init', 'Term_Meta_Image_init' );
  function Term_Meta_Image_init(){
    $GLOBALS['Term_Meta_Image'] = new Term_Meta_Image();
  }

  class Term_Meta_Image {

    // для каких таксономий включить код. По умолчанию для всех публичных
    static $taxes = []; // пример: array('category', 'post_tag');

    // название мета ключа
    static $meta_key = '_thumbnail_id';
    static $attach_term_meta_key = 'img_term';

    // URL пустой картинки
    static $add_img_url = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkAQMAAABKLAcXAAAABlBMVEUAAAC7u7s37rVJAAAAAXRSTlMAQObYZgAAACJJREFUOMtjGAV0BvL/G0YMr/4/CDwY0rzBFJ704o0CWgMAvyaRh+c6m54AAAAASUVORK5CYII=';

    public function __construct(){
      // once
      if( isset($GLOBALS['Term_Meta_Image']) )
        return $GLOBALS['Term_Meta_Image'];

      $taxes = self::$taxes ? self::$taxes : get_taxonomies( [ 'public' =>true ], 'names' );

      foreach( $taxes as $taxname ){
        add_action( "{$taxname}_add_form_fields",   [ $this, 'add_term_image' ],     10, 2 );
        add_action( "{$taxname}_edit_form_fields",  [ $this, 'update_term_image' ],  10, 2 );
        add_action( "created_{$taxname}",           [ $this, 'save_term_image' ],    10, 2 );
        add_action( "edited_{$taxname}",            [ $this, 'updated_term_image' ], 10, 2 );

        add_filter( "manage_edit-{$taxname}_columns",  [ $this, 'add_image_column' ] );
        add_filter( "manage_{$taxname}_custom_column", [ $this, 'fill_image_column' ], 10, 3 );
      }
    }

    ## поля при создании термина
    public function add_term_image( $taxonomy ){
      wp_enqueue_media(); // подключим стили медиа, если их нет

      add_action('admin_print_footer_scripts', [ $this, 'add_script' ], 99 );
      $this->css();
      ?>
      <div class="form-field term-group">
        <label><?php _e('Image', 'default'); ?></label>
        <div class="term__image__wrapper">
          <a class="termeta_img_button" href="#">
            <img src="<?php echo self::$add_img_url ?>" alt="">
          </a>
          <input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
        </div>

        <input type="hidden" id="term_imgid" name="term_imgid" value="">
      </div>
      <?php
    }

    ## поля при редактировании термина
    public function update_term_image( $term, $taxonomy ){
      wp_enqueue_media(); // подключим стили медиа, если их нет

      add_action('admin_print_footer_scripts', [ $this, 'add_script' ], 99 );

      $image_id = get_term_meta( $term->term_id, self::$meta_key, true );
      $image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'thumbnail' ) : self::$add_img_url;
      $this->css();
      ?>
      <tr class="form-field term-group-wrap">
        <th scope="row"><?php _e( 'Image', 'default' ); ?></th>
        <td>
          <div class="term__image__wrapper">
            <a class="termeta_img_button" href="#">
              <?php echo '<img src="'. $image_url .'" alt="">'; ?>
            </a>
            <input type="button" class="button button-secondary termeta_img_remove" value="<?php _e( 'Remove', 'default' ); ?>" />
          </div>

          <input type="hidden" id="term_imgid" name="term_imgid" value="<?php echo $image_id; ?>">
        </td>
      </tr>
      <?php
    }

    public function css(){
      ?>
      <style>
        .termeta_img_button{ display:inline-block; margin-right:1em; }
        .termeta_img_button img{ display:block; float:left; margin:0; padding:0; min-width:100px; max-width:150px; height:auto; background:rgba(0,0,0,.07); }
        .termeta_img_button:hover img{ opacity:.8; }
        .termeta_img_button:after{ content:''; display:table; clear:both; }
      </style>
      <?php
    }

    ## Add script
    public function add_script(){
      // выходим если не на нужной странице таксономии
      //$cs = get_current_screen();
      //if( ! in_array($cs->base, array('edit-tags','term')) || ! in_array($cs->taxonomy, (array) $this->for_taxes) )
      //  return;

      $title = __('Featured Image', 'default');
      $button_txt = __('Set featured image', 'default');
      ?>
      <script>
      jQuery(document).ready(function($){
        var frame,
          $imgwrap = $('.term__image__wrapper'),
          $imgid   = $('#term_imgid');

        // добавление
        $('.termeta_img_button').click( function(ev){
          ev.preventDefault();

          if( frame ){ frame.open(); return; }

          // задаем media frame
          frame = wp.media.frames.questImgAdd = wp.media({
            states: [
              new wp.media.controller.Library({
                title:    '<?php echo $title ?>',
                library:   wp.media.query({ type: 'image' }),
                multiple: false,
                //date:   false
              })
            ],
            button: {
              text: '<?php echo $button_txt ?>', // Set the text of the button.
            }
          });

          // выбор
          frame.on('select', function(){
            var selected = frame.state().get('selection').first().toJSON();
            if( selected ){
              $imgid.val( selected.id );
              $imgwrap.find('img').attr('src', selected.sizes.thumbnail.url );
            }
          } );

          // открываем
          frame.on('open', function(){
            if( $imgid.val() ) frame.state().get('selection').add( wp.media.attachment( $imgid.val() ) );
          });

          frame.open();
        });

        // удаление
        $('.termeta_img_remove').click(function(){
          $imgid.val('');
          $imgwrap.find('img').attr('src','<?php echo self::$add_img_url ?>');
        });
      });
      </script>

      <?php
    }

    ## Добавляет колонку картинки в таблицу терминов
    public function add_image_column( $columns ){
      // fix column width
      add_action( 'admin_notices', function(){
        echo '<style>.column-image{ width:50px; text-align:center; }</style>';
      });

      // column without name
      return array_slice( $columns, 0, 1 ) + [ 'image' =>'' ] + $columns;
    }

    public function fill_image_column( $string, $column_name, $term_id ){
      if( $image_id = get_term_meta( $term_id, self::$meta_key, 1 ) ){
        $string = '<img src="'. wp_get_attachment_image_url( $image_id, 'thumbnail' ) .'" width="50" height="50" alt="" style="border-radius:4px;" />';
      }

      return $string;
    }

    ## Save the form field
    public function save_term_image( $term_id, $tt_id ){
      if( isset($_POST['term_imgid']) && $attach_id = (int) $_POST['term_imgid'] ){
        update_term_meta( $term_id,   self::$meta_key,             $attach_id );
        update_post_meta( $attach_id, self::$attach_term_meta_key, $term_id );
      }
    }

    ## Update the form field value
    public function updated_term_image( $term_id, $tt_id ){
      if( ! isset($_POST['term_imgid']) )
        return;

      $cur_term_attach_id = (int) get_term_meta( $term_id, self::$meta_key, 1 );

      if( $attach_id = (int) $_POST['term_imgid'] ){
        update_term_meta( $term_id,   self::$meta_key,             $attach_id );
        update_post_meta( $attach_id, self::$attach_term_meta_key, $term_id );

        if( $cur_term_attach_id != $attach_id )
          wp_delete_attachment( $cur_term_attach_id );
      }
      else {
        if( $cur_term_attach_id )
          wp_delete_attachment( $cur_term_attach_id );

        delete_term_meta( $term_id, self::$meta_key );
      }
    }

  }

}
/**
 * 2.9 Добавил метаполе для вложений (img_term), где хранится ID термина к которому прикреплено вложение.
 *     Добавил физическое удаление картинки (файла вложения) при удалении его у термина.
 * 2.8 Исправил ошибку удаления картинки.
 */
function img_rss($content) { 
global $post; 
if ( has_post_thumbnail( $post->ID ) ) { 
$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'style' => 'float:left; margin:0 10px 10px 0;' ) ) . '' . $content; 
}
return $content; 
} 
add_filter('the_excerpt_rss', 'img_rss'); 
add_filter('the_content_feed', 'img_rss'); 

/*---------START CHANGE PERMALINKS----------*/
add_filter('post_link', 'locale_permalink', 10, 3);
add_filter('post_type_link', 'locale_permalink', 10, 3);

function locale_permalink($permalink, $post_id, $leavename) {
    if (strpos($permalink, '%mainthemes%') === FALSE) return $permalink;
$post = get_post($post_id);
if (!$post) return $permalink;
    if ($post->post_type != 'post' && $post->post_type != 'functions') {
        return $permalink;
    } else {
        $terms = wp_get_object_terms($post->ID, 'mainthemes');
        if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0])) $taxonomy_slug = $terms[0]->slug;
        else $taxonomy_slug = 'non-themes';
        return str_replace('%mainthemes%', $taxonomy_slug, $permalink);
    }
}

add_filter('rewrite_rules_array','remove_bare_folder_rule');
function remove_bare_folder_rule( $rules )
{
    unset($rules['([^/]+)/?$']);
    return $rules;
}

/*---------END CHANGE PERMALINKS----------*/


/*START delete xmlrpc.php */
function stop_pings ($vectors) {
unset( $vectors['pingback.ping'] );
return $vectors;
}
add_filter( 'xmlrpc_methods', 'stop_pings');
add_filter('xmlrpc_enabled','__return_false');
/*END delete xmlrpc.php */

/*ADD SPECIAL POSTS*/
add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init
 
function true_register_post_type_init() {
  $labels = array(
    'name' => 'Уголь и Майнинг 2019',
    'singular_name' => 'Пост УМР', // админ панель Добавить->Функцию
    'add_new' => 'Добавить пост УМР',
    'add_new_item' => 'Добавить новый пост УМР', // заголовок тега <title>
    'edit_item' => 'Редактировать пост УМР',
    'new_item' => 'Новый пост УМР',
    'all_items' => 'Все посты УМР',
    'view_item' => 'Просмотр постов УМР на сайте',
    'search_items' => 'Искать пост УМР',
    'not_found' =>  'Постов УМР не найдено.',
    'not_found_in_trash' => 'В корзине нет постов УМР.',
    'menu_name' => 'УМР 2019' // ссылка в меню в админке
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, // показывать интерфейс в админке
    'has_archive' => true, 
    'rewrite'=>true,
    'capability_type' => 'post',
    'show_in_rest' => true,
    'menu_icon' => get_stylesheet_directory_uri() .'/img/faviconMini.png', // иконка в меню
    'menu_position' => 20, // порядок в меню
    'supports' => array( 'title', 'editor', 'excerpt','comments', 'author', 'thumbnail', 'custom-fields'),
    'taxonomies' => array( 'category','post_tag','umr'),
  );
  register_post_type('functions', $args);
}



function create_umr_company(){
  register_taxonomy('umr', 'functions',array(
    'hierarchical'  => false,
    'labels'        => array(
      'name'                        => _x( 'Компании УМР', 'taxonomy general name' ),
      'singular_name'               => _x( 'Компания УМР', 'taxonomy singular name' ),
      'search_items'                =>  __( 'Поиск компании УМР' ),
      'popular_items'               => __( 'Популярные компании' ),
      'all_items'                   => __( 'Все компании' ),
      'parent_item'                 => null,
      'parent_item_colon'           => null,
      'edit_item'                   => __( 'Редактировать компании УМР' ),
      'update_item'                 => __( 'Обновить компании УМР' ),
      'add_new_item'                => __( 'Добавить новую компанию' ),
      'new_item_name'               => __( 'Имя компании' ),
      'separate_items_with_commas'  => __( 'Разделить названия компаний запятой' ),
      'add_or_remove_items'         => __( 'Добавить или удалить компанию' ),
      'choose_from_most_used'       => __( 'Выбрать из популярных компаний' ),
      'menu_name'                   => __( 'Компании УМР' ),
    ),
    'show_ui'       => true,
    'query_var'     => true,
    'rewrite'       => array( 'slug' => 'umr' ),
    'show_in_rest' => true,
  ));
};
add_action( 'init', 'create_umr_company');

/*____________START EXCLUDE CATEGORY___________*/
function exclude_category( $query ) {
  $query->set( 'cat', '-2370' );
}
if(!is_admin()){
  add_action( 'pre_get_posts', 'exclude_category' );  
}

/*____________END EXCLUDE CATEGORY___________*/
