<div id="post-<?php the_ID(); ?>" <?php post_class('media'); ?>>
  <div class="media-left">
    <?php 
      require get_template_directory() . '/inc/post-thumbnail-alt.php';
    ?>
    <a href="<?php the_permalink();?>">
      <img style="width: 170px; height: 125px; object-fit: cover; object-position: center;" class="media-object" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" >
    </a>
  </div>  
  
  <?php
    $tex = get_the_category();
  ?>
  <div class="media-body">
    <p class="media-title text-primary text-uppercase"><strong><?php echo $tex[0]->name ?></strong></p>
    <a href="<?php the_permalink();?>">
      <h4 class="media-heading text-uppercase"><strong><?php the_title(); ?></strong></h4>
    </a>
  </div>
</div>