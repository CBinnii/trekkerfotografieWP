<?php 
/**
 * Template Name: Contact Page
 *
 **/
	get_header();
?>

	<section class="main">
		<div class="contact-page">
			<div class="container">
				<h1 class="title black text-left"><?php echo get_the_title(); ?></h1>

				<div class="row">
					<div class="col-12 col-md-6">
						<div class="contact-list">
							<ul>
								<li>
									<?php
										$parentesis = array("(", ")", " ");
										$tel = str_replace($parentesis, "", get_field('phonenumber'));

										$phonenumber = get_field('phonenumber');

										if (!empty($phonenumber)) :
									?>
										<h4 class="col-12 col-md-6">TELEFOONNUMMER</h4>
										<p class="col-12 col-md-6"><a href="tel:<?php echo $tel; ?>" target="_blank"><?php echo $phonenumber; ?></a></p>
									<?php endif; ?>
								</li>
								<li>
									<?php
										$email = get_field('email');

										if (!empty($email)) :
									?>
										<h4 class="col-12 col-md-6">EMAIL</h4>
										<p class="col-12 col-md-6"><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></p>
									<?php endif; ?>
								</li>
								<li>
									<?php
										$whatsapp = get_field('url_whatsapp');

										if (!empty($whatsapp)) :
									?>
										<h4>WHATSAPP</h4>
										<p class="col-12 col-md-6">
											<a href="<?php echo $whatsapp; ?>" target="_blank">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp-color.svg" alt="Whatsapp Icon" width="37" height="37">
											</a>
										</p>
									<?php endif; ?>
								</li>
								<li>
									<?php
										$facebook = get_field('url_facebook');
										$instagram = get_field('url_instagram');

										if (!empty($facebook) || !empty($instagram)) :
									?>
										<h4 class="col-12 col-md-6">SOCIAL</h4>
										
										<div class="col-12 col-md-6">
											<?php
												if (!empty($facebook)) :
											?>
												<a href="<?php echo $facebook; ?>" target="_blank">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/facebook.svg" alt="Facebook Icon" width="37" height="37">
												</a>
											<?php endif; ?>
											<?php
												if (!empty($instagram)) :
											?>
												<a href="<?php echo $instagram; ?>" target="_blank">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/instagram.svg" alt="Instagram Icon" width="37" height="37">
												</a>
											<?php endif; ?>
										</div>
										<?php endif; ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="contact-form">
							<?php echo do_shortcode('[contact-form-7 id="16f3daf" title="Contact form"]') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php
	get_footer();
?>