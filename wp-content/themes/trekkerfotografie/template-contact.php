<?php 
/**
 * Template Name: Contact Page
 *
 **/
	get_header();
?>

	<section class="main">
        <div class="section">
            <div class="contact">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-12 col-md-6">
                            <div class="contact-list">
							<?php echo apply_filters('the_content', $post->post_content); ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="contact-form">
                                <h3>Contactformulier</h3>
            
                                <div class="wpcf7 js" id="f675-o1" lang="en-GB" dir="ltr">
                                    <form action="#" method="post" class="form init">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <input size="40" class="text form-control" id="naam" aria-invalid="false" placeholder="Naam" value="" type="text" name="naam">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input size="40" class="tel text form-control" id="telefoonnummer" aria-invalid="false" placeholder="Telefoonnummer" value="" type="tel" name="telefoonnummer">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <input size="40" class="email text form-control" id="email" aria-invalid="false" placeholder="Email" value="" type="email" name="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <textarea cols="40" rows="10" class="textarea form-control" id="vraag" aria-invalid="false" placeholder="Stel hier je vraag" name="vraag"></textarea>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <input class="submit has-spinner button-default primary" id="send" type="submit" value="Verstuur">
                                        </div>
                                        <div class="response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="section-about">
                        <div class="row m-0">
                            <div class="col-md-12 left">
                                <div class="text-box">
                                    <p>
                                        Kan ik je helpen met foto’s? <br>
                                        Bel, mail of stuur me een whatsapp-bericht
                                    </p>
    
                                    <div class="button">
                                        <a href="#" target="_blank" class="button-default btn-default-rounded">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/envelope.svg" alt="Email Icon">
                                        </a>
                                        <a href="#" target="_blank" class="button-default btn-default-rounded">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/phone-alt.svg" alt="Phone Icon">
                                        </a>
                                        <a href="#" target="_blank" class="button-default btn-default-rounded">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp.svg" alt="Whatsapp Icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();
?>