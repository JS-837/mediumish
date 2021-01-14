<?php

/**
 * Add various theme support functions
 * 
 */
function mediumish_theme_support(){
    // Adds dynamic title tag support
    add_theme_support( 'title-tag' );

    // adds custom logo support
    add_theme_support('custom-logo');

    // adds featured images support
    add_theme_support( 'post-thumbnails' );

}

add_action('after_setup_theme', 'mediumish_theme_support');


/**
 * Add dynamic menu support function
 * 
 */
function mediumish_menus(){

    // menu location name => title (shows up in wordpress backend menu options under Display Location)
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );
    
    register_nav_menus($locations);
}

add_action( 'init', 'mediumish_menus' );



/**
 * Enqueue the CSS styles
 * 
 */
function mediumish_register_styles(){

    // Grab the version declared in the style.css 
    $version = wp_get_theme()->get('Version');

    // load styles.
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version, 'all');
    


}

// hook into wp and load the style
add_action('wp_enqueue_scripts', 'mediumish_register_styles');



/**
 * Enqueue the scripts
 * 
 */
function mediumish_register_scripts(){

    // load javascript and place it in the footer (last arg = true)
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

// hook into wp and load the scripts
add_action('wp_enqueue_scripts', 'mediumish_register_scripts');


/**
 * Register widget areas for widgets functionality
 */
function mediumish_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1', // css id
            'description' => 'Sidebar widget area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1', // css id
            'description' => 'Footer widget area'
        )
    );
}

add_action('widgets_init', 'mediumish_widget_areas');

?>