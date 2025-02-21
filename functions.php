<?php

function custom_theme_support() {
  add_theme_support( 'html5', array(    //HTML5で出力できるように変更
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
  add_theme_support( 'title-tag' );         // タイトルタグ
  add_theme_support( 'post-thumbnails' );   //アイキャッチ機能
  // add_theme_support( 'menus' );             //カスタムメニュー
  register_nav_menus( array (               //外観→メニュー で表示するメニュー
    'footer_nav'    =>  esc_html__( 'footer navigation', 'フッターナビ' ),  //フッター
    // メニューの位置を示す固有名称 => このメニューの位置の名称
    'global-nav'    =>  'グローバルメニュー'
  ));
  add_theme_support( 'editor-styles' );     //エディタスタイル
  add_editor_style();
}
add_action( 'after_setup_theme', 'custom_theme_support' );  //必要な機能を設定し、after_setup_theme のアクションフックで実行


// function ham_widgets_init() {     //ウィジェットの初期設定
//   register_sidebar ( array (      //ウィジェットのボックス一つ一つを定義する
//     'name'          => 'Category widget',
//     'id'            => 'category_widget',
//     'description'   => 'widget for category',
//   ) );
// }
// add_action( 'widgets_init', 'ham_widgets_init' );


/* ressCSS、フォント2種、CSS、JavaScript読み込み（上から）*********************/
function my_enqueue_styles() {
  wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all' );
  wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '' );
  wp_enqueue_style( 'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap', array(), '' );
  wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ), array( 'ress' ), false, 'all' );
  // wp_deregister_script( 'jquery' );   //不要なjQueryを削除する
  wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-3.7.1.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'js', get_template_directory_uri().'/js/nav.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );


/* タイトル出力 ********************************/
function ham_title ( $title ) {
  if ( is_front_page() && is_home() ) {   //トップページなら
    $title = get_bloginfo( 'name', 'display' );
  } elseif ( is_singular() ) {   //シングルページなら
    $title = single_post_title( '', false );
  }
  return $title;
}
add_filter( 'pre_get_document_title', 'ham_title' );


/* 検索対象を投稿ページのみにする ****************/
function search_filter( $query ) {
  if ( $query -> is_search ) {
    $query -> set ( 'post_type', 'post' );
  }
  return $query;
}
add_filter( 'pre_get_posts', 'search_filter' );

//  the_archive_title で表示される「：」の前の表記を削除
add_filter( 'get_the_archive_title', function ( $title ) {
  if ( is_category() ) {
    $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
  } elseif ( is_tax() ) {
    $title = single_term_title( '', false );
  }
  return $title;
});

// wp_nav_menuの <li>にクラスを追加する
function add_class_on_li( $classes, $item, $args ) {
  if ( isset( $args -> li_class ) ) {
    $classes[] = $args -> li_class;
  }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'add_class_on_li', 1, 3 );


?>

