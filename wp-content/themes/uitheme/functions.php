<?php 
// custom fields added in this file.
require_once(TEMPLATEPATH . '/functions/admin-menu.php');

// logo image
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	'container_class' => array( 'navigation-hide-onscroll' ),
) );
add_theme_support( 'custom-logo' );


// navigation menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// cpt for projects in portfolio page
add_theme_support('post-thumbnails');
function portfolio_projects() {
    register_post_type('projects', array(
        'label' => __('projects'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
    ));
}
add_action('init', 'portfolio_projects');













function skematik_jquery_js(){
    wp_enqueue_script('jquery');
}

function wpt_register_js() {
    wp_register_script(
        'jquery.bootstrap.min', 
        get_template_directory_uri() . 'assets/js/bootstrap.min.js', 
        'jquery'
    );
    wp_enqueue_script('jquery.bootstrap.min');
}

/* Load Scripts */
add_action( 'wp_enqueue_scripts', 'skematik_jquery_js' );
add_action( 'wp_enqueue_scripts', 'wpt_register_js' );



function wpt_register_css() {
    wp_register_style(
        'bootstrap.min', 
        get_template_directory_uri() . 'assets/css/bootstrap.min.css'
    );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

?>