<?php 

// Add our Stylesheet
function load_stylesheets() 
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Add bootstrap
function wpbootstrap_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
    }
    add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

// Add JavaScript
function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// Add menus
add_theme_support('menus');

// Register menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

?>