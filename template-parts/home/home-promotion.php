<?php 
  $query_post_type = 'promotion';
  $the_query = queryPosts($query_post_type, 8);
?>

<section class="home-promotion">
  <div class="box-title">
    <h4 class="text-uppercase"><strong>Khuyến Mãi Cưới</strong></h4>
  </div>

  <div class="margin-box"></div>

  <div class="row">
    <?php while ( $the_query->have_posts() ) :
      $the_query->the_post(); ?>
      <div class="col-xs-6 col-md-3">
        <a href="<?php the_permalink(); ?>">
          <?php 
            require get_template_directory() . '/inc/post-thumbnail-alt.php';
          ?>
          <img style="width: 100%; height: 120px; object-fit: cover; object-position: center;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" >
          <h5 class="text-uppercase"><?php the_title(); ?></h5>
        </a>
      </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
  
  <div class="show-all">
    <a href="<?php echo '/' . $query_post_type; ?>">
      <h5 class="text-uppercase">
        <strong>Xem Tất Cả</strong>
      </h5>
    </a>
  </div>
  
</section>
