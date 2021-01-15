<section class="home-showcase">
  <div class="owl-carousel owl-theme showcase-global">
    <?php 
      $post_types = get_post_types( array(
        'public' => true,
      ) );
      unset($post_types['page']);
      $perPage = 5;
      $args = array(
        'post_type' => $post_types,
        'posts_per_page' => $perPage
      );
      $the_query = new WP_Query( $args ); 
      while ($the_query -> have_posts()) : $the_query -> the_post(); 
      get_template_part( 'template-parts/partials/post', 'main');
      endwhile;
      wp_reset_postdata();
    ?>
  </div>

  <div class="row">
    <?php 
      $args = array(
        'post_type' => $post_types,
        'posts_per_page' => $perPage - 1,
        'offset' => $perPage,
      );
      $the_query = new WP_Query( $args ); 
      while ($the_query -> have_posts()) : $the_query -> the_post(); 
      get_template_part( 'template-parts/partials/post', 'tiny');
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
</section>