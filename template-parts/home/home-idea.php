<section class="home-idea">
  <div class="row">
    <div class="col-md-6">
      <div class="box-title">
        <h4 class="text-uppercase"><strong>Ý Tưởng Cưới</strong></h4>
      </div>
    </div>

    <div class="col-md-6 padding-off">
      <?php 
        $args = array(
          'menu' => 'Menu Idea'
        );

        get_template_part( 'template-parts/partials/menu', 'tiny', $args);
      ?>
    </div>
  </div>

  <div class="margin-box"></div>

  <?php
    $queryPostType = 'ideas';
    $the_query = queryPosts($queryPostType);
  ?>

  <div class="home-showcase">
    <?php 
      $post_idx = 0; while ( $the_query->have_posts() ) :
      $the_query->the_post();
      
      if ($post_idx > 0) continue;
      get_template_part( 'template-parts/partials/post', 'main');
      $post_idx++;
      endwhile;
    ?>

    <div class="row">
      <?php 
        $post_idx = 0; while ( $the_query->have_posts() ) :
        $the_query->the_post();
        if ($post_idx == 0) {
          $post_idx++;
          continue;
        };
      ?>
      <div class="col-md-6">
        <?php
          get_template_part( 'template-parts/partials/post', 'tiny-tag');
        ?>
      </div>

      <?php $post_idx++; endwhile; wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="margin-box"></div>

  <div class="show-all">
    <a href="/<?php echo $queryPostType; ?>">
      <h5 class="text-uppercase"><strong>Xem Tất Cả</strong></h5>
    </a>
  </div>
</section>