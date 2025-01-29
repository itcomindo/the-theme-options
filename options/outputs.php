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



function to_dummy_testi()
{
    $output = '';
    for ($i = 0; $i < 4; $i++) {
        $output .= '<div class="testi-item">';
        $output .= '<div class="testi-img-wr">';
        $output .= '<img src="https://gpps.itcomindo.com/wp-content/uploads/2025/01/pt-mulyatek-kreasi-andalan.webp" alt="Client Name" class="testi-img fi">';
        $output .= '</div>';
        $output .= '<div class="testi-content">';
        $output .= '<h3 class="testi-author">Client Name</h3>';
        $output .= '<blockquote class="testi-quote">lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt.</blockquote>';
        $output .= '</div>';
        $output .= '</div>';
    }
    return $output;
}
add_shortcode('to_dummy_testi', 'to_dummy_testi');


//---------------------------------------
// Get Testimonials Start
//---------------------------------------
function to_get_testimonials()
{
    $testimonials = carbon_get_theme_option('to_testimonials');
    if ($testimonials) {
        foreach ($testimonials as $testi) {
            $author = $testi['to_testi_author'];
            $image = $testi['to_testi_image'];
            $testi = $testi['to_testi_content'];
        ?>

            <div class="testi-item">
                <div class="testi-image-wr">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($author); ?>">
                </div>
                <div class="testi-content">
                    <h3 class="testi-author"><?php echo esc_html($author); ?></h3>
                    <blockquote><?php echo esc_html($testi); ?></blockquote>
                </div>
            </div>

        <?php
        }
    } else {
        ?>
        <h3>Tidak ada testimonials</h3>
<?php
    }
}
add_shortcode('to_get_testimonials', 'to_get_testimonials');
//----------------------------------------
// Get Testimonials End
//----------------------------------------


function to_get_experience_year()
{
    $start = 2008;
    $now = (int) date('Y');
    return $now - $start;
}
