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

                                <?php //echo do_shortcode('[contact-form-7 id="1287daa" title="ContactForm"]') ?>
                                <?php echo do_shortcode('[contact-form-7 id="76818d6" title="ContactForm"]') ?>
                            </div>
                        </div>
                    </div>
    
                    <?php 
                        $about_text = get_field('about_text', 'option');
                        $whatsapp = get_field('whatsapp', 'option');
                        $phone = get_field('phone', 'option');
                        $email = get_field('email', 'option');
                    ?>
                    <div class="section-about">
                        <div class="row m-0">
                            <div class="col-md-12 left">
                                <div class="text-box">
                                    <?php if( !empty($about_text) ): ?>
                                        <?php echo $about_text ?>
                                    <?php endif; ?>

                                    <div class="button">
                                        <?php if( !empty($email) ): ?>
                                            <a href="<?php echo $email; ?>" target="_blank" class="button-default btn-default-rounded">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/envelope.svg" alt="Email Icon">
                                            </a>
                                        <?php endif; ?>
                                        <?php if( !empty($phone) ): ?>
                                            <a href="<?php echo $phone; ?>" target="_blank" class="button-default btn-default-rounded">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/phone-alt.svg" alt="Phone Icon">
                                            </a>
                                        <?php endif; ?>
                                        <?php if( !empty($whatsapp) ): ?>
                                            <a href="<?php echo $whatsapp; ?>" target="_blank" class="button-default btn-default-rounded">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/whatsapp.svg" alt="Whatsapp Icon">
                                            </a>
                                        <?php endif; ?>
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