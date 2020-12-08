<div class="media">
  <div class="media-left">
    <?php 
      require get_template_directory() . '/inc/post-thumbnail-alt.php';
    ?>
    <a href="<?php the_permalink();?>">
      <img style="width: 100px; height: 70px; object-fit: cover; object-position: center;" class="media-object" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
    </a>
  </div>  

  <div class="media-body">
    <a href="<?php the_permalink();?>">
      <h5 class="media-heading text-uppercase"><strong><?php the_title();?></strong></h5>
    </a>
    <small class="home-popular-date">
    <?php
      if ( function_exists('wpp_get_views') ) {
        echo wpp_get_views(get_the_ID());
      }
    ?>
    <i class="fa fa-eye" aria-hidden="true"></i> | 
    <?php
      echo get_comments_number(get_the_ID());
    ?>
    <i class="fa fa-comment" aria-hidden="true"></i></small>
  </div>
</div>