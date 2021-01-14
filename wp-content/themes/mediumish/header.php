<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZB0FV83QX"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SZB0FV83QX');
    </script>

    <!-- print scripts and data in the head tag -->
    <?php wp_head(); ?>
</head>
    <div class="my-site-name">
        <?php echo get_bloginfo('name'); ?>
    </div>
    <div class="my-logo">
    <?php if(function_exists('the_custom_logo')){

        // $custom_logo_id = get_theme_mod( 'custom_logo' ); // get the data of 'custom_logo'
        // $logo = wp_get_attachment_image_src($custom_logo_id); // stuff it into logo

        the_custom_logo();
    } ?>
    </div>

    <!-- print out logo, multidimensional array. First element is the src. -->
    <!-- <img class="my-logo" src="<?php echo $logo[0] ?>"> -->

    <!-- Grab the dynamic menu -->
    <?php
        wp_nav_menu( 
            array(
                'menu' => 'primary', // name of menu to output
                'container' => '',
                'theme_location' => 'primary', // sets this location as 'primary' location.
                'items_wrap' => '<ul id="myIds" class="myClasses">%3$s</ul>' // prevent wordpress from injecting lotsa classes to the UL. Supply your own stuff!
            )
        );
    ?>

    <!-- Output Widget area -->
    <?php
        dynamic_sidebar('sidebar-1');
    ?>
<body>