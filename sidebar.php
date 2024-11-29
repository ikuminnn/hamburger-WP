  <aside class="l-nav">
    <button class="c-button js-btn">
      <span class="c-button-line c-button-line1"></span>
      <span class="c-button-line2">Menu</span>
      <span class="c-button-line c-button-line3"></span>
    </button>
    <nav class="p-navi">
      <p class="c-title__navi">Menu</p>
      <ul class="p-navi__content js-menu" aria-hidden="true">
        <?php
          if ( is_active_sidebar( 'category_widget' ) ): ?>
          <ul class="c-navi">
            <?php dynamic_sidebar( 'category_widget' ); ?>
          </ul>
          <?php else: ?>
          <div class="widget">
            <h2>No Widget</h2>
            <p>ウィジェットは設定されていません。</p>
          </div>
        <?php endif; ?>
      </ul>
    </nav>
    <div class="p-navi-bg js-bg-black"></div>  <!--背景黒-->
  </aside>


