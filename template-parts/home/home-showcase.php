<section class="home-showcase">
  <div class="owl-carousel owl-theme showcase-global">
    <?php 
    $perPage = 5;
    $the_query = new WP_Query( 'posts_per_page=' . $perPage ); 
    
    while ($the_query -> have_posts()) : $the_query -> the_post(); 

    get_template_part( 'template-parts/global/post', 'main');
    ?>
    <?php 
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
  
  <div class="row">
    <?php 
      $the_query = new WP_Query( 'posts_per_page=' . ($perPage - 1) . '&offset=' . $perPage ); 
      
      while ($the_query -> have_posts()) : $the_query -> the_post(); 

      get_template_part( 'template-parts/global/post', 'tiny');
      ?>
      <?php 
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
</section>