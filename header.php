<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amica_ev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,hebrew,latin-ext,vietnamese"
          rel="stylesheet">
	<?php wp_head(); ?>
</head>

<?php echo '<body id="page-top" class="' . join( ' ', get_body_class() ) . '">' . PHP_EOL; ?>
	<section id="header_menu">
		<div  class="container-fluid">
			<div class="row">
				<div >
					<?php wp_nav_menu( array(
						'theme_location' => 'header'
					) ); ?>
				</div>
			</div>
		</div>
	</section>
	<nav class="navbar navbar-expand-lg navbar-light " id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>">AMICA e.V.</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls=""
					aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'container'       => 'div',
				'container_id'    => 'main-nav',
				'container_class' => 'collapse navbar-collapse justify-content-end',
				'menu_id'         => false,
				'menu_class'      => 'navbar-nav',
				'depth'           => 3,
				'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
				'walker'          => new wp_bootstrap_navwalker()
			) );
			?>
		</div> <!-- end container div -->
	</nav>

	<!-- start the content tab and end it in the footer.php -->
	<div id="content" class="site-content">
