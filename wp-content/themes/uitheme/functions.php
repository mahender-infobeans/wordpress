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
//cpt ends here for portfolio page

//cpt for team page
function team_members() {
    register_post_type('Team', array(
        'label' => __('Team'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
    ));
}
add_action('init', 'team_members');

//cpt ends here for team page

function about_you() {
    register_post_type('about', array(
        'label' => __('about'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
    ));
}
add_action('init', 'about_you');





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


// theme panel option
// function theme_settings_page(){}
 
// function add_theme_menu_item()
// {
//     add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
// }

// add_action("admin_menu", "add_theme_menu_item");

?>

