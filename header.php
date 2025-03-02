<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
  <head>
    <meta charset="utf-8">
    <?php echo bloginfo( 'name' ); ?>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class( 'u-container', 'body' ); ?> >
    <?php wp_body_open(); ?>
    <header class="l-header">
      <h1 class="c-title__header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <?php get_search_form(); ?>
    </header>
