<div class="post-video-showcase-wrap">
  <?php 
    require get_template_directory() . '/inc/post-thumbnail-alt.php';
  ?>
  <img style="width: 100%;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
</div>