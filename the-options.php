<?php

/**
 *
 * Plugin Name: The Options
 * Author: Budi Haryono
 * Description: This plugin is for setting options.
 * Version: 1.0.0
 */

defined('ABSPATH') || die('No script kiddies please!');


// Nonaktifkan Gutenberg untuk semua post type
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Nonaktifkan Gutenberg CSS
function mm_disable_gutenberg_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Untuk WooCommerce
}
add_action('wp_enqueue_scripts', 'mm_disable_gutenberg_css', 100);



//---------------------------------------
// Plugin DEFINE Start
//---------------------------------------

// Define the plugin directory the output of the plugin is /wp-content/plugins/the-options/
define('TO_PATH', plugin_dir_path(__FILE__));

// Define the plugin URL the output of the plugin is http://localhost/wp-content/plugins/the-options/
define('TO_URL', plugin_dir_url(__FILE__));

// Define the plugin basename the output of the plugin is the-options/the-options.php
define('TO_VERSION', get_file_data(__FILE__, array('Version' => 'Version'))['Version']);

//----------------------------------------
// Plugin DEFINE End
//----------------------------------------


/**
 * Check CF Loaded
 */
function wsp_call_carbon_fields()
{
    if (! class_exists('\Carbon_Fields\Carbon_Fields')) {
        require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
        \Carbon_Fields\Carbon_Fields::boot();
    }
}

/**
 * MCS CF Loaded
 */
function wsp_cf_loaded()
{
    if (! function_exists('carbon_fields_boot_plugin')) {
        wsp_call_carbon_fields();
    }
}
add_action('plugins_loaded', 'wsp_cf_loaded');


require_once TO_PATH . 'assets/assets.php';
require_once TO_PATH . 'options/options.php';


add_filter('bricks/code/echo_function_names', function () {
    return [
        'to_get_cta',
        'to_get_logo_url',
        'to_get_company_name',
        'to_get_company_address',
        'to_get_company_description',
        'to_get_image_galery',
        'to_sc_phone',
        'to_get_tabs',
        'to_sc_get_button_whatsapp',
    ];
});
