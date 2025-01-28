jQuery(document).ready(function () {
    // Function to check if all fields are filled
    function checkFields() {
        var name = jQuery('#name').val().trim();
        var title = jQuery('#title').val().trim();
        var message = jQuery('#message').val().trim();

        if (name && title && message) {
            jQuery('#btn-waform').removeClass('disabled');
        } else {
            jQuery('#btn-waform').addClass('disabled');
        }
    }

    // Function to validate name (only letters and spaces allowed)
    function validateName(name) {
        var regex = /^[a-zA-Z\s]+$/;
        return regex.test(name);
    }

    // Event listener for input fields
    jQuery('#name, #title, #message').on('input', function () {
        checkFields();

        var name = jQuery('#name').val().trim();
        if (!validateName(name)) {
            jQuery('#name').addClass('invalid');
        } else {
            jQuery('#name').removeClass('invalid');
        }
    });

    // Event listener for the Send button
    jQuery('#btn-waform').on('click', function (e) {
        if (jQuery(this).hasClass('disabled')) {
            e.preventDefault(); // Ignore click if button is disabled
            return;
        }

        // Validate name again before proceeding
        var name = jQuery('#name').val().trim();
        var title = jQuery('#title').val().trim();
        var message = jQuery('#message').val().trim();

        if (!validateName(name)) {
            alert('Name must only contain letters and spaces.');
            return;
        }

        // Encode fields for URL
        var encodedName = encodeURIComponent(name);
        var encodedTitle = encodeURIComponent(title);
        var encodedMessage = encodeURIComponent(message);

        // Generate the message text
        var messageText = `Name: ${encodedName}%0ATitle: ${encodedTitle}%0AMessage: ${encodedMessage}`;

        // Update the href with the data-wa value and the encoded message
        var whatsappUrl = jQuery('.waforms').data('wa');
        var fullUrl = `${whatsappUrl}&text=${messageText}`;

        jQuery(this).attr('href', fullUrl);
    });

    // Initial check on page load
    checkFields();
});
