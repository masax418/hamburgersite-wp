<!DOCTYPE html>
<html lang="ja">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- メディアクエリ -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- タブ題名 -->
  <title>hamburger site / アーカイブサーチページ</title>
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

</head>

<body>

  <div class="l-grid">
    <header class="l-header">
      <div class="p-header">
        <button class="c-btn--menu c-btn--js">Menu</button>
        <h1 class="p-header__ttl"><a href="index.html">Hamburger</a></h1>
        <form class="p-searchform">
          <input type="search" class="p-searchform__keyword fas fa-search fa-lg" placeholder="&#xf002;">
          <input type="submit" class="p-searchform__submit " value="検索">
        </form>
      </div>
    </header>

    <main class="l-main">

      <!-- メインヴィジュアルエリア -->
      <div class="p-hero--archive c-mainvisual--archive">
        <h2 class="p-hero__ttl--archive">Search:</h2>
        <p>チーズバーガー</p>
      </div>

      <!-- アーカイブエリア -->
      <div class="l-container">

      <!-- メニュー導入エリア -->
        <article class="p-intro">
          <h2>小見出しが入ります</h2>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </article>

      <!-- メニューカードエリア -->
        <article class="p-menucard">
          <figure class="c-card">
            <img src="/images/eyecatch/card.jpg" alt="ハンバーガーの画像">
            <figcaption class="c-card__caption">
              <h3>見出しが入ります</h3>
              <h4>小見出しが入ります</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <button class="c-btn--more"><a href="single.html">詳しく見る</a></button>
            </figcaption>
          </figure>

          <figure class="c-card">
            <img src="/images/eyecatch/card.jpg" alt="ハンバーガーの画像">
            <figcaption class="c-card__caption">
              <h3>見出しが入ります</h3>
              <h4>小見出しが入ります</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <button class="c-btn--more"><a href="single.html">詳しく見る</a></button>
            </figcaption>
          </figure>

          <figure class="c-card">
            <img src="/images/eyecatch/card.jpg" alt="ハンバーガーの画像">
            <figcaption class="c-card__caption">
              <h3>見出しが入ります</h3>
              <h4>小見出しが入ります</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <button class="c-btn--more"><a href="single.html">詳しく見る</a></button>
            </figcaption>
          </figure>

          <figure class="c-card">
            <img src="/images/eyecatch/card.jpg" alt="ハンバーガーの画像">
            <figcaption class="c-card__caption">
              <h3>見出しが入ります</h3>
              <h4>小見出しが入ります</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <button class="c-btn--more"><a href="single.html">詳しく見る</a></button>
            </figcaption>
          </figure>

          <figure class="c-card">
            <img src="/images/eyecatch/card.jpg" alt="ハンバーガーの画像">
            <figcaption class="c-card__caption">
              <h3>見出しが入ります</h3>
              <h4>小見出しが入ります</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <button class="c-btn--more"><a href="single.html">詳しく見る</a></button>
            </figcaption>
          </figure>
        </article>

      </div>

      <!-- ページネーションエリア -->
      <nav class="p-pagenation">
        <p>page 1/10</p>
        <ul class="p-pagenation__list">
            <li class="p-pagenation__list__item">
                <a class="page-link" href="#" aria-label="前のページに戻る">
                    <span aria-hidden="true">&laquo;</span>
                    <p>前へ</p>
                </a>
            </li>
            <li class="p-pagenation__list__item"><a href="#">1</a></li>
            <li class="p-pagenation__list__item"><a href="#">2</a></li>
            <li class="p-pagenation__list__item"><a href="#">3</a></li>
            <li class="p-pagenation__list__item"><a href="#">4</a></li>
            <li class="p-pagenation__list__item"><a href="#">5</a></li>
            <li class="p-pagenation__list__item"><a href="#">6</a></li>
            <li class="p-pagenation__list__item"><a href="#">7</a></li>
            <li class="p-pagenation__list__item"><a href="#">8</a></li>
            <li class="p-pagenation__list__item"><a href="#">9</a></li>
            <li class="p-pagenation__list__item">
                <a class="page-link" href="#" aria-label="次のページに進む">
                    <p>次へ</p>
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    </main>

    <!-- サイドバーエリア -->
      <article class="l-sidebar">
        <button class="c-btn--close c-btn--js"><span>閉じるボタン</span></button>
        <h2 class="l-sidebar__ttl">Menu</h2>
        <ul class="p-menulist">
          <li class="p-menulist__item">
            <h3>バーガー</h3>
            <ul class="p-menulist__sub">
              <li class="p-menulist__subitem"><a href="#">ハンバーガー</a></li>
              <li class="p-menulist__subitem"><a href="#">チーズバーガー</a></li>
              <li class="p-menulist__subitem"><a href="#">テリヤキバーガー</a></li>
              <li class="p-menulist__subitem"><a href="#">アボガドバーガー</a></li>
              <li class="p-menulist__subitem"><a href="#">フィッシュバーガー</a></li>
              <li class="p-menulist__subitem"><a href="#">ベーコンバーガー</a></li>
              <li class="p-menulist__subitem"><a href="#">チキンバーガー</a></li>
            </ul>
          </li>

          <li class="p-menulist__item">
            <h3>サイド</h3>
            <ul class="p-menulist__sub">
              <li class="p-menulist__subitem"><a href="#">ポテト</a></li>
              <li class="p-menulist__subitem"><a href="#">サラダ</a></li>
              <li class="p-menulist__subitem"><a href="#">ナゲット</a></li>
              <li class="p-menulist__subitem"><a href="#">コーン</a></li>
            </ul>
          </li>

          <li class="p-menulist__item">
            <h3>ドリンク</h3>
            <ul class="p-menulist__sub">
              <li class="p-menulist__subitem"><a href="#">コーラ</a></li>
              <li class="p-menulist__subitem"><a href="#">ファンタ</a></li>
              <li class="p-menulist__subitem"><a href="#">オレンジ</a></li>
              <li class="p-menulist__subitem"><a href="#">アップル</a></li>
              <li class="p-menulist__subitem"><a href="#">紅茶（Ice/Hot)</a></li>
              <li class="p-menulist__subitem"><a href="#">コーヒー（Ice/Hot)</a></li>
            </ul>
          </li>
        </ul>
      </article>
    </div>

    <!-- フッターエリア -->
    <footer class="l-footer">
      <div class="p-footer">
        <ul class="p-footer__menulist">
          <li class="p-footer__menulist__item"><a href="page.html">ショップ情報</a></li>
          <li class="p-footer__menulist__item"><a href="page.html">ヒストリー</a></li>
        </ul>
        <p><small>Copyright: RaiseTech</small></p>
      </div>
    </footer>

  <script src="./js/menu.js"></script>
  <script src="./js/responsive.js"></script>

</body>
</html>