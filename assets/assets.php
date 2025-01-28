<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');






//---------------------------------------
// Load jQuery and the gank Start
//---------------------------------------
function mmx_load_aditional_libs()
{
    wp_enqueue_style(
        "animate-js",
        "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css",
        [],
        '1.4.0',
        'all'
    );

    wp_enqueue_script(
        "myjquery",
        // "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js",
        "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js",
        [],
        '3.6.0',
        true
    );
}
//----------------------------------------
// Load jQuery and the gank End
//----------------------------------------



//---------------------------------------
// Load GSAP Start
//---------------------------------------
function mmx_load_gsap()
{
    // Cek jika halaman adalah editor Bricks Builder.
    if (isset($_GET['bricks']) && $_GET['bricks'] === 'run') {
        return;
    }

    // Load script hanya untuk home atau front page.
    if (is_home() || is_front_page()) {
        // Load Lenis js.
        wp_enqueue_script(
            "lenis-js",
            "https://unpkg.com/lenis@1.1.18/dist/lenis.min.js",
            null,
            null,
            true
        );

        // Call GSAP.
        wp_enqueue_script(
            "gsap-js",
            "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js",
            [],
            "3.12.5",
            true
        );

        // Call ScrollTrigger.
        wp_enqueue_script(
            "scroll-trigger-js",
            "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js",
            [],
            "3.12.5",
            true
        );

        // call frontpage.min.js.
        wp_enqueue_script(
            "frontpage-js",
            TO_URL . "/assets/js/frontpage.min.js",
            [],
            "1.0",
            true
        );
    }
}
//----------------------------------------
// Load GSAP End
//----------------------------------------

//---------------------------------------
// Load Lotties Start
//---------------------------------------
function mmx_load_lotties()
{
    // Cek jika halaman adalah editor Bricks Builder.
    if (isset($_GET['bricks']) && $_GET['bricks'] === 'run') {
        return;
    }

    // Load script hanya untuk home atau front page.
    if (is_home() || is_front_page()) {
        // Lotties.
        wp_enqueue_script('lottie-player', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.1/lottie.min.js', array(), null, true);

        // Load lotties.min.js.
        wp_enqueue_script('lotties', TO_URL . '/assets/js/lotties.min.js', array(), '1.0', true);
    }
}
//----------------------------------------
// Load Lotties End
//----------------------------------------


//---------------------------------------
// Load Flickity Start
//---------------------------------------
function mmx_load_flickity()
{
    wp_enqueue_style('flk-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css', array(), '');
    wp_enqueue_script('flk-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '', true);
    wp_enqueue_script('flickity-options', TO_URL . '/assets/js/flickity-options.min.js', array(), '1.0', true);
}
//----------------------------------------
// Load Flickity End
//----------------------------------------


//---------------------------------------
// Load Tabs Start
//---------------------------------------
function mmx_load_tabs()
{
    // Load Tabs.
    wp_enqueue_script('tabs-js', TO_URL . '/assets/js/tabs.min.js', array(), '1.0', true);
}
//----------------------------------------
// Load Tabs End
//----------------------------------------


//---------------------------------------
// section features Start
//---------------------------------------
function mmx_load_section_features_card()
{
    // Load Features Cards.
    wp_enqueue_script('features-cards-js', TO_URL . '/assets/js/section-features-cards.min.js', array(), '1.0', true);
}
//----------------------------------------
// section features End
//----------------------------------------





add_action('wp_enqueue_scripts', 'mmx_load_aditional_libs');
add_action('wp_enqueue_scripts', 'mmx_load_gsap');
add_action('wp_enqueue_scripts', 'mmx_load_lotties');
add_action('wp_enqueue_scripts', 'mmx_load_flickity');
add_action('wp_enqueue_scripts', 'mmx_load_tabs');
add_action('wp_enqueue_scripts', 'mmx_load_section_features_card');
