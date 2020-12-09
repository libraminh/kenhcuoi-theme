<div class="post-list-wrap">
  <a href="<?php the_permalink();?>">
    <?php 
      require get_template_directory() . '/inc/post-thumbnail-alt.php';
    ?>
    <img style="width: 100%; height: 200px; object-fit: cover; object-position: center;" class="media-object" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
    <a href="<?php the_permalink();?>">
    <h4 class="media-heading text-uppercase"><strong><?php the_title();?></strong></h4>
  </a>
  <small class="home-showcase-date"><?php echo get_the_date('d . m . yy'); ?>  <span class="divine-2">|</span>
  <?php if ( function_exists('wpp_get_views') ) echo wpp_get_views(get_the_ID()); ?> Lượt xem</small>
</div>