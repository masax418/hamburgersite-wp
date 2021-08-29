/* メニューウィンドウサイズ変更したら閉じる */

$(function () {
  $(window).resize(
    function () {
      //outerWidth()でpaddingとborderを含めた幅を取得。window幅が1024以上の時に処理発動
      if ($(window).outerWidth() > 1024) {
        $('body').removeClass('is-open');
        $('.l-sidebar').removeClass('is-open');
      } else {
        //window幅1025以上はメニューを表示しておく
        $('.l-sidebar').show();
      }

    });
});