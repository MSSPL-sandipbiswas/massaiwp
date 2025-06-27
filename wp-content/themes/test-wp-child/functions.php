<?php
/*--------------------------------------------------------------
Remove Emoji
----------------------------------------------------------------*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
/*--------------------------------------------------------------
Disable responsive image 
----------------------------------------------------------------*/
add_filter('wp_get_attachment_image_attributes', function ($attr) {
    if (isset($attr['sizes'])) unset($attr['sizes']);
    if (isset($attr['srcset'])) unset($attr['srcset']);
    return $attr;
}, PHP_INT_MAX);
// Override the calculated image sizes
add_filter('wp_calculate_image_sizes', '__return_false', PHP_INT_MAX);
// Override the calculated image sources
add_filter('wp_calculate_image_srcset', '__return_false', PHP_INT_MAX);
// Remove the reponsive stuff from the content
remove_filter('the_content', 'wp_make_content_images_responsive');
// This theme uses post thumbnails
add_action('init', 'my_custom_init');
function my_custom_init() {
    //add_post_type_support( 'page', 'excerpt' );
    
}
//Dequeue JavaScripts
function project_dequeue_unnecessary_scripts() {
    wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
}
add_action('wp_enqueue_scripts', 'project_dequeue_unnecessary_scripts', 999);

/*--------------------------------------------------------------
Custom include custom Style
----------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'register_child_theme_styles', 998);
function register_child_theme_styles() {
    wp_dequeue_style('twenty-twenty-one-style');
    wp_deregister_style('twenty-twenty-one-style');
    wp_dequeue_style('twenty-twenty-one-print-style');
    wp_deregister_style('twenty-twenty-one-print-style');

   
        wp_register_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array() , null, 'all');
        wp_enqueue_style('style');

    

}
/*--------------------------------------------------------------
Custom include custom jQuery
----------------------------------------------------------------*/
// function shapeSpace_include_custom_jquery() {
//     wp_enqueue_script('jquery');
// }
// add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery', 999);
add_action('wp_enqueue_scripts', 'wpEnqueueScripts');
function wpEnqueueScripts() {


        //wp_register_script('bootstrap.bundle.min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', array(), true, true);
        //wp_enqueue_script('bootstrap.bundle.min');

    
            // wp_register_script('mass-main-js', get_stylesheet_directory_uri() . '/assets/js/mass-main.js', array(), true, true);
            // wp_enqueue_script('mass-main-js');

            

}

// 

