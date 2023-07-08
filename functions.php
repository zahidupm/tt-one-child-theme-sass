<?php

if (in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins', [])))) {
    // Code to execute when Elementor plugin is active
    require_once 'elementor-addons/addons.php';

    // Add your desired functionality here
} else {
    function elementor_admin_notice()
    {
        if (is_plugin_active('elementor/elementor.php')) {
            ?>
            <div class="notice notice-error is-dismissible">
                <p><?php echo esc_html('Elementor is not installed or inactive!'); ?></p>
            </div>
            <?php
}
    }
    add_action('admin_notices', 'elementor_admin_notice');

}
