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


  <!-- $paged = get_query_var( 'paged' )? get_query_var( 'paged' ) : 1; //現在の送り番号を取得する
  $info = new WP_Query( array(    //任意の変数＄ に取得してもらう
    'post_type'     =>  'post', //投稿タイプ
    'paged'         =>  $paged, //ページ番号を指定
    'post_status'   =>  'publish',
    'post_per_page' =>  5,  //表示する投稿数※管理画面の設定と違うとバグる
  ));  array( 'query' => $info )  -->
      