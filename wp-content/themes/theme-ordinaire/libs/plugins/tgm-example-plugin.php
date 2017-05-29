<?php
/**
 * TGM Example Plugin.
 *
 * Example plugin to demonstrate the ability to handle bundled plugins with the
 * TGM Plugin Activation library.
 *
 * @package     WordPress\Plugins\TGM Example Plugin
 * @author      Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @link        https://github.com/thomasgriffin/TGM-Plugin-Activation
 * @version     1.0.1
 * @copyright   2011-2016 Thomas Griffin
 * @license     http://creativecommons.org/licenses/GPL/3.0/ GNU General Public License, version 3 or higher
 *
 * @wordpress-plugin
 * Plugin Name: TGM Example Plugin
 * Plugin URI:  http://tgmpluginactivation.com/
 * Description: This is an example plugin to going along with the TGM Plugin Activation class.
 * Author:      Thomas Griffin
 * Author URI:  http://thomasgriffinmedia.com/
 * Version:     1.0.1
 * Text Domain: tgm-example-plugin
 * Domain Path: /languages
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 3, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Avoid direct calls to this file.
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! function_exists( 'tgm_php_mysql_versions' ) ) {

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
        'name'               => array( 'Slider', 'post type general name'),
        'singular_name'      => array( 'Slide', 'post type singular name'),
        'menu_name'          => array( 'Slider', 'admin menu'),
        'name_admin_bar'     => array( 'Slide', 'add new on admin bar'),
        'add_new'            => array( 'Add New', 'Slide'),
        'add_new_item'       => array( 'Name'),
        'new_item'           => array( 'New Slide'),
        'edit_item'          => array( 'Edit Slide'),
        'view_item'          => array( 'View Slide'),
        'all_items'          => array( 'All Slide'),
        'featured_image'     => array( 'Featured Image', 'text_domain' ),
        'search_items'       => array( 'Search Slide'),
        'parent_item_colon'  => array( 'Parent Slide:'),
        'not_found'          => array( 'No Slide found.'),
        'not_found_in_trash' => array( 'No Slide found in Trash.'),
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




}
