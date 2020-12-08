<?php 
function post_share_shortcode() { 
  $the_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'tax_query' => array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'category',
        'field' => 'slug',
        'terms' => 'goc_chia_se'
      )
    ),
  ));
  
  ob_start(); ?>
    <div class="home-popular"> 
      <?php
        while ( $the_query->have_posts() ) :
        $the_query->the_post();
        get_template_part( 'template-parts/partials/post', 'aside');
        endwhile;
      ?> 
    </div> 
  <?php
  $out1 = ob_get_contents();
  ob_end_clean();
  return $out1;
} 

// register shortcode
add_shortcode('post-share', 'post_share_shortcode'); 
?>