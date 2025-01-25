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

            Field::make('complex', 'to_gallery_items', 'Gallery Items')
                ->add_fields(array(
                    Field::make('image', 'to_image', 'Image')
                        ->set_help_text('Upload an image for the gallery')
                        ->set_value_type('url'),
                    Field::make('text', 'to_title', 'Title')
                        ->set_help_text('Enter a title for this image'),
                ))

                ->set_layout('tabbed-horizontal'),

            Field::make('complex', 'to_testimonial_clients', 'Testimonial Clients')
                ->add_fields(array(
                    Field::make('image', 'to_image_tm', 'Image')
                        ->set_help_text('Upload an image client')
                        ->set_value_type('url'),
                    Field::make('text', 'to_name_client_tm', 'Client Name')
                        ->set_help_text('Enter a name of client'),
                    Field::make('text', 'to_testi_client_tm', 'Client Testimonial')
                        ->set_help_text('Enter a client testimonial'),
                ))

                ->set_layout('tabbed-horizontal'),


        ),
    );
}


// Tab Sections.
function to_tab_sections()
{
    return array_merge(
        array(
            // Section tab start.
            Field::make('complex', 'to_tabs', 'Tabs')
                ->set_layout('tabbed-horizontal')
                ->set_max(3)
                ->add_fields(
                    array(
                        // Tab Title.
                        Field::make('text', 'to_tab_title', 'Tab Title')
                            ->set_help_text('Enter a title for this tab'),

                        // Tab Content.
                        Field::make('rich_text', 'to_tab_content', 'Tab Content')
                            ->set_help_text('Enter the content for this tab'),

                        // Tab Image.
                        Field::make('image', 'to_tab_image', 'Tab Image')
                            ->set_help_text('Upload an image for this tab')
                            ->set_value_type('url'),
                    )
                )
            // Section tab end.
        ),
    );
}



//---------------------------------------
// tab General Start
//---------------------------------------
function to_tab_general()
{
    return array_merge(
        array(
            Field::make('checkbox', 'to_disable_plugin_script', 'Disable Plugin Script')
                ->set_option_value('yes')
                ->set_help_text('Enable this option to load the plugin script'),
        ),
    );
}

//----------------------------------------
// tab General End
//----------------------------------------