<?php
/**
 * The Footer Elements
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amica_ev
 */

if ( ! is_active_sidebar( 'first-footer-widget-area' ) && ! is_active_sidebar( 'second-footer-widget-area' ) && ! is_active_sidebar( 'third-footer-widget-area' ) ) {
	return;
}
?>
<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-first">
				<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
			<div class="col-md-4 footer-first">
				<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
			<div class="col-md-4 footer-first">
				<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div>
		</div
	</div>
</footer>

<?php
if ( ! is_active_sidebar( 'first-footer-second-layer-widget-area' ) && ! is_active_sidebar( 'second-footer-second-layer-widget-area' ) && ! is_active_sidebar( 'third-footer-second-layer-widget-area' ) ) {
return;
}
?>
<footer id="colophon" class="site-footer-second">
	<div class="container">
		<div class="row">
			<div class="col-md-4 footer-second">
				<?php dynamic_sidebar( 'first-footer-second-layer-widget-area' ); ?>
			</div>
			<div class="col-md-4 footer-second">
				<?php dynamic_sidebar( 'second-footer-second-layer-widget-area' ); ?>
			</div>
			<div class="col-md-4 footer-second">
				<?php dynamic_sidebar( 'third-footer-second-layer-widget-area' ); ?>
			</div>
		</div
	</div>
</footer>
