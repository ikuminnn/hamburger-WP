<?php get_header(); ?>

<?php get_sidebar(); ?>

  <main class="u-main__container">
    <section class="l-fv l-fv__about">
      <div class="l-fv__content-single" style="background-image: url( <?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ; ?>">
        <h2 class="c-title__single"><?php the_title(); ?></h2>
      </div>
    </section>
    <article class="c-inner">
      <?php the_content(); ?>
    </article>
  </main>

<?php get_footer(); ?>