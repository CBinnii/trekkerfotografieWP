<?php 
	get_header();
?>

    <section class="main">
        <?php 
            $video = get_field('video');
            // $image_video = get_field('image_video');
        ?>
        <div class="slider">
            <div class="swiper slider-home">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-general video">
                            <video id="background-video" autoplay loop muted>
                                <source src="<?php echo $video; ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination swiper-pagination-slider-home"></div>
        </div>

        <div class="section">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'status' => 'publish',
                    'showposts' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $more = new WP_Query( $args );

			    if (!empty($more->posts)): ?>

                    <div class="section-services">
                        <div class="row">
                            <?php foreach ( $more->posts as $post ): /*echo '<pre>'; var_dump($post); echo '</pre>';*/ ?>
                                <div class="col-md-4">
                                    <a href="<?php echo $post->post_name; ?>">
                                        <div class="swiper-slide" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>');">
                                            <div class="content-text">
                                                <p class="text-title alt-font"><?php echo get_the_title($post->ID); ?></p>
                                                <p class="text-subtitle"><?php echo $post->post_excerpt; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="swiper-pagination  swiper-pagination-slider-services"></div>
                    </div>
            
                <?php endif;
                wp_reset_query();
            ?>

            <?php
                $args = array(
                    'post_type' => 'clients',
                    'status' => 'publish',
                    'showposts' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );

                $more = new WP_Query( $args );

			    if (!empty($more->posts)): ?>

                    <div class="section-clients">
                        <div class="clients">
                            <!-- Swiper -->
                            <div class="clients-bg">
                                <div class="swiper swiper-clients">
                                    <div class="swiper-wrapper">
                                        <?php 
                                            foreach ( $more->posts as $post ): 
                                            $link = get_field('website');
                                        ?>
                                            <div class="swiper-slide">
                                                <?php if($link):?> <a href="<?php echo $link ?>" target="_blank"> <?php endif;?>
                                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(), 'full');?>" alt="<?php echo get_the_title($post->ID); ?>">
											    <?php if($link):?> </a> <?php endif;?>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>
                                
                                <div class="swiper-pagination swiper-pagination-slider-clients"></div>
                            </div>
                        </div>
                    </div>
            
                <?php endif;
                wp_reset_query();
            ?>

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
    </section>

<?php
	get_footer();
?>