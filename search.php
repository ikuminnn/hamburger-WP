<?php get_header(); ?>

<?php get_sidebar(); ?>

    <main class="u-main__container">
      <section class="l-fv l-fv__bg">
          <div class="l-fv__content">
            <h2 class="c-title__search">Search</h2>
            <p class="c-text__archive"><?php echo $_GET ['s']; ?></p>
          </div>
      </section>
      <article class="p-theme-archive">
        <div class="c-text__theme">
          <h2>
            「<?php echo esc_html( $_GET ['s'] ); ?>」の検索結果：<?php echo $wp_query -> found_posts; ?>件
          </h2>
        </div>
        <?php get_template_part( 'template/list-card' ); ?>
      </article>
      <?php if( function_exists( 'wp_pagenavi' ) ) {  //ページネーション
        wp_pagenavi();
        } ?>
    </main>

<?php get_footer(); ?>
