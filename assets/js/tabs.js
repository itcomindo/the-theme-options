window.addEventListener('DOMContentLoaded', (event) => {


    // Awalnya, aktifkan tab pertama secara default
    jQuery('.tab-trigger:nth-child(2)').addClass('active');
    jQuery('.tab-content:nth-child(2)').addClass('active');

    // Event handler untuk klik pada trigger
    jQuery('.tab-trigger').on('click', function () {
        // Hapus kelas 'active' dari semua trigger dan konten
        jQuery('.tab-trigger').removeClass('active');
        jQuery('.tab-content').removeClass('active');
        jQuery('.tab-content .tbc-left').removeClass('animate__zoomIn');
        jQuery('.tab-content .tbc-right .tbc-img-wr').removeClass('animate__fadeInUp');

        // Tambahkan kelas 'active' pada trigger yang diklik
        jQuery(this).addClass('active');

        // Dapatkan nilai data-tab dari trigger
        const dataTab = jQuery(this).attr('data-tab');

        // Cari konten yang memiliki data-tab yang sama, lalu tambahkan kelas 'active'
        jQuery('.tab-content[data-tab="' + dataTab + '"]').addClass('active');
        jQuery('.tab-content[data-tab="' + dataTab + '"] .tbc-left').addClass('animate__zoomIn');
        jQuery('.tab-content[data-tab="' + dataTab + '"] .tbc-right .tbc-img-wr').addClass('animate__fadeInUp');
    });



});