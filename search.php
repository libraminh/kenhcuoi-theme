<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kenhcuoi
 */

get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">

		<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'kenhcuoi' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header>
				<!-- .page-header -->

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
						// get_template_part( 'template-parts/content/content', get_post_type() );
						get_template_part( 'template-parts/partials/post', 'list', get_post_type() );
						$index_post++;

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content/content', 'none' );

				endif;
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
