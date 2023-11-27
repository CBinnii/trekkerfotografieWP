
        <footer class="footer">
            <div class="container">
                <div class="partner">
                    <?php 
                        $footer_text = get_field('footer_text','option');
                        $facebook = get_field('facebook', 'option');
                        $instagram = get_field('instagram', 'option');
                        $linkedin = get_field('linkedin', 'option');
                    ?>

                    <?php if( !empty($footer_text) ): ?>
                        <?php echo $footer_text ?>
                    <?php endif; ?>

                    <div class="button">
                        <?php if( !empty($facebook) ): ?>
                            <a href="<?php echo $facebook; ?>" target="_blank" class="button-default transparent p-0">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/facebook.svg" alt="Facebook Icon">
                            </a>
                        <?php endif; ?>
                        <?php if( !empty($instagram) ): ?>
                            <a href="<?php echo $instagram; ?>" target="_blank" class="button-default transparent p-0">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/instagram.svg" alt="Instagram Icon">
                            </a>
                        <?php endif; ?>
                        <?php if( !empty($linkedin) ): ?>
                            <a href="<?php echo $linkedin; ?>" target="_blank" class="button-default transparent p-0">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/linkedin.svg" alt="LinkedIn Icon">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </footer>

		<?php wp_footer(); ?>
        <!-- JQuery JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
        <!-- Lightbox JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fslightbox.js"></script>
        <!-- Swiper JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
        <!-- App JS -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>
    </body>
</html>