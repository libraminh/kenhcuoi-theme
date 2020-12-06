<?php 
  add_filter( 'wpseo_breadcrumb_single_link', 'change_breadcrumb_link_class', 10, 2); 
  function change_breadcrumb_link_class($link_output, $link) {  
    $output .= '
      <li><a href="' . $link['url'] . '">' . $link['text'] . '</a></li>
    ';
    return $output;
  }

  function filter_wpseo_breadcrumb_output( $output ) { 
    return str_replace(array("<span>","</span>"), "", $output);
  }; 
          
  // add the filter 
  add_filter( 'wpseo_breadcrumb_output', 'filter_wpseo_breadcrumb_output', 10, 1 ); 
?>

<div class="breadcrumb-wrap">
  <div class="container">
    <ol class="breadcrumb breadcrumb-1 text-uppercase">
      <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<ol id="breadcrumbs" class="breadcrumb breadcrumb-1 text-uppercase">','</ol>' );
        };
      ?>
    </ol>
  </div>
</div>
