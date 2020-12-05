<section class="home-idea">
  <div class="row">
    <div class="col-md-6">
      <div class="box-title">
        <h4 class="text-uppercase"><strong>Ý Tưởng Cưới</strong></h4>
      </div>
    </div>

    <div class="col-md-6 padding-off">
      <?php
        get_template_part( 'template-parts/global/menu', 'tiny');
      ?>
    </div>
  </div>

  <div class="margin-box"></div>

  <?php
    $the_query = setPostTerms('y_tuong_cuoi');
  ?>
  
  <div class="home-showcase">           
    <?php 
      $post_idx = 0; while ( $the_query->have_posts() ) :
      $the_query->the_post();
      
      if ($post_idx > 0) continue;
      get_template_part( 'template-parts/global/post', 'main');
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
          get_template_part( 'template-parts/global/post', 'tiny-tag');
        ?>
      </div>

      <?php $post_idx++; endwhile; wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="margin-box"></div>

  <div class="show-all">
    <a href="#">
      <h5 class="text-uppercase"><strong>Xem Tất Cả</strong></h5>
    </a>
  </div>
</section>