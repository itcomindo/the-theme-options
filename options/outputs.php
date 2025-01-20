<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Get the company logo.
 *
 * @return string
 */
function to_get_logo_url()
{
    return carbon_get_theme_option('to_logo_url');
}


/**
 * Get the company name.
 *
 * @return string
 */
function to_get_company_name()
{
    if (carbon_get_theme_option('to_company_name')) {
        return carbon_get_theme_option('to_company_name');
    } else {
        return 'PT. Garda Putra Pajajaran';
    }
}

/**
 * Get the company address.
 *
 * @return string
 */
function to_get_company_address()
{
    if (carbon_get_theme_option('to_company_address')) {
        return carbon_get_theme_option('to_company_address');
    } else {
        return 'Masukan Alamat Perusahaan Anda';
    }
}


/**
 * Get Call to Action Phone Number.
 * @param string $what What to get. Default is 'display'.
 */
function to_get_cta($what = 'display')
{
    if ('display' === $what) {
        $num = carbon_get_theme_option('to_phone_number');
        return $num;
    } elseif ('whatsapp' === $what) {
        $num = carbon_get_theme_option('to_phone_number');
        // replace first 08 with 62 then replace any non digit character with none.
        $num = preg_replace('/^08/', '628', $num);
        $num = 'https://api.whatsapp.com/send?phone=' . preg_replace('/\D/', '', $num);
        return $num;
    } elseif ('phone' === $what) {
        $num = carbon_get_theme_option('to_phone_number');
        // replace first 08 with 62 then replace any non digit character with none.
        $num = preg_replace('/^08/', '628', $num);
        $num = 'tel:+' . preg_replace('/\D/', '', $num);
        return $num;
    } elseif ('email' === $what) {
        $num = carbon_get_theme_option('to_email_address');
        return $num;
    } else {
        $num = 'please provide a valid argument';
        return $num;
    }
}




function to_get_company_description()
{
    return esc_html(carbon_get_theme_option('to_company_description'));
}
