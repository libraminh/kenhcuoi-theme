<?php 
  $cate_slug = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  $cate_name = get_category_by_slug($cate_slug)->name;
?>

<section class="masthead--global">
  <div class="home-carousel-wrap">
    <img class="lace-shadow" src="<?php echo get_template_directory_uri(); ?>/img/home/ren-shadow.png" alt="">
    <img class="lace-shadow" src="<?php echo get_template_directory_uri(); ?>/img/home/ren-shadow-bottom.png" alt="">
    <div class="home-carousel-wrap-carousel1">
      <img src="<?php echo get_template_directory_uri(); ?>/img/carousel-bg.png" alt="">

      <?php  if (is_archive()) : ?>
      <div class="container">
        <h3 class="text-uppercase carousel-title"><?php if(!empty($cate_name)) echo $cate_name; ?></h3>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>