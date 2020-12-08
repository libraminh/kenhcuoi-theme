<section class="home-video">
  <div class="box-title">
    <h4 class="text-uppercase"><strong>VIDEO NỔI BẬT</strong></h4>
  </div>

  <div class="margin-box"></div>

  <div class="row">
    <?php
      $query_post_type = 'video';
      $the_query = queryPosts($query_post_type);
    ?>
    
    <?php 
    $post_idx = 0; 
    while ( $the_query->have_posts() ) :
    $the_query->the_post();

    if ($post_idx == 0) : ?>
    <div class="col-md-6">
      <div class="home-video-wrap">
        <?php 
          require get_template_directory() . '/inc/post-thumbnail-alt.php';
        ?>
        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/XRuDQ6aYeD0?ecver=1" frameborder="0" allowfullscreen=""></iframe> -->
        <a href="<?php the_permalink();?>">
          <img style="width: 100%; height: 315px; object-fit: cover; object-position: center;" class="media-object" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" >
        </a>
      </div>

      <div class="col-md-12">
        <h4 class="text-uppercase home-video-title">
          <strong><?php the_title(); ?></strong>
        </h4>
        <small class="home-showcase-date"><?php echo get_the_date('d . m . yy'); ?>  <span class="divine-2">|</span>112 Lượt xem</small>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row">
        <?php else : ?>
          <div class="col-md-12">
            <?php get_template_part( 'template-parts/partials/post', 'tiny-video'); ?>
          </div>
        <?php endif; ?>
        
        <?php $post_idx++; endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>

  <div class="show-all">
    <a href="/<?php echo $query_post_type;?>">
      <h5 class="text-uppercase"><strong>Xem Tất Cả</strong></h5>
    </a>
  </div>
</section>