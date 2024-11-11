  <aside class="l-nav">
    <button class="c-button js-btn">
      <span class="c-button-line c-button-line1"></span>
      <span class="c-button-line2">Menu</span>
      <span class="c-button-line c-button-line3"></span>
    </button>
    <nav class="p-navi">
      <p class="c-title__navi">Menu</p>
      <ul class="p-navi__content js-menu" aria-hidden="true">
        <li class="c-title__navi-ttl"><h3><a href="<?php echo esc_url( home_url( '/' )); ?>">バーガー</a></h3>
          <ul class="c-navi">
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">ハンバーガー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">チーズバーガー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">テリヤキバーガー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">アボカドバーガー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">フィッシュバーガー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">ベーコンバーガー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">チキンバーガー</a></li>
          </ul>
        </li>
        <li class="c-title__navi-ttl"><h3><a href="<?php echo esc_url( home_url( '/' )); ?>">サイド</a></h3>
          <ul class="c-navi">
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">ポテト</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">サラダ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">ナゲット</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">コーン</a></li>
          </ul>
        </li>
        <li class="c-title__navi-ttl"><h3><a href="<?php echo esc_url( home_url( '/' )); ?>">ドリンク</a></h3>
          <ul class="c-navi">
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">コーラ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">ファンタ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">オレンジ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">アップル</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">紅茶（Ice/Hot）</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' )); ?>">コーヒー（Ice/Hot）</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="p-navi-bg js-bg-black"></div>  <!--背景黒-->
    <?php if( is_active_sidebar( 'category_widget' ) ):
      dynamic_sidebar( 'category_widget' );
      else: ?>
      <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジェットは設定されていません。</p>
      </div>
    <?php endif; ?>
  </aside>
