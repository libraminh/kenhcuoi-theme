<section class="home-sale">
  <div class="row">
    <?php 
      $page_id = get_queried_object_id();
      $sale_post = get_field('sale_ad_post', $page_id);
    ?>

    <?php if( have_rows('home_sales_repeater', 'option') ): ?>
      <?php while( have_rows('home_sales_repeater', 'option') ): the_row(); 
          $image = get_sub_field('image');
          $link = get_sub_field('post');
          ?>
          <div class="col-xs-6 col-sm-3">
            <div class="home-sale-box">
              <a href="<?php echo $link['url'] ?>">
                <img src="<?php echo $image['url']; ?>" alt="">
              </a>
            </div>
          </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>