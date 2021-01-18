<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kenhcuoi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- fonts -->
  <link href="//fonts.googleapis.com/css?family=Montserrat:400,600&amp;subset=vietnamese" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<script>
jQuery(function() {
  jQuery("#clock").countdown("<?php echo get_field('countdown_date', 'option'); ?>", function(event) {
    var $this = jQuery(this).html(
      event.strftime(
        "" +
        '<span class="wrap-count">%D <span class="break">NGÀY</span> </span>' +
        '<span class="wrap-count">%H <span class="break">GIỜ</span> </span>' +
        '<span class="wrap-count">%M <span class="break">PHÚT</span> </span>' +
        '<span class="wrap-count">%S <span class="break">GIÂY</span> </span>'
      )
    );
  });
})
</script>

<body <?php body_class(array( "index-page" )); ?>>
  <main id="primary" class="site-main">
    <div class="home-wrap">
      <?php 
				get_template_part( 'template-parts/partials/navbar');
				get_template_part( 'template-parts/home/home', 'masthead');

				if ( !is_front_page() ) get_template_part( 'template-parts/partials/masthead', 'global');
				get_template_part( 'template-parts/home/home', 'search');
				if ( !is_front_page() ) get_template_part( 'template-parts/partials/breadcrumb');
			?>