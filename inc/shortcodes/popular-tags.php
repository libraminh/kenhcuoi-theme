<?php 
  function wpb_tag_cloud() { 
    $args = array(
      'smallest'                  => 12, 
      'largest'                   => 12,
      'unit'                      => 'px', 
      'number'                    => 10,  
      'format'                    => 'array',
      'separator'                 => " ",
      'orderby'                   => 'count', 
      'order'                     => 'DESC',
      'show_count'                => 1,
      'echo'                      => false
    ); 

    add_filter( 'wp_tag_cloud', 'wpdocs_no_follow_tag_cloud_links' );
    function wpdocs_no_follow_tag_cloud_links( $return ) {
      $btn_class = 'btn btn-tag text-uppercase';
      $return = str_replace('<a ', '<a class="' . $btn_class . '" ', $return );
      return $return;
    }
     
    $tag_string = wp_tag_cloud( $args );

    $tags_rendered;

    foreach ($tag_string as $tag) {
      $tags_rendered .= $tag;
    }
    
    return '
      <section class="home-tags">' . (!empty($tags_rendered) ? $tags_rendered : '') . '</section>
    ';
  } 

  // Add a shortcode so that we can use it in widgets, posts, and pages
  add_shortcode('wpb_popular_tags', 'wpb_tag_cloud'); 
?>