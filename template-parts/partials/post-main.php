<div id="post-<?php the_ID(); ?>" <?php post_class('item home-showcase-wrap'); ?>>
  <?php 
    require get_template_directory() . '/inc/post-thumbnail-alt.php';
  ?>
  <a href="<?php the_permalink();?>">
    <img style="width: 100%; height: 550px; object-fit: cover; object-position: center;" class="home-showcase-thumb" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>" >
  </a>

  <?php
    $taxonomies = get_object_taxonomies(get_post_type(get_the_ID()));   
    $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies);
    $post_type_object = get_post_type_object(get_post_type());
    $title = (!empty($taxonomy_names)) ? $taxonomy_names[0]->name : $post_type_object->labels->name;
  ?>
  <p class="home-showcase-wrap-title text-uppercase"><?php echo $title; ?></p>
  <a class="home-showcase-title text-uppercase" href="<?php the_permalink();?>">
    <h3><strong><?php the_title(); ?></strong></h3>
  </a>
  
  <small class="home-showcase-date"><?php echo get_the_date('d . m . yy'); ?> <span class="divine-2">|</span>
  <?php if ( function_exists('wpp_get_views') ) echo wpp_get_views(get_the_ID()); ?> Lượt xem</small>
  <div class="home-showcase-content">
    <?php the_excerpt() ?>
  </div>
</div>