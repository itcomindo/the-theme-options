<?php

/**
 *
 * Client Logos
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Get Rekanan Logo.
 */
function to_client_logos()
{
    $dir = WP_CONTENT_DIR . '/uploads/client-logos/*.webp';
    $files = glob($dir);

    $output = '';
    if (!empty($files)) {
        foreach ($files as $file) {
            $file_url = content_url('/uploads/client-logos/' . basename($file));
            $file_name = pathinfo($file, PATHINFO_FILENAME);
            $file_name = str_replace('-', ' ', $file_name);

            $output .= '<div class="cll">';
            $output .= '<div class="cll-img-wr"><img class="client fi" src="' . esc_url($file_url) . '" alt="' . esc_attr($file_name) . '" title="' . esc_attr($file_name) . '"></div>';
            $output .= '</div>';
        }
        return $output;
    }
}
add_shortcode('client_logos', 'to_client_logos');
