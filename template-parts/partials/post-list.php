<div class="row post-list-content">
  <div class="col-md-12">
    <?php
      if ($GLOBALS['index_post'] == 1) get_template_part( 'template-parts/partials/post', 'main', get_post_type() );
    ?>
  </div>

  <div class="col-md-12">
    <?php 
      if ($GLOBALS['index_post'] > 1) {
        get_template_part( 'template-parts/partials/post', 'list-item', get_post_type() ); 
      }
    ?>
  </div>
</div>