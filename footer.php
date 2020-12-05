<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kenhcuoi
 */

?>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
			</div>

			<div class="margin-box"></div>

			<?php get_template_part( 'template-parts/global/footer', 'copyright'); ?>
		</footer>
	</div>
</main><!-- #main -->


<?php wp_footer(); ?>

</body>
</html>
