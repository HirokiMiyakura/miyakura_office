<li class="d-block d-sm-flex gap-4">
  <div>
    <span class="date"><?php the_time('Y.m.d'); ?></span>
    <span class="cat">
      <?php
        $cat = get_the_category();
        $cat = $cat[0];
        echo '<a class="text-white" href="' . get_category_link($cat->term_id) . '">' . $cat->name . '</a>';
      ?>
    </span>
  </div>
  <div>
    <a class="d-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </div>
</li>