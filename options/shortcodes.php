<?php

/**
 *
 * Shortcodes
 */

defined('ABSPATH') || die('No script kiddies please!');



/**
 * Phone Number Shortcode to use in the theme or in the content.
 */
function to_sc_phone()
{
    $output = to_get_cta('display');
    if ($output) {
        return '<span class="text-bold">' . $output . '</span>';
    } else {
        return 'Masukan Nomor Telepon Anda';
    }
}
add_shortcode('phone', 'to_sc_phone');


/**
 * Get Buttons
 */
function to_sc_get_button_whatsapp()
{
    $num = to_get_cta('whatsapp');
    return '<a href="' . esc_url($num) . '" class="btn bg-whatsapp" target="_blank">Chat Whatsapp</a>';
}
add_shortcode('whatsapp_button', 'to_sc_get_button_whatsapp');
