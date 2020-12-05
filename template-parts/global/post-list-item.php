<div class="media">
  <div class="row">
    <div class="col-md-4">
      <div class="post-list-wrap">
        <?php 
          require get_template_directory() . '/inc/post-thumbnail-alt.php';
          $tex = get_the_category();
        ?>
        <a href="<?php echo the_permalink(); ?>">
          <img style="height: 140px; object-fit: cover; object-position: center;" class="media-object" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
          <p class="home-showcase-wrap-title text-uppercase"><?php echo $tex[0]->name ?></p>
        </a>
      </div>
    </div>

    <div class="col-md-8">
      <a href="<?php echo the_permalink(); ?>">
        <h4 class="media-heading text-uppercase"><strong><?php echo the_title(); ?></strong></h4>
      </a>
      <small class="home-showcase-date">
        <?php the_date('M d, yy'); ?> 
        <span class="divine-2">|</span>
        <?php if ( function_exists('wpp_get_views') ) echo wpp_get_views(get_the_ID()); ?>  Views
      </small>
      <div class="margin-box-1"></div>
      <div>
        <?php the_excerpt(); ?> 
      </div>
    </div>
  </div>
</div>