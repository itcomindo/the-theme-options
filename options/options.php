<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

require_once TO_PATH . 'options/option-tab.php';
require_once TO_PATH . 'options/outputs.php';
require_once TO_PATH . 'options/shortcodes.php';


use Carbon_Fields\Container;
use Carbon_Fields\Field;









function to_theme_options()
{
    Container::make('theme_options', 'Theme Options')
        ->add_tab('Contact', to_tab_company());
}

add_action('carbon_fields_register_fields', 'to_theme_options');
