<?php
/**
 * Template Name: Custom Post Layout
 * The template for single post
 * Template Post Type: post, video
 */

get_header();
require get_template_directory() . '/inc/query-posts-tax.php';
?>
      
  <div class="home-sections">
    <div class="container">
    
      <section class="home-ads">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/home/home-ads.png" alt=""></a>
      </section>          

      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8">
          <?php get_template_part( 'template-parts/home/home', 'showcase'); ?>

          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/partials/post', 'ads'); ?>

          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/home/home', 'service'); ?>

          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/partials/post', 'ads'); ?>

          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/home/home', 'promotion'); ?>
          
          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/home/home', 'collection'); ?>
          
          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/home/home', 'idea'); ?>

          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/home/home', 'video'); ?>
          
          <div class="margin-box"></div>

          <?php get_template_part( 'template-parts/home/home', 'gallery'); ?>
        </div>

        <div class="hidden-xs col-sm-4 col-md-4">
          <?php get_template_part( 'template-parts/partials/main', 'sidebar'); ?>
        </div>
      </div>

      <div class="margin-box"></div>

      <?php get_template_part( 'template-parts/home/home', 'sale'); ?>

      <div class="margin-box"></div>

      <?php get_template_part( 'template-parts/home/home', 'subscribe'); ?>
    </div>
  </div>
<?php

get_footer();
