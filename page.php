<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amica_ev
 */
get_header();
?>
	<!-- two tabs indent because we have a div "content" in the header and the body tag -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					// are there any rows within within our flexible content?
					if ( have_rows( 'page_content_container_1' ) ) :
						while ( have_rows( 'page_content_container_1' ) ) :
							the_row();
							// HERO Section - base on bootsrap4 carousel.
							if ( get_row_layout() === 'hero_slider_group' ) {
								get_template_part( 'templates-acf/acf', 'hero' );
							}
							// CONTENT 1 Section - Normal Content with Header.
							if ( get_row_layout() === 'content_1_header_group' ) {
								get_template_part( 'templates-acf/acf', 'content_1' );
							}
							// Paralax Region.
							if ( get_row_layout() === 'text_mit_hintergrundbild_-_paralax' ) {
								get_template_part( 'templates-acf/acf', 'paralax' );
							}
							// Bild mit Text Region.
							if ( get_row_layout() === 'text_mit_bild' ) {
								get_template_part( 'templates-acf/acf', 'content_with_image' );
							}
							// Spacer Region.
							if ( get_row_layout() === 'spacer_with_color' ) {
								get_template_part( 'templates-acf/acf', 'spacer' );
							}
						endwhile; // close the loop of flexible content
					endif; // close flexible content conditional.
				endwhile;
			endif;
			?>
		</main>
	</div><!-- #primary -->
<?php
get_footer();
