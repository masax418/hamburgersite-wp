<!-- 検索フォーム -->

<form class="p-searchform" method="get" action="<?php echo esc_url(home_url('/'));//トップページのURLを取得する ?>">
  <input type="search" class="p-searchform__keyword fas fa-search fa-lg" placeholder="&#xf002;" aria-hidden="true" name="s" id="s">
  <input type="submit" class="p-searchform__submit " value="検索">
</form>

<!-- method属性は送信時のhttpメソッドを指定する -->
<!-- methodの値get（初期値）は検索文字をURLに続く’？’の後にクエリとして送信先ページに渡す -->
<!-- action属性はデータ送信先URLを指定する -->
<!-- name,id属性の値sは検索結果テンプレートsearch.phpを表示させるため -->