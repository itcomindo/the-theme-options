<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;




function to_tab_company()
{
    return array_merge(
        array(

            // Logo Image URL.
            Field::make('image', 'to_logo_url', 'Logo Image')
                ->set_value_type('url')
                ->set_help_text('Upload your logo image here'),

            // Company Name.
            Field::make('text', 'to_company_name', 'Company Name')
                ->set_help_text('Enter your company name here'),

            // Company Address.
            Field::make('textarea', 'to_company_address', 'Company Address')
                ->set_help_text('Enter your company address here'),

            // Company Descripiton.
            Field::make('textarea', 'to_company_description', 'Company Description')
                ->set_help_text('Enter your company description here'),

            // Phone Number
            Field::make('text', 'to_phone_number', 'Phone Number')
                ->set_help_text('Enter your phone number here e.g 0813-9891-2341'),

            // Phone Number for call button.
            Field::make('text', 'to_call_number', 'Call Number')
                ->set_help_text('Enter your phone number for call to action here e.g 6281398912341'),

            // Phone Number for Whatsapp Button.
            Field::make('text', 'to_whatsapp_number', 'Whatapp Number')
                ->set_help_text('Enter your phone number for whatsapp button here e.g 6281398912341'),

            // Email Address.
            Field::make('text', 'to_email_address', 'Email Address')
                ->set_help_text('Enter your email address here'),


        ),
    );
}
