<?php
/**
 * Template Name: 新着記事
**/

get_header(); ?>
<main id="main">
  <div class="position-relative">
    <div class="static-bg static-single-bg">
      <h1 class="static-main-text d-flex flex-column text-center"><span class="static-main-text__en">Blog / Column</span><span class="static-main-text__border"></span>ブログ・コラム</h1>
    </div>
  </div>
  <section>
    <div class="container">
      <div class="row">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="d-flex gap-4">
              <p><?php the_time('Y.m.d'); ?></p>
              <p>
                <?php
                  $category = get_the_category();
                  if ( $category[0] ) {
                    echo '<a class="single-cat text-decoration-none text-white" href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
                  }
                ?>
              </p>
            </div>
            <h1 class="mb-5"><?php the_title(); ?></h1>
            <article>
              <p><?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?></p>
              <div><?php the_content();?></div>
            </article>
          <?php endwhile; ?>
        <?php else : ?>
          <div>記事が存在していないです。</div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>