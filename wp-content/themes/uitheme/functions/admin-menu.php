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
    register_setting('my-cool-plugin-settings-group', 'emailid');
    register_setting('my-cool-plugin-settings-group', 'portfolio_page_title');
    register_setting('my-cool-plugin-settings-group', 'option_etc');
    register_setting('my-cool-plugin-settings-group', 'mobile');
    register_setting('my-cool-plugin-settings-group', 'map');
    register_setting('my-cool-plugin-settings-group', 'team_page_title');
    register_setting('my-cool-plugin-settings-group', 'team_page_subtitle');
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
                    <th scope="row">Email :</th>
                    <td><input type="text" name="emailid" value="<?php echo esc_attr(get_option('emailid')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Portfolio Page Title</th>
                    <td><input type="text" name="portfolio_page_title" value="<?php echo esc_attr(get_option('portfolio_page_title')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Team Page Title</th>
                    <td><input type="text" name="team_page_title" value="<?php echo esc_attr(get_option('team_page_title')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Team Page Sub Title</th>
                    <td><input type="text" name="team_page_subtitle" value="<?php echo esc_attr(get_option('team_page_subtitle')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Options, Etc.</th>
                    <td><input type="text" name="option_etc" value="<?php echo esc_attr(get_option('option_etc')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Mobile Number</th>
                    <td><input type="text" name="mobile" value="<?php echo esc_attr(get_option('mobile')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">MAP</th>
                    <td><input type="text" name="map" value="<?php echo esc_attr(get_option('map')); ?>" /></td>
                </tr>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php } ?>
