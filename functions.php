<?php
//テーマサポート
add_theme_support('title-tag');

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
  wp_enqueue_style('style',get_template_directory_uri().'/css/style.css'); //style.cssの読込み
}
add_action('wp_enqueue_scripts', 'hamburger_script');