<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kenhcuoi
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-8">
			<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content', 'picture' );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kenhcuoi' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kenhcuoi' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
		</div>
		
		<div class="hidden-xs col-sm-4 col-md-4">
			<?php get_template_part( 'template-parts/partials/main', 'sidebar'); ?>
		</div>
	</div>
</div>

<?php
// get_sidebar();
get_footer();
