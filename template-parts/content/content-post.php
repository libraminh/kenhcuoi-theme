<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenhcuoi
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('promotion-detail'); ?>>
  <?php get_template_part( 'template-parts/post/post', 'header' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'showcase' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'title' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'metadata-default' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'studio-information' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'more-link' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'content' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'share-bar'); ?>
  <?php get_template_part( 'template-parts/partials/post', 'ads'); ?>

  <div class="margin-box"></div>

  <?php get_template_part( 'template-parts/post/post', 'related'); ?>

  <div class="show-all">
    <a href="#">
      <h5 class="text-uppercase"><strong>Xem Tất Cả</strong></h5>
    </a>
  </div>

  <footer class="entry-footer">
    <?php kenhcuoi_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->