$(document).ready(function () {
    $('#book-demoform').on('submit', function (event) {
        event.preventDefault();
        let isValid = true;

        // Clear previous error messages
        $('.error').text('');

        // First Name Validation
        const firstName = $('#Name').val().trim();
        if (firstName === '') {
            $('#NameError').text('Name is required.');
            isValid = false;
        }

        // CompanyName Validation
        const Companyname = $('#Companyname').val().trim();
        if (Companyname === '') {
            $('#CompanyNameError').text('Company Name is required.');
            isValid = false;
        }

        // Email Validation
        const email = $('#email').val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '') {
            $('#emailError').text('Email is required.');
            isValid = false;
        } else if (!emailRegex.test(email)) {
            $('#emailError').text('Please enter a valid email address.');
            isValid = false;
        }

        // Phone Number Validation
        const phone = $('#phone').val().trim();
        const phoneRegex = /^[0-9]{10}$/; // Example: 10-digit phone number
        if (phone === '') {
            $('#phoneError').text('Phone number is required.');
            isValid = false;
        } else if (!phoneRegex.test(phone)) {
            $('#phoneError').text('Please enter a valid 10-digit phone number.');
            isValid = false;
        }

        // Message Validation
        const message = $('#message').val().trim();
        if (message === '') {
            $('#messageError').text('Message is required.');
            isValid = false;
        }

        // Auto-remove error for the First Name field on input

        $('#Name').on('input', function () {
            if ($(this).val().trim() !== '') {
                $('#NameError').text('');
            }
        });

        $('#Companyname').on('input', function () {
            if ($(this).val().trim() !== '') {
                $('#CompanyNameError').text('');
            }
        });



        $('#email').on('input', function () {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailRegex.test($(this).val().trim())) {
                $('#emailError').text('');
            }
        });

        $('#phone').on('input', function () {
            const phoneRegex = /^[0-9]{10}$/;
            if (phoneRegex.test($(this).val().trim())) {
                $('#phoneError').text('');
            }
        });

        $('#message').on('input', function () {
            if ($(this).val().trim() !== '') {
                $('#messageError').text('');
            }
        });

        // If any field is invalid, prevent form submission
        if (!isValid) {
            event.preventDefault();
        }
    });

    //subscribe-form
    $('#subscribe-form .footer_arrow').on('click', function (event) {
        var isValid=true;
        var subs_email = $('#subscribe-form .subscribe_email').val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (subs_email === '') {
            $('#subsEmailError').text('Subscription Email is required.');
            isValid = false;
        } else if (!emailRegex.test(subs_email)) {
            $('#subsEmailError').text('Please enter a valid email ID.');
            isValid = false;
        }
    });
});