$(document).ready(function () {

    $('form').on('submit', function (event) {
      let isValid = true;

      // Clear previous error messages
      $('.error').text('');

      // First Name Validation
      const firstName = $('#Name').val().trim();
      if (firstName === '') {
        $('#NameError').text('Name is required.');
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

    document.querySelectorAll('#contact-us').forEach((container) => {
      lottie.loadAnimation({
        container: container, // HTML container for the animation
        renderer: 'svg',      // Render as SVG
        loop: true,           // Animation will loop continuously
        autoplay: true,       // Animation will play automatically
        path: './assets/json/contact-us.json' // Path to the Lottie JSON file
      });
    });
  });
