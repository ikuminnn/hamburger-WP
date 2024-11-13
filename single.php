<?php get_header(); ?>

<?php get_sidebar(); ?>

    <!-- main -->
    <main class="u-main__container">
      <!-- p-fv　ファーストビュー -->
      <section class="l-fv l-fv__single">
        <div class="l-fv__content-single">
          <h2 class="c-title__single"><?php the_title(); ?>チーズバーガー</h2>
        </div>
      </section>
    <!-- Single page -->
      <article>
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post(); ?>
            <div <?php post_class(); ?>>
              <?php the_content(); ?>   <!-- 投稿の本文を出力-->
            </div>
          <?php endwhile;
        else: ?>
          <p>表示できる投稿がありません。</p>
        <?php endif;  ?>
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>