<div class="col-md-6">
  <div class="media">
    <div class="media-left">
      <a href="<?php the_permalink();?>">
        <img style="width: 170px; height: 125px; object-fit: cover; object-position: center;" class="media-object" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="...">
      </a>
    </div>  

    <div class="media-body">
      <a href="<?php the_permalink();?>">
        <h4 class="media-heading text-uppercase"><strong><?php the_title(); ?></strong></h4>
      </a>
      <small class="home-showcase-date"><?php the_date('M d, yy'); ?> <span class="divine-2">|</span>09 Views</small>
    </div>
  </div>
</div>