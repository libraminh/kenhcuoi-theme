<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenhcuoi
 */

 $args = array(
  'name' => 'Ảnh Cưới Liên Quan'
 );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('promotion-detail'); ?>>

  <?php get_template_part( 'template-parts/post/post', 'header' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'gallery' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'title' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'metadata-default' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'more-link' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'content' ); ?>
  <?php get_template_part( 'template-parts/post/post', 'share-bar'); ?>
  <?php get_template_part( 'template-parts/partials/post', 'ads'); ?>

  <div class="margin-box"></div>

  <?php get_template_part( 'template-parts/post/post', 'related', $args); ?>
  <?php get_template_part( 'template-parts/post/post', 'show-all'); ?>

  <footer class="entry-footer">
    <?php kenhcuoi_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->