  <section class="p-lists">
    <?php if ( have_posts() ):
      while( have_posts() ):
        the_post(); ?>
          <figure id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="p-list">
            <img class="img-list" src="<?php the_post_thumbnail_url( 'medium' ); ?>" alt="チーズバーガーの写真">
            <figcaption class="c-caption">
              <h3><?php the_title(); ?></h3>
              <h4>こだわり</h4>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                <?php the_content( '続きを読む' ); ?></p>
              <p><a class="c-button__menu" href="<?php the_permalink(); ?>">詳しく見る</a></p>
            </figcaption>
          </figure>
      <?php endwhile;
      else: ?>
        <p>表示する記事がありません</p>
    <?php endif; ?>
  </section>
