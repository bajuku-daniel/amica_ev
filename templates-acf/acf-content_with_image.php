<?php
/** Template to display content with image left or right */
?>
<?php
$content_image = get_sub_field('bild');
$content_image_positon = get_sub_field('bild_position');
$content = get_sub_field('text');

// Only do the next steps if we have content
if ( $content_image ) :
?>
			<!-- 3 tabs indent because: body, div#primary, main :see page.php -->
			<section id="content_with_image">
				<div class="container">
					<div class="row">
						<?php
						if ( $content_image_positon === 'right' ) :
						?>
						<div class="col-md-6">
							<?php echo $content ?>
						</div>
						<div class="col-md-6">
							<img class="img-fluid" src="<?php echo $content_image['sizes']['medium_large'] ?>"/>
						</div>
						<?php
						endif;
						if ( $content_image_positon === 'left' ) :
						?>
						<div class="col-md-6">
							<img class="img-fluid" src="<?php echo $content_image['sizes']['medium_large'] ?>"/>
						</div>
						<div class="col-md-6">
							<?php echo $content ?>
						</div>
						<?php endif; ?>


					</div>
				</div>
			</section>
<?php endif; ?>


