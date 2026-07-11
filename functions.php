<?php
/**
 * GeneratePress child theme functions and definitions.
 */

// Enqueued directly in functions.php runs during theme load (too early); 
// hooks ensure it runs at the correct WordPress lifecycle stage (e.g. wp_enqueue_scripts).

function zonefitness_enqueue_styles() {

    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/main.css',
        array(),
        '1.0'
    );

}
add_action('wp_enqueue_scripts', 'zonefitness_enqueue_styles');

//“Go load the file that registers my Club CPT.”

require get_stylesheet_directory() . '/inc/post-types/club.php'; 
require get_stylesheet_directory() . '/inc/taxonomies/region.php';

/**
 * Change mobile menu breakpoint to 1000px
 */
add_filter( 'generate_mobile_menu_media_query', function() {
    return '(max-width: 1050px)';
} );

add_filter( 'generate_not_mobile_menu_media_query', function() {
    return '(min-width: 1051px)';
} );

// function zonefitness_enqueue_scripts() {

//     wp_enqueue_script(
//         'zonefitness-header',
//         get_stylesheet_directory_uri() . '/js/header.js',
//         array(),
//         '1.0',
//         true
//     );

// }
// add_action('wp_enqueue_scripts', 'zonefitness_enqueue_scripts');