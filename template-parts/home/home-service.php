<section class="home-service">
  <div class="box-title">
    <h4 class="text-uppercase"><strong>Dịch Vụ Cưới</strong></h4>
  </div>

  <div class="margin-box"></div>

  <div class="row">
    <?php 
      $query_taxo = 'dich_vu';
      $args = array(
        'orderby' => 'name',
        'order'   => 'ASC',
        'taxonomy' => $query_taxo,
        'hide_empty' => false
      );
      $categories = get_categories($args);

      foreach($categories as $category) : ?>
      <?php
        $image = get_field('image', 'term_' . $category->term_id);
        $icon = get_field('icon', 'term_' . $category->term_id);
        $link_url = $category->taxonomy . '/' . $category->slug;
      ?>

      <div class="col-xs-12 col-sm-6 col-md-3 padding-off" style="height: 217px;">
        <a href="<?php echo $link_url; ?>">
          <div class="home-service-wrap">
            <div class="home-service-wrap-box">
              <img class="home-service-thumb" src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>">
              <div class="home-service-overlay"></div>
            </div>
            <img class="home-service-lace" src="<?php echo get_template_directory_uri(); ?>/img/home/service/circle-lace.png" alt="<?php echo $alt; ?>">
            <img class="home-service-icon hoacuoi-icon" src="<?php echo $icon["url"]; ?>" alt="">
            <h4 class="text-uppercase"><?php echo $category->name; ?></h4>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>