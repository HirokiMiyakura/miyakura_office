<?php
/**
 * Template Name: 事務所概要
**/

get_header(); ?>
<main id="main">
  <div class="position-relative">
    <div class="static-bg static-about-bg">
      <h1 class="static-main-text d-flex flex-column text-center"><span class="static-main-text__en">About</span><span class="static-main-text__border"></span>事務所概要</h1>
    </div>
  </div>
  <section>
    <div class="container">
      <h2 class="title d-flex flex-column text-center"><span class="title__en">About</span><span class="title__border"></span>事務所概要</h2>
      <div class="service row">
        <div class="col-12 col-sm-6">
          <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 px-0 px-sm-3">
          <h2 class="mb-5 underbar">代表挨拶</h2>
          <p class="lead mb-3">メッセージ</p>
          <p class="mb-5">VISA申請の詳細が入ります。VISA申請の詳細が入ります。VISA申請の詳細が入ります。
            VISA申請の詳細が入ります。VISA申請の詳細が入ります。VISA申請の詳細が入ります。
            VISA申請の詳細が入ります。VISA申請の詳細が入ります。VISA申請の詳細が入ります。</p>
        </div>
      </div>
      <div class="service row">
        <div class="col-12 col-sm-6 px-0 px-sm-3">
          <h2 class="mb-5 underbar">プロフィール</h2>
          <!-- <p class="lead mb-3"></p> -->
          <table class="table">
            <tr>
              <td>2011年</td>
              <td>株式会社Orfool創業</td>
            </tr>
            <tr>
              <td>2012年</td>
              <td>早稲田大学政治経済学部卒業</td>
            </tr>
            <tr>
              <td>2024年</td>
              <td>行政書士資格取得</td>
            </tr>
          </table>
        </div>
        <div class="col-12 col-sm-6">
          <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt="">
        </div>
      </div>
  </section>
</main>
<?php get_footer(); ?>