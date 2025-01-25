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
    } elseif ('num' === $what) {
        $num = carbon_get_theme_option('to_phone_number');
        $num = preg_replace('/^08/', '628', $num);
        $num = preg_replace('/\D/', '', $num);
        return $num;
    } else {
        return '6282233566320';
    }
}

function to_get_company_description()
{
    return esc_html(carbon_get_theme_option('to_company_description'));
}

function to_get_image_galery()
{
    $galleries = carbon_get_theme_option('to_gallery_items');
    if ($galleries) {
        foreach ($galleries as $gallery) {
            $image = $gallery['to_image'];
            $title = $gallery['to_title'];

?>
            <div class="image-item">
                <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
            </div>
        <?php

        }
    }
}

add_shortcode('to_get_client_logo', 'to_get_image_galery');

function to_get_testimonial_clients()
{
    $testimonials = carbon_get_theme_option('to_testimonial_clients');
    if ($testimonials) {
        foreach ($testimonials as $testimonial) {
            $image = $testimonial['to_image_tm'];
            $name = $testimonial['to_name_client_tm'];
            $testi = $testimonial['to_testi_client_tm'];

        ?>

            <div class="testimonial-item">
                <div class="testimonial-image">
                    <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                </div>
                <div class="testimonial-content">
                    <h3><?php echo $name; ?></h3>
                    <p><?php echo $testi; ?></p>
                </div>
            </div>

            <?php
        }
    }
}

add_shortcode('to_get_testimonial_clients', 'to_get_testimonial_clients');







/**
 * TAB Section
 */
function to_get_tabs($tab_what = 'trigger')
{
    $tabs = carbon_get_theme_option('to_tabs');
    if ($tabs) {
        if ('trigger' === $tab_what) {
            $count = 0;
            foreach ($tabs as $tab) {
                $count++;
                $tab_title = $tab['to_tab_title'];
            ?>
                <div class="tab-trigger tab-<?php echo esc_html($count); ?>" data-tab="tab-<?php echo esc_html($count); ?>">
                    <h3 class="tab-head"><?php echo esc_html($tab_title); ?></h3>
                </div>
            <?php
            }
        } elseif ('content' === $tab_what) {
            $count = 0;
            foreach ($tabs as $tab) {
                $count++;
                $tab_title = $tab['to_tab_title'];
                $tab_image = $tab['to_tab_image'];
                $tab_content = $tab['to_tab_content'];

                // Eperimental start
                // if (is_array($tab_content)) {
                //     $tab_content = implode('', $tab_content); // Gabungkan array menjadi string
                // } elseif (!is_string($tab_content)) {
                //     $tab_content = ''; // Berikan nilai kosong jika bukan string
                // }

                // Eperimental end

            ?>
                <div class="tab-content animate__animated tab-<?php echo esc_html($count); ?>" data-tab="tab-<?php echo esc_html($count); ?>">
                    <div class="tbc-left animate__animated">
                        <?php
                        echo apply_filters('the_content', $tab_content);
                        ?>
                    </div>
                    <div class="tbc-right">
                        <div class="tbc-img-wr animate__animated">
                            <img src="<?php echo esc_url($tab_image); ?>" alt="<?php echo esc_html($tab_title); ?>">
                        </div>
                    </div>
                </div>
<?php
            }
        }
    }
}
