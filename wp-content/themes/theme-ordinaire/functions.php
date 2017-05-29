<?php 
// custom fields added in this file.
require_once(TEMPLATEPATH . '/functions/admin-menu.php');
require_once(TEMPLATEPATH . '/functions/mapfunctions.php');
require_once(TEMPLATEPATH.  '/functions/class-tgm-plugin-activation.php');
// logo image
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
    'public'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    'container_class' => array( 'navigation-hide-onscroll' ),
    ) );
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');

// navigation menu
function register_my_menu() {
  register_nav_menu('header-menu',( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



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


// adding title tag 
add_theme_support( 'title-tag' );


// wp link pages
$defaults = array(
        'before'           => '<p>' . ( 'Pages:' ),
        'after'            => '</p>',
        'link_before'      => '',
        'link_after'       => '',
        'next_or_number'   => 'number',
        'separator'        => ' ',
        'nextpagelink'     => ( 'Next page' ),
        'previouspagelink' => ( 'Previous page' ),
        'pagelink'         => '%',
        'echo'             => 1
    );
 
        wp_link_pages( $defaults );

// theme support added
        add_theme_support( 'automatic-feed-links' );




$defaults = array(
    'default-image'          => '',
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => true,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );




//add_theme_support( "custom-background", $args );
$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );


// sidebar added
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-ordinaire' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-ordinaire' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
    ) );
}

?>

