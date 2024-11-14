<?php get_header(); ?>

<?php get_sidebar(); ?>

    <!-- main -->
    <main class="u-main__container">
      <?php
        $cat = get_category();
        $catname = $cat[ 0 ] -> cat_name;
        ?>
      <section class="l-fv l-fv__bg">
        <div class="l-fv__content">
          <h2 class="c-title__archive">Menu</h2>
          <p class="c-text__archive"><?php echo $catname; ?></p>
        </div>
      </section>
      <!-- p-theme　takeout/eatin -->
      <?php if ( have_posts() ):
        while ( have_posts() ) : the_post(); ?>
          <article class="p-theme-archive">
            <div class="c-text__theme">
              <h2>
                <?php echo $catname; ?>の一覧を表示しています。
              </h2>
            </div>
            <?php get_template_part( 'template/list-card' ); ?> //商品ごとのやつ
          </article>
        <?php endwhile; ?>

        <?php //pagenation
          if ( function_exists( 'pagenation' ) ) {  //「pagenation」という関数が定義されていれば呼び出す
            pagenation();
          }   //elseはないが定義がなかったら呼び出さない
      endif; ?>
    </main>
  
  <?php get_footer(); ?>
