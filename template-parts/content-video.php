<?php
  if ($GLOBALS['index_post'] == 1) { ?>
    <div class="col-md-12">
      <?php get_template_part( 'template-parts/global/post', 'main', get_post_type() ); ?>
    </div>
  <?php }
?>

<?php 
  if ($GLOBALS['index_post'] > 1) { ?>
    <div class="col-sm-6 col-md-6">
      <?php get_template_part( 'template-parts/video/video', 'item' ); ?>
      <div class="margin-box-1"></div>
    </div>
  <?php }
?>