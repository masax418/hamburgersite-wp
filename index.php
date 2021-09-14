  <!DOCTYPE html>
  <html lang="ja">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- メディアクエリ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- タブ題名 -->
    <title>hamburger site / フロントページ</title>
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
            <input type="search" class="p-searchform__keyword fas fa-search fa-lg" placeholder="&#xf002;" aria-hidden="true">
            <input type="submit" class="p-searchform__submit " value="検索">
          </form>
        </div>
      </header>

      <main class="l-main">

        <!-- メインヴィジュアルエリア -->
        <div class="p-hero c-mainvisual--front">
          <h2 class="p-hero__ttl">ダミーサイト</h2>
        </div>

        <!-- サービスエリア -->
        <div class="p-service">
          <a href="page.html" class="p-service__item p-service__item--takeout">
            <h2 class="p-service__ttl">Take Out</h2>
            <div class="p-service__desc">
              <dl>
                <dt>Take OUT</dt>
                <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
              <dl>
                <dt>Take OUT</dt>
                <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
            </div>
          </a>

          <a href="page.html" class="p-service__item p-service__item--eatin">
            <h2 class="p-service__ttl">Eat In</h2>
            <div class="p-service__desc">
              <dl>
                <dt>Take OUT</dt>
                <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
              <dl>
                <dt>Take OUT</dt>
                <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
              </dl>
            </div>
          </a>
        </div>

        <!-- マップエリア -->
        <div class="p-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11890.205503531271!2d139.7020927775083!3d35.66247038208646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca428c01717%3A0x6d9cff4312428fd5!2sTHE%20GREAT%20BURGER!5e0!3m2!1sja!2sjp!4v1626861556443!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
          <div class="p-map__layer"></div>
          <div class="p-map__desc">
            <h2 class="p-map__ttl">見出しが入ります</h2>
            <p class="p-map__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </div>

      </main>

      <!-- サイドバーエリア -->
        <article class="l-sidebar">
          <button class="c-btn--close c-btn--js"><span>閉じるボタン</span></button>
          <h2 class="l-sidebar__ttl">Menu</h2>
          <ul class="p-menulist">
            <li class="p-menulist__item">
              <h3>バーガー</h3>
              <ul class="p-menulist__sub">
                <li class="p-menulist__subitem"><a href="archive.html">ハンバーガー</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">チーズバーガー</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">テリヤキバーガー</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">アボガドバーガー</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">フィッシュバーガー</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">ベーコンバーガー</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">チキンバーガー</a></li>
              </ul>
            </li>

            <li class="p-menulist__item">
              <h3>サイド</h3>
              <ul class="p-menulist__sub">
                <li class="p-menulist__subitem"><a href="archive.html">ポテト</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">サラダ</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">ナゲット</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">コーン</a></li>
              </ul>
            </li>

            <li class="p-menulist__item">
              <h3>ドリンク</h3>
              <ul class="p-menulist__sub">
                <li class="p-menulist__subitem"><a href="archive.html">コーラ</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">ファンタ</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">オレンジ</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">アップル</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">紅茶（Ice/Hot)</a></li>
                <li class="p-menulist__subitem"><a href="archive.html">コーヒー（Ice/Hot)</a></li>
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