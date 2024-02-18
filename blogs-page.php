<?php
/**
 * Template Name: ブログ/コラム
**/

get_header(); ?>
<main id="main">
  <div class="position-relative">
    <div class="static-bg static-blog-bg">
      <h1 class="static-main-text d-flex flex-column text-center"><span class="static-main-text__en">Blog / Column</span><span class="static-main-text__border"></span>ブログ・コラム</h1>
    </div>
  </div>
  <section>
    <div class="container">
      <h2 class="title d-flex flex-column text-center"><span class="title__en">Archive</span><span class="title__border"></span>記事一覧</h2>
      <div class="row">
        <ul class="column list-unstyled">
          <?php
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 10,
              'paged' => $paged,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); 
          ?>
          <li class="d-block d-sm-flex gap-4">
            <div>
              <span class="date"><?php the_time('Y.m.d'); ?></span>
              <span class="cat">
                <?php
                  $categories = get_the_category();
                    foreach( $categories as $category ) {
                    echo '<a class="text-white" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                  }
                ?>
              </span>
            </div>
            <div>
              <a class="d-block" href="<?php the_permalink(); ?>"><?php echo get_the_title($post->ID); ?></a>
            </div>
          </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </section>
  <section></section>
  <section></section>
</main>
<?php get_footer(); ?>