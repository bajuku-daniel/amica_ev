<?php
/** Template to display Hero - hero.php */
?>
<?php
$spacer_color = get_sub_field('farbe');
// Only do the next steps if we have images.
if ( $spacer_color ) :
?>
			<!-- 3 tabs indent because: body, div#primary, main :see page.php -->
			<section id="spacer" class="<?php echo $spacer_color ?>">
			</section>

<?php endif; ?>


