<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo get_the_title(); ?> - Trekkerfotografie</title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://use.typekit.net/lgk7qgt.css">
    </head>

    <body>
        <header id="header" class="header">
            <div class="inner">
                <a href="<?php echo get_home_url(); ?>" class="logo alt-font header-transition">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-header.png" alt="Logo">
                </a>
            </div>

            <nav class="alt-font header-transition">
                
                <?php
                    wp_nav_menu(array(
                        'theme_location' => '',
                        'menu_id' 		 => 'menu', 
                        'container' 	 => false,
                        'menu_class' 	 => '',
                        'items_wrap' 	 => '<ul id="%1$s" class="tk-fade %2$s">%3$s</ul>',
                        'depth' 		 => 2,
                    ));
                ?>
            </nav>
        </header>