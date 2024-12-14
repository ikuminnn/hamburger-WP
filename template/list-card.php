  <section class="p-lists">
    <?php if ( have_posts() ):
      while( have_posts() ):
        the_post(); ?>
          <figure <?php post_class( array ( 'p-list' ) ); ?> class="p-list">
            <img class="img-list" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="">
            <figcaption class="c-caption">
              <h3><?php the_title(); ?></h3>
              <?php the_content( '続きを読む' ); ?>
              <p><a class="c-button__menu" href="<?php the_permalink(); ?>">詳しく見る</a></p>
            </figcaption>
          </figure>
      <?php endwhile;
      else: ?>
        <p>表示する記事がありません。</p>
    <?php endif; ?>
  </section>
