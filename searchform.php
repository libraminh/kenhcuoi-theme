<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>" style="margin-top: 10px;">
    <!-- <label for="search">Search in <?php echo home_url( '/' ); ?></label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" /> -->

  <div class="form-group">
    <input class="form-control" name="s" id="search" type="text" value="<?php the_search_query(); ?>" placeholder="Nhập từ khóa...">
  </div>
</form>