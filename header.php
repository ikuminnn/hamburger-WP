<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
  <head>
    <meta charset="utf-8">
    <title><?php echo bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> class="u-container">
    <header class="l-header">
      <h1 class="c-title__header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <?php get_search_form(); ?>
    </header>
