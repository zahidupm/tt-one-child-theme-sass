<?php

function enqueue_slick_scripts() {
    wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.min.js', array( 'jquery' ), '1.8.1', true );
    wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.css', array(), '1.8.1' );
    wp_enqueue_style( 'slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick-theme.css', array(), '1.8.1' );
    wp_enqueue_style( 'child-style', get_template_directory_uri(  ).'/style.css', array(), '1.8.1' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_slick_scripts' );

 wp_enqueue_style( 'child-style', get_stylesheet_uri() );

if (in_array('elementor/elementor.php', apply_filters('active_plugins', get_option('active_plugins')))) {
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