<!DOCTYPE html>
<html lang="<?php language_attributes();//サイトの言語を設定する ?>">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- メディアクエリ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css読込み -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- fontawesome -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- Google Font -->
  <!-- Roboto -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- M PLUS 1p -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap" rel="stylesheet">
  <!-- jQueryの読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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