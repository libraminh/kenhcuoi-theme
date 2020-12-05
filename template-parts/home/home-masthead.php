<section class="home-carousel">
  <div class="home-carousel-wrap">
    <img class="lace" src="<?php echo get_template_directory_uri(); ?>/img/home/ren4.svg" alt="">
    <img class="lace lace-bottom" src="<?php echo get_template_directory_uri(); ?>/img/home/ren.svg" alt="">

    <?php $slider = get_field('slider_post'); ?>

    <?php if( have_rows('masthead_slider', $slider->ID) ): ?>
      <div class="owl-carousel owl-theme home-carousel-wrap-carousel">
        <?php while( have_rows('masthead_slider', $slider->ID) ): the_row(); 
          $image = get_sub_field('image');
          $link = get_sub_field('link');
        ?>
      
          <div class="item">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <div class="home-carousel-wrap-carousel-title">
              <a class="text-uppercase" href="<?php echo $link['url'] ?>">
                <strong><?php echo $link['title']; ?></strong>
              </a>
            </div>
          </div>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>