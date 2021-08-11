//Menuボタン、閉じるボタン  を押したらサイドバー表示（スマホ、タブレット表示の時）
$(function(){
  $('.c-btn--js').on('click', function () {
    $('body').toggleClass('is-open');
    $('.l-sidebar').toggleClass('is-open');
  });
});