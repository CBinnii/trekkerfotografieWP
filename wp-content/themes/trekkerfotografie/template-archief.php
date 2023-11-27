<?php 
/**
 * Template Name: Archief Page
 *
 **/
	get_header();
?>

    <section class="main">
        <div class="section">

            <?php
                $args = array(
                    'post_type' => 'post',
                    'status' => 'publish',
                    'showposts' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $more = new WP_Query( $args );

			    if (!empty($more->posts)): ?>

                    <div class="section-services">
                        <div class="row m-0">
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
                    </div>
                <?php endif;
                wp_reset_query();
            ?>

            
        </div>
    </section>

<?php
	get_footer();
?>