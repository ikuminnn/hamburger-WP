<?php get_header(); ?>

<?php get_sidebar(); ?>

  <main class="u-main__container">
    <section class="l-fv l-fv__single">
      <div class="l-fv__content-single" style="background-image: url( <?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
        <h2 class="c-title__single"><?php the_title(); ?></h2>
      </div>
    </section>
    <article>
      <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
          <div <?php post_class( 'c-inner' ); ?> >
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
          </div>
        <?php endwhile; ?>
    </article>
      <?php else: ?>
        <p>表示できる投稿がありません。</p>
      <?php endif;  ?>
  </main>
  
<?php get_footer(); ?>