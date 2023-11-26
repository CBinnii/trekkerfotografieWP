<?php 
	get_header('logo');
?>
        <section class="main">
            <div class="_404-page">
                <div class="container">
                    <div class="_404-page-text">
                        <h1 class="title primary text-center">404</h1>
                        <h1>Holy Moly</h1>
            
                        <p>We don’t know how you got here, but you have landed on the wrong page. </p>
                        <p>Don’t worry, though — you can go back or use the navigation above to find your way.</p>
        
                        <div class="button">
                            <a href="<?php echo get_home_url(); ?>" class="button-default primary">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
	get_footer();
?>