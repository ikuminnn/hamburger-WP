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
  add_theme_support( 'menus' );             //カスタムメニュー
  register_nav_menus( array (
    'footer_nav'    =>  esc_html__( 'footer navigation', 'hamham' ),  //外観→メニューの所で編集できるように設定　フッター
    'category_nav'  =>  esc_html__( 'category navigation', 'hamham' ),  //カテゴリー
  ));
  add_theme_support( 'editor-styles' );     //エディタスタイル
  add_editor_style();
}
add_action( 'after_setup_theme', 'custom_theme_support' );  //必要な機能を設定し、after_setup_theme のアクションフックで実行


// function ham_widgets_init() {     //ウィジェットの初期設定
//   register_sidebar ( array (      //ウィジェットのボックス一つ一つを定義する
//     'name'    =>  esc_html__( 'Category widget' ),
//     'id'      =>  'category_widget',
//     'description' =>  'widget for category',
//     'before_widget' =>  '',
//     'after_widget'  =>  '',
//     'before_title'  =>  '<h2><i class="fa-regular fa-folder-open" aria-hidden="true"></i>',
//     'after_title'   =>  "</h2>\n"
//   ) );
// }
// add_action( 'widget_init', 'ham_widgeta_init' );


/* ressCSS、フォント2種、CSS、JavaScript読み込み（上から）*********************/
function my_enqueue_styles() {
  wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all' );
  wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '' );
  wp_enqueue_style( 'mplus', '//fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap', array(), '' );
  wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ), array( 'ress' ), false, 'all' );
  wp_deregister_script( 'jquery' );   //不要なjQueryを削除する
  wp_enqueue_script( 'jquery', get_theme_file_uri( '/js/jquery-3.7.1.min.js' ), '', '', true );
  wp_enqueue_script( 'js', get_theme_file_uri( '/js/nav.js' ), array( 'jquery' ), false, true );
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


/* ページネーション ~~~~~~~~~~~~~~~~~~~
* $pages  : 総ページ数
* $paged  : 現在のページ
* $range  : 左右に何ページ表示するか（レンジ：範囲）
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
function pagenation ( $pages = '', $range = 5 ) {
  $showitems = ( $range * 1) + 1;    //表示するページ数（6ページ）
  global $paged;            //現在のページ値
  if ( empty ( $paged )) {  //デフォルトページ
    $paged = 1;
  }

  if ( $pages == '' ) {
    global $wp_query;     //前ページ数を取得
    $pages = $wp_query -> max_num_pages;    //ページが複数あるかチェックする値
    if ( !$pages ) {      //取得できなければ1をセットする
      $pages = 1;
    }
  }
  //2ページ以上ある場合に表示する
  if ( 1 != $pages ) {
    echo "<div class=\"page-count\">" . $paged . "/" . $pages . "</div>";   //現在のページを表示「今のページ/総ページ」
    echo "<ul class=\"pagenation\">";
    if ( $paged > $pages + 1 ) {    //最初へ
      echo "<li class=\"first\"><a href='" . get_pagenum_link( 1 ) . "'>最初へ</a></li>";
    }
    if ( $paged > 1 ) {             //前へ
      echo "<li class=\"prev\"><a href='" . get_pagenum_link( $paged - 1 ) ."'>前へ</a></li>";
    }

    //ページ番号を表示
    for ( $i = 1; $i <= $pages; $i++ ) {  //ループ処理 $iの1から始める;$iが総ページ以下の時は続ける;ループが来る度に$1に1を足す
      if ( $i <= $paged + $renge && $i >= $paged - $renge ) {   //$iが、表示しているページと今のページ数以下、かつ、表示ページのうちの今のページ数以上のときはtrue
        if ( $paged == $i ) {             //今のページ数が$iと等しいか
          echo "<li class=\"current\">" . $i . "</li>";  //等しい時に表示
        } else {
          echo "<li><a href='".get_pagenum_link( $i ). "'>" . $i . "</a></li>"; //等しくない時に表示
        }
      }
    }

    if ( $paged < $pages ) {        //次へ＿今のページが総ページより小さい数字の時
      echo "<li class=\"next\"><a href='" .get_pagenum_link( $paged + 1 ). "'>次へ</a></li>";
    }
    if ( $paged + $range < $pages ) { //最後へ＿今のページを含めた表示数が総ページより小さい時（最後のページに当たる数字が表示されていたら出ない？
      echo "<li class=\"last\"><a href='" .get_pagenum_link( $pages ). "'>最後へ</a></li>";
    }

    echo "</ul>";
  }
}

?>

