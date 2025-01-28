<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

function to_get_faq()
{
?>
    <div class="faq-wr">
        <div class="faq-item active">
            <div class="fqq">
                <h3 class="faq-head">Alamat kantor PT. GPPS?</h3>
            </div>
            <div class="fqa">
                <div class="fq-content">
                    <p>Alamat kantor kami berada di Tanjung Mas Raya, blok B1 nomor 44, RT 002/RW 001. Tanjung Barat, Jagakarsa, Jakarta Selatan. </p>
                    <p>Kami juga memiliki sejumlah kantor cabang maupun perwakilan disejumlah Provinsi yang ada di Indonesia seperti: Aceh, Riau, Palembang, Lampung, Jambi, Medan, Bandung, Semarang, DIY, Surabaya, Malang, Bali dan Provinsi lainnya (Kalimantan dan Sulawesi).</p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <div class="fqq">
                <h3 class="faq-head">Bidang kerja yang tersedia?</h3>
            </div>
            <div class="fqa">
                <div class="fq-content">
                    <p>Main duty kami adalah menyediakan personel atau satuan pengamanan (Satpam) atau personel yang bertugas untuk pengamanan dan keamanan, baik itu pengamanan personal, individu, infrastruktur.</p>
                    <p>Tetapi kami juga menyediakan tenaga kerja untuk dipekerjakan pada bidang kerja lainnya.</p>
                </div>
            </div>
        </div>
        <div class="faq-item">
            <div class="fqq">
                <h3 class="faq-head">SOP rekrutmen naker?</h3>
            </div>
            <div class="fqa">
                <div class="fq-content">Dalam melakukan rekrutmen tenaga kerja kami memiliki SOP yang sangat ketat. Kami akan melakukan pemeriksaan baik itu pemeriksaan psikologis,fisik dan track record sebelum kami terima bekerja.</div>
            </div>
        </div>

        <div class="faq-item">
            <div class="fqq">
                <h3 class="faq-head">Apa Kelebihan?</h3>
            </div>
            <div class="fqa">
                <div class="fq-content">Kami sangat memahami kebutuhan Anda akan tenaga kerja. Selain itu kami juga berpedoman pada efisiensi dan efektivitas agar selalu berjalan dengan baik dan mampu memberikan hasil yang maksimal.</div>
            </div>
        </div>

        <div class="faq-item">
            <div class="fqq">
                <h3 class="faq-head">Perusahaan Legal?</h3>
            </div>
            <div class="fqa">
                <div class="fq-content">Ya, perusahaan kami sudah terdaftar baik itu pada Kementrian Ketenagakerjaan maupun pada ABUJAP selaku organisasi yang menaungi legalitas dan standarisasi perusahaan outsourcing security di Indonesia..</div>
            </div>
        </div>

        <div class="faq-item">
            <div class="fqq">
                <h3 class="faq-head">Cara Kerjasama?</h3>
            </div>
            <div class="fqa">
                <div class="fq-content">Untuk menggunakan jasa kami silahkan langsung untuk menghubungi nomor telepon kami (<?php echo esc_html(to_get_cta('display')); ?>). Hubungi kami bisa melalui Chat, Call maupun email.</div>
            </div>
        </div>
    </div>
<?php
}
add_shortcode('to_faq', 'to_get_faq');
