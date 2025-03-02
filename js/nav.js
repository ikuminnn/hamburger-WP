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

// ハンバーガーメニューを開いている時はbodyページ固定
function hammenu() {
  $( ".js-btn" ).click ( function () {  //ハンバーガーメニューボタンがクリックされた時のイベントハンドラ設定
    if ( $ ( ".u-container" ).css( "overflow" ) === "hidden" ) {  //bodyタグのoverflowスタイルを確認
      $( ".u-container" ).css( { height: "", overflow: "" });   //もしoverflowがhiddenなら、bodyのスタイルを元に戻す
    } else {
      $( ".u-container" ).css ( { height: "100%", overflow: "hidden" });  //そうでなければ、bodyにheight:100%とoverflow:hiddenを設定し、スクロール無効にする
    }
  });
};