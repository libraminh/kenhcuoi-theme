<div id="post-<?php the_ID(); ?>" <?php post_class('item home-showcase-wrap'); ?>>
  <?php 
    require get_template_directory() . '/inc/post-thumbnail-alt.php';
  ?>
  <a href="<?php the_permalink();?>">
    <img style="width: 100%; height: 550px; object-fit: cover; object-position: center;" class="home-showcase-thumb" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" >
  </a>

  <?php
    $tex = get_the_category();
  ?>
  <p class="home-showcase-wrap-title text-uppercase"><?php echo $tex[0]->name ?></p>
  <a class="home-showcase-title text-uppercase" href="<?php the_permalink();?>">
    <h3><strong><?php the_title(); ?></strong></h3>
  </a>
  
  <small class="home-showcase-date"><?php  the_date('d . m . yy'); ?> <span class="divine-2">|</span>112 Lượt xem</small>
  <div class="home-showcase-content">
    <?php the_excerpt() ?>
  </div>
</div>