<div class="margin-box-2"></div>
<?php 
  if ( is_singular() ) :
    the_title( '<h4 class="entry-title home-showcase-title text-uppercase"><strong>', '</strong></h4>' );
  else :
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  endif;
?>
<div class="margin-box-2"></div>