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
    $post_type = get_post_type(get_the_ID());   
    $taxonomies = get_object_taxonomies($post_type);   
    $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies);
    $post_type_object = get_post_type_object(get_post_type());
    $title = (!empty($taxonomy_names)) ? $taxonomy_names[0]->name : $post_type_object->labels->name;
  ?>
  <div class="media-body">
    <p class="media-title text-primary text-uppercase">
      <strong><?php echo $title ?></strong>
    </p>
    <a href="<?php the_permalink();?>">
      <h4 class="media-heading text-uppercase"><strong><?php the_title(); ?></strong></h4>
    </a>
  </div>
</div>