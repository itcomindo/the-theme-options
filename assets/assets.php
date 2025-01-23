<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');


function to_load_css_js()
{
    // load gsap.min.js.
    wp_enqueue_script('gsap', TO_URL . '/assets/js/gsap.min.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'to_load_css_js');
