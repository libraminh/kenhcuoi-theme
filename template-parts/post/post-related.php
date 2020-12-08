<div class="post-video-showcase-relate">   
  <div class="box-title-1">
    <h4 class="text-uppercase text-accent">
      <strong><?php echo (!empty($args)) ? $args['name'] : 'Bài Viết Liên Quan'; ?></strong>
    </h4>
  </div>

  <div class="row">
    <div class="margin-box-3"></div>

    <?php 
      $post_id = get_the_ID();
      $categories = wp_get_post_categories( $post_id );
      $current_post_type = get_post_type( $post_id );
      $posts_per_page = '4';
      $args = array( 
        'category__in'   => $categories,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => $posts_per_page,
      );
    ?>

    <?php 
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
      while ( $query->have_posts() ) :
      $query->the_post();
    ?>

    <div class="col-sm-6 col-md-3">
      <?php 
        require get_template_directory() . '/inc/post-thumbnail-alt.php';
      ?>

      <a href="<?php the_permalink();?>">
        <img style="width: 165px; height: 120px; object-fit: cover; object-position: center;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
      </a>

      <a href="<?php the_permalink();?>">
        <h5 class="text-uppercase"><?php the_title(); ?></h5>
      </a>

      <small>
        <a class="text-uppercase home-showcase-date" href="<?php echo get_the_author_meta('user_url'); ?>"><?php echo get_the_author(); ?></a>
      </small>
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>
</div>

<div class="margin-box"></div>
