<?php
/** Template to display Hero - hero.php */
?>
<?php
$paralax_image = get_sub_field('hintergrundbild');
$paralax_text = get_sub_field('text');

// Only do the next steps if we have images.
if ( $paralax_image ) :
?>
			<!-- 3 tabs indent because: body, div#primary, main :see page.php -->
			<div id="paralax" style="background-image: url('<?php echo $paralax_image['sizes']['slider_image_big'] ?>')" class="">
				<div class="container paralax-inner">
					<div class="col-md-6 mx-auto">
						<h3><?php echo $paralax_text ?></h3>


					</div>

				</div>

			</div> <!-- paralax -->

<?php endif; ?>


