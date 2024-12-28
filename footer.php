  <footer class="l-footer">
    <div class="p-footer__content">
      <?php wp_nav_menu( array(
        'theme_location'  =>  'footer_nav',
        'container'       =>  '',
        'menu_class'      =>  'p-footer__menu',
        'li_class'    =>  'l-footer__line'
      )); ?>
      <small>Copyright:<?php bloginfo( 'name' ); ?></small>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
