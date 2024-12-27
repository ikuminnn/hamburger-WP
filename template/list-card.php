  <section class="p-lists">
    <?php if ( have_posts() ):
      while( have_posts() ):
        the_post(); ?>
          <figure <?php post_class( array ( 'p-list' ) ); ?> >
            <?php if ( has_post_thumbnail() ) : ?>  <!--アイキャッチ画像が登録されているか確認-->
              <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
            <?php else: ?> <!--サムネイルが登録されていなかったら-->
              <div class="img-no">NoImage!</div>
            <?php endif; ?>
            <figcaption class="c-caption">
              <h3><?php the_title(); ?></h3>
              <?php echo wp_trim_words( get_the_content(), 50 ); ?>
              <p><a class="c-button__menu" href="<?php the_permalink(); ?>">詳しく見る</a></p>
            </figcaption>
          </figure>
      <?php endwhile;
      else: ?>
        <p>表示する記事がありません。</p>
    <?php endif; ?>
  </section>
