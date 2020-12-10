<div class="post-video-showcase-metadata">
  <p class="text-accent text-uppercase">
    <small class="home-showcase-date"><?php echo get_the_date('d . m . yy'); ?> <span class="divine-2">|</span>
      <?php if ( function_exists('wpp_get_views') ) echo wpp_get_views(get_the_ID()); ?> Lượt xem</small>
  </p>
  <small class="home-popular-date">
    <!-- views -->
    <?php if ( function_exists('wpp_get_views') ) echo wpp_get_views(get_the_ID()); ?>
    <i class="fa fa-eye" aria-hidden="true"></i>
    <!-- comments -->
    | <?php echo get_comments_number(get_the_ID()); ?> <i class="fa fa-comment" aria-hidden="true"></i>
  </small>
</div>