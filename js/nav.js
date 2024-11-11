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

// $('.js-btn').click(function () {
//   $(this).toggleClass('active');
//   $('.js-nav').toggleClass('panelactive');
// });

// $('.js-nav a').click(function () {
//   $('.js-btn').removeClass('active');
//   $('.js-nav').removeClass('panelactive');
// });
