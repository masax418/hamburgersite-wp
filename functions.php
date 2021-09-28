<?php
//テーマサポート
add_theme_support('title-tag');
add_theme_support('menus');

//タイトル出力
function change_title_tag($title)
{
  if (is_front_page() && is_home()) { //トップページなら
    $title = get_bloginfo('name');
  } elseif (is_single()) { //個別ページなら
    $title = single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'change_title_tag');

//スタイルの読込み
function hamburger_script()
{
  wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1'); //fontawesomeの読込み
  wp_enqueue_style('roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array()); //webフォントの読込み
  wp_enqueue_style('mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array()); //webフォントの読込み
  wp_enqueue_style('ress', get_theme_file_uri( '/css/ress.css' ), array(), '4.0.0'); //ress.cssの読込み（リセットcss）
  wp_enqueue_style('hamburger-style', get_theme_file_uri( '/css/style.css' ), array(), '1.0.0'); //style.cssの読込み
  wp_enqueue_style('wp-style', get_theme_file_uri( '/style.css' ), array(), '1.0.0'); //style.cssの読込み（テーマ設定ファイル）
	wp_deregister_script('jquery');// WordPress本体のjquery.jsを読み込まない
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', "", "3.6.0", true);//js本体読込み
  wp_enqueue_script('menu-js', get_theme_file_uri( '/js/menu.js' ), array(), '1.0.0', true );//jsファイル読込み
  wp_enqueue_script('responsive-js', get_theme_file_uri( '/js/responsive.js' ), array(), '1.0.0', true );//jsファイル読込み
}
add_action('wp_enqueue_scripts', 'hamburger_script');

//カスタムメニューの位置を定義する
if (!function_exists('register_my_menus')) :
  function register_my_menus()
  {
    register_nav_menus( array(//複数のナビゲーションメニューを登録する関数
      //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
      'global' => 'グローバルメニュー', //ここではサイドバーのメニューをグローバルメニューに定義します。
      'footer-menu' => 'フッターメニュー'
    ));
  }
endif;
add_action('after_setup_theme', 'register_my_menus');

//カスタムメニューのliに付与される不要なclassやidを削除
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array( '' )) : '';
}