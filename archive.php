<?php get_header(); ?>

<?php get_sidebar(); ?>

    <main class="u-main__container">
      <section class="l-fv l-fv__bg">
        <div class="l-fv__content">
          <h2 class="c-title__archive">Menu</h2>
          <p class="c-text__archive"><?php the_archive_title(); ?></p>
        </div>
      </section>
        <article class="p-theme-archive">
          <div class="c-text__theme">
            <h2>
              「<?php the_archive_title(); ?>」の一覧を表示しています。
            </h2>
          </div>
          <?php get_template_part( 'template/list-card' ); ?>
        </article>
        <?php wp_pagenavi(); ?>
    </main>

<?php get_footer(); ?>