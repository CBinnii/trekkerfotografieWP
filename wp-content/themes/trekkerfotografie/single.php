<?php 
	get_header();
?>

    <section class="single">
        <div class="section">
            <div class="container">
                <div class="row m-0">
                    <div class="col-12">
                        <div class="text">
                            <h1><?php echo get_the_title(); ?></h1>
                            <h3><?php echo $post->post_excerpt; ?></h3>
            
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>

                <div class="gallery">
                    <div class="row m-0">
                        <?php 
                            $images = get_field('images');
                            if( $images ):
                                foreach( $images as $image_id ): ?>
                                    <a data-fslightbox="gallery_1" class="col-md-6" href="<?php echo $image_id; ?>">
                                        <div class="image" style="background-image: url('<?php echo $image_id; ?>');"></div>
                                    </a>
                                <?php endforeach;
                            endif; 
                        ?>

                        <?php 
                            $youtube_url = get_field('youtube_url');
                            $youtube_thumb = get_field('youtube_thumb');
                            if( $youtube_url ): ?>
                                <a data-fslightbox="gallery_2" class="col-md-12" href="<?php echo $youtube_url; ?>">
                                    <div class="image video" style="background-image: url('<?php echo $youtube_thumb; ?>');"></div>
                                </a>
                            <?php endif; 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
	get_footer();
?>