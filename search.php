<?php get_header(); ?>

<?php get_sidebar(); ?>

    <main class="u-main__container">
      <section class="l-fv l-fv__bg">
          <div class="l-fv__content">
            <h2 class="c-title__search">Search</h2>
            <?php if ( !$_GET ['s'] ) { ?>
              <p>検索キーワードが未入力です。</p>
              consol.log( test );
              <?php }
            else { ?>
              <p class="c-text__archive"><?php echo esc_html( $_GET ['s'] );
            } ?></p>
          </div>
        </section>
        <?php if ( have_posts() ):
          while ( have_posts() ): the_post(); ?>
            <article class="p-theme-archive">
              <div class="c-text__theme">
                <h2>
                  「<?php echo esc_html( $_GET ['s'] ); ?>」の検索結果：<?php echo $wp_query -> found_posts; ?>件
                </h2>
              </div>
              <?php get_template_part( 'template/list-card' ); ?>
            </article>
          <?php endwhile; ?>
          <?php
            if ( function_exists( 'pagenation' ) ) {  //「pagenation」という関数が定義されていれば呼び出す
              pagenation();
            }  ?>  //elseはないが定義がなかったら呼び出さない
        <?php else: ?>
          <p>検索されたキーワードに一致する記事はありませんでした。</p>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>