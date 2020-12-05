<?php 
if ( function_exists('wpp_get_mostpopular') ) {
  function wpp_shortcode() { 
    // Things that you want to do. 
    $args = array(
      'limit' => 8,
      'range' => 'all',
      'stats_comments' => 1,
      'wpp_start' => '<div class="home-popular"> <ul class="wpp-list" style="padding: 0; margin: 0;">',
      'wpp_end' => '</ul></div>',
      'post_html' => '
      <li> {thumb} 
          <a href="{url}">
              <h5 class="media-heading text-uppercase">
              <strong>{text_title}</strong>
              </h5>
          </a>
          <small class="home-popular-date">{views} 
              <i class="fa fa-eye" aria-hidden="true"></i> | 
                  {comments} <i class="fa fa-comment" aria-hidden="true">
              </i>
          </small>
      </li>',
      'thumbnail_width' => 100,
      'thumbnail_height' => 75
    );
    
    // Output needs to be return
    ob_start();
    wpp_get_mostpopular($args);
    $out1 = ob_get_contents();
    ob_end_clean();
    return $out1;
  } 
}

// register shortcode
add_shortcode('popular-posts', 'wpp_shortcode'); 
?>