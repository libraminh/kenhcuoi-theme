<section class="home-sale">
  <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-10">
    <?php if( have_rows('home_sales_repeater', 'option') ): ?>
    <?php while( have_rows('home_sales_repeater', 'option') ): the_row(); 
          $image = get_sub_field('image');
          $link = get_sub_field('post');
          ?>
    <figure>
      <div class="home-sale-box">
        <a href="<?php echo $link['url'] ?>">
          <img src="<?php echo $image['url']; ?>" alt="">
        </a>
      </div>
    </figure>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>