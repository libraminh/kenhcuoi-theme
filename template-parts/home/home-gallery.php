<section class="home-gallery">
  <div class="box-title">
    <h4 class="text-uppercase"><strong>ẢNH CƯỚI ĐẸP</strong></h4>
  </div>

  <div class="margin-box"></div>

  <?php
    $query_post_type = 'beauty-picture';
    $the_query = queryPosts($query_post_type);
  ?>

  <div class="owl-carousel owl-theme home-gallery-carousel">
    <?php 
    while ( $the_query->have_posts() ) :
    $the_query->the_post();
    require get_template_directory() . '/inc/post-thumbnail-alt.php';
    ?>

    <div class="item" data-hash="<?php the_ID(); ?>">
      <img style="width: 100%; height: 460px; object-fit: cover; object-position: center;"
        src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">

      <div class="home-gallery-carousel-content">
        <a href="<?php the_permalink();?>">
          <h3 class="text-uppercase"><?php the_title();?></h3>
        </a>
        <small class="home-showcase-date"><?php echo get_the_date('d . m . yy'); ?> <span class="divine-2">|</span>
          <?php if ( function_exists('wpp_get_views') ) echo wpp_get_views(get_the_ID()); ?> Lượt xem</small>
      </div>
    </div>

    <?php endwhile; ?>
  </div>

  <div class="owl-carousel owl-theme home-gallery-direction">
    <?php
      while ( $the_query->have_posts() ) :
      $the_query->the_post();
      require get_template_directory() . '/inc/post-thumbnail-alt.php';
    ?>
    <div class="item">
      <a class="url" href="#<?php the_ID(); ?>">
        <img style="height: 104px; width: 100%; object-fit: cover; object-position: center;"
          src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
      </a>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>

  <div class="margin-box"></div>

  <div class="show-all">
    <a href="/<?php echo $query_post_type; ?>">
      <h5 class="text-uppercase"><strong>Xem Tất Cả</strong></h5>
    </a>
  </div>
</section>