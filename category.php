<?php
/**
 * Template Name: カテゴリーページ
**/

get_header(); ?>
<main id="main">
  <?php
    $cat = get_the_category();
    $catname = $cat[0]->cat_name;
  ?>
  <div class="position-relative">
    <div class="static-bg static-single-bg">
      <h1 class="static-main-text d-flex flex-column text-center"><span class="static-main-text__en">Category</span><span class="static-main-text__border"></span><?php echo $catname; ?></h1>
    </div>
  </div>
  <section>
    <div class="container">
      <h2 class="title d-flex flex-column text-center"><span class="title__en">Category</span><span class="title__border"></span>「<?php echo $catname; ?>」記事一覧</h2>
      <div class="row">
        <ul class="column list-unstyled">
          <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <?php echo get_template_part('template/loop'); ?>
            <?php endwhile; ?>
            <?php
              if (function_exists("pagination")) {
                pagination($wp_query->max_num_pages);
              }
            ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>