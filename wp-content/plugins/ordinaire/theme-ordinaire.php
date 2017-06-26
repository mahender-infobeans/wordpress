<?php
/*
 * Plugin Name: Theme Ordinaire
 * Description: Theme Ordinaire Plugin registers custom post type support for Theme Ordinaire Theme.
 * Version: 1.0
 * Author: Shiva
 */


// cpt for projects in portfolio page
add_action('init', 'portfolio_projects');

//portfolio projects cpt
function portfolio_projects() {
    register_post_type('projects', array(
        'label' => ('Projects'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
        'public'  => true,
        ));
    
}
//cpt ends here for portfolio page

//cpt for team page
function team_members() {
    register_post_type('team', array(
        'label' => ('Team'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
        'public'  => true,
        ));
}
add_action('init', 'team_members');

//cpt ends here for team page

//cpt for about us page tabs
function about_you() {
    register_post_type('about', array(
        'label' => ('About-Tabs'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
        'public'  => true,
        ));
}
add_action('init', 'about_you');




//cpt for services page tabs
function service_tabs() {
    register_post_type('servicestab', array(
        'label' => ('Service-Tabs'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
        'public'  => true,
        ));
}
add_action('init', 'service_tabs');

//cpt for services block
function service_blocks() {

    register_post_type('services', array(
        'label' => ('Services'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions','custom-fields'),
        'show_ui' => true,
        'public'  => true,
        ));
}
add_action('init', 'service_blocks');

//cpt for services block
function home_block() {

    register_post_type('homeblock', array(
        'label' => ('Home-Parallex'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions'),
        'show_ui' => true,
        'show_in_menu'  => true,
        'public'  => true,
        ));
}
add_action('init', 'home_block');



//cpt for home page slider
add_action( 'init', 'bootstrap_slider' );

function bootstrap_slider() {
    $labels = array(
        'name'               => _x( 'Slider', 'ordinaire'),
        'singular_name'      => _x( 'Slide', 'ordinaire'),
        'menu_name'          => _x( 'Slider', 'admin menu'),
        'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
        'add_new'            => _x( 'Add New', 'Slide'),
        'add_new_item'       => __( 'Name'),
        'new_item'           => __( 'New Slide'),
        'edit_item'          => __( 'Edit Slide'),
        'view_item'          => __( 'View Slide'),
        'all_items'          => __( 'All Slide'),
        'featured_image'     => __( 'Featured Image', 'ordinaire' ),
        'search_items'       => __( 'Search Slide'),
        'parent_item_colon'  => __( 'Parent Slide:'),
        'not_found'          => __( 'No Slide found.'),
        'not_found_in_trash' => __( 'No Slide found in Trash.'),
        );

    $args = array(
        'labels'             => $labels,
        'menu_icon'      => 'dashicons-star-half',
        'description'        => ( 'Description.'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail','revisions')
        );

    register_post_type( 'slider', $args );
}
