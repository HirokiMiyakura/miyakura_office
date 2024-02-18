<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>宮倉行政書士事務所</title>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/ress.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/hamburger.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/common.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/scss/main.css" rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<header>
  <!-- パソコンメニュー -->
  <div class="container-fluid position-relative">
    <div class="header-menu row px-1 px-md-4 px-lg-5 d-flex">
      <div class="d-block d-sm-flex justify-content-between align-items-center lh-0">
        <div>
          <a class="d-flex flex-column pt-3 pt-sm-0 text-center text-decoration-none" href="<?php echo home_url(); ?>">
            <h1 class="fs-5 mb-0"><span class="en">Miyakura Law Office</span>宮倉行政書士事務所</h1>
          </a>
        </div>
        <div class="d-none d-sm-block">
          <ul class="gap-4 gap-md-5 mb-0 d-flex list-unstyled">
            <li class="">
              <a class="d-flex flex-column text-center text-decoration-none" href="<?php echo home_url(); ?>/service"><span class="en">Service</span>取扱業務</a>
            </li>
            <li class="">
              <a class="d-flex flex-column text-center text-decoration-none" href="<?php echo home_url(); ?>/price"><span class="en">Price</span>料金体系</a>
            </li>
            <li class="">
              <a class="d-flex flex-column text-center text-decoration-none" href="<?php echo home_url(); ?>/voice"><span class="en">Voice</span>お客様の声</a>
            </li>
            <li class="">
              <a class="d-flex flex-column text-center text-decoration-none" href="<?php echo home_url(); ?>/about"><span class="en">About</span>事務所概要</a>
            </li>
            <li class="">
              <a class="d-flex flex-column text-center text-decoration-none" href="<?php echo home_url(); ?>/column"><span class="en">Blog/Column</span>ブログ・コラム</a>
            </li>
            <!-- <li class="">
              <a class="d-flex flex-column text-center text-decoration-none" href="<?php echo home_url(); ?>/faq"><span class="en">FAQ</span>よくあるご質問</a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
    <?php get_template_part('template/hamburger'); ?>
    <?php get_template_part('template/contact_pc'); ?>
  </div>
  <?php if(is_front_page()) : ?>
    <h2 class="main-message">We<br>Accelerate<br>your business</h2>
  <?php endif; ?>
  <!-- /パソコンメニュー -->
  <?php if(is_front_page()) : ?>
    <!-- swiper1 -->
    <?php echo get_template_part('template/swiper_main'); ?>
    <!-- /swiper1 -->
  <?php endif; ?>
</header>