<?php 
  $cate_slug = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  $cate_name = get_category_by_slug($cate_slug)->name;
  $post_type = get_post_type_object(get_post_type());
  $title = (!empty($cate_name)) ? $cate_name : $post_type->labels->name;
?>

<section class="masthead--global">
  <div class="home-carousel-wrap">
    <img class="lace-shadow" src="<?php echo get_template_directory_uri(); ?>/img/home/ren-shadow.png" alt="">
    <img class="lace-shadow" src="<?php echo get_template_directory_uri(); ?>/img/home/ren-shadow-bottom.png" alt="">
    <div class="home-carousel-wrap-carousel1">
      <img src="<?php echo get_template_directory_uri(); ?>/img/carousel-bg.png" alt="">

      <?php if (is_archive()) : ?>
      <div class="container">
        <h3 class="text-uppercase carousel-title"><?php echo $title; ?></h3>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>