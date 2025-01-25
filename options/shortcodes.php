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
    return '<a href="' . esc_url($num) . '" class="btn bg-whatsapp" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: currenColor;transform: ;msFilter:;"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg>Chat Whatsapp</a>';
}
add_shortcode('whatsapp_button', 'to_sc_get_button_whatsapp');



//---------------------------------------
// tab trigger Start
//---------------------------------------
function to_sc_tab_trigger()
{
    $tabs = carbon_get_theme_option('to_tabs');
    if ($tabs) {
        $output = '';
        $count = 0;
        foreach ($tabs as $tab) {
            $count++;
            $tab_title = $tab['to_tab_title'];

            $output .= '<div class="tab-trigger tab-' . $count . '" data-tab=
            "tab-' . $count . '">';
            $output .= '<h3 class="tab-head">' . $tab_title . '</h3>';
            $output .= '</div>';
        }
        return $output;
    }
}
add_shortcode('tab_trigger', 'to_sc_tab_trigger');
//----------------------------------------
// tab trigger End
//----------------------------------------



//---------------------------------------
// tab content Start
//---------------------------------------
function to_sc_tab_content()
{
    $tabs = carbon_get_theme_option('to_tabs');
    if ($tabs) {
        $output = '';
        $count = 0;
        foreach ($tabs as $tab) {
            $count++;
            $tab_title = $tab['to_tab_title'];
            $tab_image = $tab['to_tab_image'];
            $tab_content = $tab['to_tab_content'];

            $output .= '<div class="tab-content animate__animated tab-' . $count . '" data-tab="tab-' . $count . '">';
            $output .= '<div class="tbc-left animate__animated">';
            $output .= apply_filters('the_content', $tab_content);
            $output .= '</div>';
            $output .= '<div class="tbc-right">';
            $output .= '<div class="tbc-img-wr animate__animated">';
            $output .= '<img src="' . $tab_image . '" alt="' . $tab_title . '">';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
        }

        return $output;
    }
}
add_shortcode('to_tab_content', 'to_sc_tab_content');
//----------------------------------------
// tab content End
//----------------------------------------