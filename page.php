  <?php get_header(); ?>

  <?php get_sidebar(); ?>

    <!-- main -->
    <main class="u-main__container">
      <!-- p-fv　ファーストビュー -->
      <section class="l-fv l-fv__about">
        <div class="l-fv__content-single">
          <h2 class="c-title__single"><?php the_title(); ?>ショップについて</h2>
        </div>
      </section>
    <!-- Single page -->
      <article>
        <?php the_content(); ?>
        <!-- <div class="c-inner">
          <div class="c-text__single">
            <h2>h2チーズ発祥について</h2>
            <p>チーズの歴史を知って、より一層楽しくおいしくチーズバーガーを食べよう。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <h3>見出し3</h3>
            <h4>見出し4</h4>
            <h5>見出し5</h5>
            <h6>見出し6</h6>
          </div>
          <div class="c-quote">
            <blockquote>
              <p>Blockquote.引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。
                引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。
                引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。引用タグを使って説明します。テキストが入ります。</p>
              <p>出典元<a href="https://www.figma.com/design/jpm9EKMRby2u2P90qBq5U9/for_coding_design?node-id=1-682&node-type=frame&t=hDUD15cmiditCsVS-0"><cite>○○○○○○○○○○○○</cite></a></p>
            </blockquote>
          </div>
          <img src="/img/ham-poteto.jpg" alt="チーズバーガー" class="c-img__ham-1">
          <figure class="c-test">
            <img src="/img/ham-poteto.jpg" alt="チーズバーガー2">
            <figcaption><p>テキストが入ります。こちらがチーズバーガー2です。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p></figcaption>
          </figure>
          <figure class="c-test c-test-02">
            <figcaption><p>テキストが入ります。こちらがチーズバーガー2です。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p></figcaption>
            <img src="/img/ham-poteto.jpg" alt="チーズバーガー3">
          </figure>
          <div class="c-img__ham-2">
            <img src="/img/ham-poteto.jpg" alt="チーズバーガー4">
          </div>
          <div class="c-grid">
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー5">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー6">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー7">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー8">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー9">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー10">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー11">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー12">
            </div>
            <div>
              <img src="/img/ham-poteto.jpg" alt="チーズバーガー13">
            </div>
          </div>
        </div> -->
      </article>
      <section class="c-list__single">
        <div class="c-inner">
          <ol>
            <li>リストが表示されます。</li>
            <li>リストが表示されます。</li>
          </ol>
          <ol class="c-list__block">
            <li>リスト2が表示されます。</li>
            <li>リスト2が表示されます。</li>
          </ol>
          <ol>
            <li>リストが表示されます。</li>
            <li>リストが表示されます。</li>
          </ol>
          <ul>
            <li>リストが表示されます。</li>
            <li>リストが表示されます。</li>
          </ul>
          <ul class="c-list__block">
            <li>リスト2が表示されます。</li>
            <li>リスト2が表示されます。</li>
          </ul>
          <ul>
            <li>リストが表示されます。</li>
            <li>リストが表示されます。</li>
          </ul>
        </div>
      </section>
      <div class="c-inner">
        <div class="c-code">
          <pre>
<code>&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
        </div>
      </div>
      <div class="c-inner">
        <table class="c-table">
          <tr>
            <td>テーブル</td>
            <td>テーブル</td>
          </tr>
          <tr>
            <td>テーブル</td>
            <td>テーブル</td>
          </tr>
          <tr>
            <td>テーブル</td>
            <td>テーブル</td>
          </tr>
          <tr>
            <td>テーブル</td>
            <td>テーブル</td>
          </tr>
          <tr>
            <td>テーブル</td>
            <td>テーブル</td>
          </tr>
        </table>
      </div>
      <div class="c-inner">
        <a href="#"><button class="c-button__single">ボタン</button></a>
      </div>
      <p class="c-text__bold">boldboldboldboldboldboldboldboldboldbold</p>
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>