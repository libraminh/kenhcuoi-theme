<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenhcuoi
 */

get_header();

require('inc/custom-pagination.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">
				<?php if ( have_posts() ) : ?>

				<!-- <header class="">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header> -->
				<!-- .page-header -->

				<div class="home-showcase">
					<?php
						/* Start the Loop */
						$index_post = 1;
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							// get_template_part( 'template-parts/content', get_post_type() );
							
							get_template_part( 'template-parts/global/post', 'list', get_post_type() );
							$index_post++; endwhile; ?>
				</div>

				<?php
				// the_posts_navigation();
				$pagination_args = array(
					'class' => 'pagination-wrap text-center',
					'prev_text' => __( '<<', 'textdomain' ),
					'next_text' => __( '>>', 'textdomain' ),
				);
				// the_posts_pagination($pagination_args);

				custom_pagination();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				
				?>
			</div>

			<div class="hidden-xs col-sm-4 col-md-4">
				<?php get_template_part( 'template-parts/global/main', 'sidebar'); ?>
			</div>
		</div>
	</div>

<?php
// get_sidebar();
get_footer();
