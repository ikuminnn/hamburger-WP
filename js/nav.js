window.onload = function () {
  var nav = document.querySelector('.l-nav');
  var hamburger = document.querySelector('.js-btn');
  var bgBlack = document.querySelector('.js-bg-black');
  var menu = document.querySelector('.js-menu');

  // Meunアイコンをクリックしたらnav指定の要素にopenクラスを追加・削除する
  hamburger.addEventListener('click', function () {
    nav.classList.toggle('open');
  });
  // 黒背景をクリックしたらopenクラスを削除する
  bgBlack.addEventListener('click', function () {
    nav.classList.remove('open');
  });
  menu.addEventListener('click', function () {
    nav.classList.remove('open');
  });

}

<<<<<<< HEAD
// // ハンバーガーメニューを開いている時はbodyページ固定
// $ (function () {
//   $( ".js-btn" ).click ( function () {  //ハンバーガーメニューボタンがクリックされた時のイベントハンドラ設定
//     if ( $ ( "body" ).css( "overflow" ) === "scroll" ) {  //bodyタグのoverflowスタイルを確認
//       $( "body" ).css( { overflow: "hidden" });   //もしoverflowがhiddenなら、bodyのスタイルを元に戻す
//     } else {
//       $( "body" ).css ( { overflow: "" });  //そうでなければ、bodyにheight:100%とoverflow:hiddenを設定し、スクロール無効にする
//     }
//   });
// });
=======
// ハンバーガーメニューを開いている時はbodyページ固定
function hammenu() {
  $( ".js-btn" ).click ( function () {  //ハンバーガーメニューボタンがクリックされた時のイベントハンドラ設定
    if ($( "body" ).css( "overflow" ) === "hidden" ) {  //bodyタグのoverflowスタイルを確認
      $( "body" ).css( { height: "", overflow: "" });   //もしoverflowがhiddenなら、bodyのスタイルを元に戻す
    } else {
      $( "body" ).css ( { height: "100%", overflow: "hidden" });  //そうでなければ、bodyにheight:100%とoverflow:hiddenを設定し、スクロール無効にする
    }
  });
};
>>>>>>> 4e838719f4b518ab6a74b4b7878363cc538581a1
