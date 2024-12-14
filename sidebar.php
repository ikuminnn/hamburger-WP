  <aside class="l-nav">
    <button class="c-button js-btn">
      <span class="c-button-line c-button-line1"></span>
      <span class="c-button-line2">Menu</span>
      <span class="c-button-line c-button-line3"></span>
    </button>
    <nav class="p-navi">
      <p class="c-title__navi">Menu</p>
      <?php wp_nav_menu( array(
        'theme_location'  =>  'global-nav',
        'container' =>  '',
        'menu_class'  =>  'p-navi__content js-menu',
      ) ); ?>
    </nav>
    <div class="p-navi-bg js-bg-black"></div>  <!--背景黒-->
  </aside>
