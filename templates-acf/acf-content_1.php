<?php
/** Template to display content with Header*/
?>
<?php
$content = get_sub_field('inhalt_mit_uberschrift');
// Only do the next steps if we have images.
if ( $content ) :
	// get the columns defined in the page
	$content_columns = intval($content['content_columns']);
?>
			<!-- 3 tabs indent because: body, div#primary, main :see page.php -->
			<section id="inhalt_mit_uberschrift" class="<?php echo $content['background_color'] ?>">
				<div class="container">
					<?php
					// if we have only one column bring it over the whole width.
					if ($content['uberschrift']) :
					?>
					<div class="row">
						<div class="col-md">
							<h2><?php echo $content['uberschrift'] ?></h2>
						</div>
					</div>
					<?php
					endif;
					?>
					<div class="row">
						<?php
						// if we have only one column bring it over the whole width.
						if ( $content_columns === 1) :
						?>
						<div class="col-md">
							<?php echo $content['inhalt'] ?>
						</div>
						<?php
						endif;
						//if we have two columns split it into 2
						if ( $content_columns === 2) :
							?>
							<div class="col-md">
								<?php echo $content['inhalt'] ?>
							</div>
							<div class="col-md">
								<?php echo $content['inhalt_2'] ?>
							</div>
						<?php
						endif;
						// and if we have 3 split it into 3 columns :)
						if ( $content_columns === 3) :
						?>
							<div class="col-md">
								<?php echo $content['inhalt'] ?>
							</div>
							<div class="col-md">
								<?php echo $content['inhalt_2'] ?>
							</div>
							<div class="col-md">
								<?php echo $content['inhalt_3'] ?>
							</div>
						<?php endif;?>
					</div>
				</div>
			</section>




<?php endif; ?>


