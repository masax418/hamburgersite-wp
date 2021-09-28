<!-- サイドバーエリア -->
<article class="l-sidebar">
  <button class="c-btn--close c-btn--js"><span>閉じるボタン</span></button>
  <h2 class="l-sidebar__ttl">Menu</h2>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'global', //メニューの位置を指定
    'menu_class' => 'p-menu', //任意のclass名を追加
    'items_wrap' => '<ul class="%2$s">%3$s</ul>', //id属性の自動付与を解除（id削除しclassは残す）
    'container' => false //不要なdivタグを削除
  ));
  ?>
</article>
</div>