<?php
/** Template to display Hero - hero.php */
?>
<?php
$hero_slides = get_sub_field('slider_bilder');
$count  = 0;
// Only do the next steps if we have images.
if ( $hero_slides ) :
?>
			<!-- 3 tabs indent because: body, div#primary, main :see page.php -->
			<div id="carousel" class="carousel carousel-fade" data-ride="carousel" data-interval="4000">
				<div class="carousel-inner embed-responsive embed-responsive-21by9" role="listbox">
					<?php
					// foreach loop through the hero_slides.
					foreach ( $hero_slides as $slide ) :
					?>
						<div class="carousel-item embed-responsive-item <?php if ( 0 === $count ) : ?>active<?php endif; ?>" >
							<img src="<?php echo $slide['slider-bild']['sizes']['slider_image_big']; ?>" alt="<?php echo $slide['slider-bild']['alt']; ?>" class=" w-100 img-fluid">
							<div class="container">
								<div class="row">
									<div class="carousel-caption">
										<h3><?php echo $slide['uberschrift']; ?></h3>
										<p><?php echo $slide['slider_-_beschreibung']; ?></p>
										<a class="btn btn-lg btn-primary" href="<?php echo $slide['slider_-_button']['url']; ?>" role="button"><?php echo $slide['slider_-_button']['title']; ?></a>
									</div>
								</div>
							</div>
						</div>
						<?php
						$count ++;
					endforeach;
					// End Foreach Images.
					?>
					<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div> <!-- carousel -->

<?php endif; ?>


