<?php 
// custom fields added in this file.
require_once(TEMPLATEPATH . '/functions/admin-menu.php');

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


// navigation menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// cpt for projects in portfolio page
add_theme_support('post-thumbnails');

function portfolio_projects() {
    register_post_type('projects', array(
        'label' => __('Projects'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
        'public'  => true,
        ));
    
}
add_action('init', 'portfolio_projects');
//cpt ends here for portfolio page

//cpt for team page
function team_members() {
    register_post_type('team', array(
        'label' => __('Team'),
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
        'label' => __('About-Tabs'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
        'public'  => true,
        ));
}
add_action('init', 'about_you');

//cpt for services page tabs
function service_tabs() {
    register_post_type('servicestab', array(
        'label' => __('Service-Tabs'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'show_ui' => true,
        'public'  => true,
        ));
}
add_action('init', 'service_tabs');

//cpt for services block
function service_blocks() {

    register_post_type('services', array(
        'label' => __('Services'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions','custom-fields'),
        'show_ui' => true,
        'public'  => true,
        ));
}
add_action('init', 'service_blocks');

//cpt for services block
function home_block() {

    register_post_type('homeblock', array(
        'label' => __('Home-Parallex'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions'),
        'show_ui' => true,
        'show_in_menu'  => true,
        'public'  => true,
        ));
}
add_action('init', 'home_block');


function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
    <div>
        <label for="meta-box-text">Font Awesome Ico</label>
        <input name="meta-box-text" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">
    </div>
    <?php  
}

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }   
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);

}

add_action("save_post", "save_custom_meta_box", 10, 3);



function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Custom Meta Box", "custom_meta_box_markup", "services", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");


//cpt for home page slider
add_action( 'init', 'bootstrap_slider' );

function bootstrap_slider() {
    $labels = array(
        'name'               => _x( 'Slider', 'post type general name'),
        'singular_name'      => _x( 'Slide', 'post type singular name'),
        'menu_name'          => _x( 'Slider', 'admin menu'),
        'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
        'add_new'            => _x( 'Add New', 'Slide'),
        'add_new_item'       => __( 'Name'),
        'new_item'           => __( 'New Slide'),
        'edit_item'          => __( 'Edit Slide'),
        'view_item'          => __( 'View Slide'),
        'all_items'          => __( 'All Slide'),
        'featured_image'     => __( 'Featured Image', 'text_domain' ),
        'search_items'       => __( 'Search Slide'),
        'parent_item_colon'  => __( 'Parent Slide:'),
        'not_found'          => __( 'No Slide found.'),
        'not_found_in_trash' => __( 'No Slide found in Trash.'),
        );

    $args = array(
        'labels'             => $labels,
        'menu_icon'      => 'dashicons-star-half',
        'description'        => __( 'Description.'),
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

