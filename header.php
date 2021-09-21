<!DOCTYPE html>
<html lang="<?php language_attributes();//サイトの言語を設定する ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- メディアクエリ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="l-grid">
    <header class="l-header">
      <div class="p-header">
        <button class="c-btn--menu c-btn--js">Menu</button>
        <h1 class="p-header__ttl"><a href="<?php echo esc_url(home_url('/'));//トップページのURLを取得する ?>"><?php bloginfo('name');//サイトのタイトルを表示する ?></a></h1>
        <?php get_search_form(); ?>
      </div>
    </header>