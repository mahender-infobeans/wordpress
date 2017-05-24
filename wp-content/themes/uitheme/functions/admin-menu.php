<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {
    //create new top-level menu
    add_menu_page('My Cool Plugin Settings', 'Theme Options', 'administrator', __FILE__, 'my_cool_plugin_settings_page', '/wp-content/themes/uitheme/assets/images/icon.gif');

    //call register settings function
    add_action('admin_init', 'register_my_cool_plugin_settings');
}

function register_my_cool_plugin_settings() {
    //register our settings
    register_setting('my-cool-plugin-settings-group', 'homeheading');
    register_setting('my-cool-plugin-settings-group', 'homesubheading');
    register_setting('my-cool-plugin-settings-group', 'emailid');
    register_setting('my-cool-plugin-settings-group', 'mobile');
    register_setting('my-cool-plugin-settings-group', 'address');
}

function my_cool_plugin_settings_page() {
    ?>
    <div class="wrap">
        <h1>Theme Option values</h1>

        <form method="post" action="options.php">
            <?php settings_fields('my-cool-plugin-settings-group'); ?>
            <?php do_settings_sections('my-cool-plugin-settings-group'); ?>

            <table class="form-table">
            <tr valign="top">
                    <th scope="row">Home Heading :</th>
                    <td><input type="text" name="homeheading" value="<?php echo esc_attr(get_option('homeheading')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Home Sub-heading :</th>
                    <td><input type="text" name="homesubheading" value="<?php echo esc_attr(get_option('homesubheading')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Email :</th>
                    <td><input type="text" name="emailid" value="<?php echo esc_attr(get_option('emailid')); ?>" /></td>
                </tr>
                 <tr valign="top">
                    <th scope="row">Address :</th>
                    <td><input type="text" name="address" value="<?php echo esc_attr(get_option('address')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Mobile Number</th>
                    <td><input type="text" name="mobile" value="<?php echo esc_attr(get_option('mobile')); ?>" /></td>
                </tr>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php } ?>


