<section class="idea-detail-showcase collection-detail-showcase beauty-pic-detail-showcase">
  <div class="owl-carousel owl-theme beauty-pic-detail-showcase-carousel">
    <?php if( get_field('beauty_picture_list', get_the_ID()) ): ?>
      <?php while( the_repeater_field('beauty_picture_list', get_the_ID()) ): ?>
        <?php $image = get_sub_field('image'); ?>
        <div class="item" data-hash="<?php echo $image['ID'] ?>">
          <img src="<?php echo $image['url'] ?>" alt="<?php the_sub_field('alt'); ?>" />
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="margin-box-2"></div>

  <div class="owl-carousel owl-theme beauty-pic-detail-showcase-carousel-direction">
    <?php if( get_field('beauty_picture_list', get_the_ID()) ): ?>
      <?php while( the_repeater_field('beauty_picture_list', get_the_ID()) ): ?>
        <div class="item">
          <a class="url" href="#<?php echo $image['ID'] ?>">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<div class="margin-box-3"></div>