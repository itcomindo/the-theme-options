<?php

/**
 *
 * Shortcodes
 */

defined('ABSPATH') || die('No script kiddies please!');


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
