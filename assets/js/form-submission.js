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
            $('#emailError').text('Company Email is required.');
            isValid = false;
        } else if (!emailRegex.test(email)) {
            $('#emailError').text('Please enter a valid email address.');
            isValid = false;
        }

        // Phone Number Validation
        const phone = $('#phone').val().trim();
        const phoneRegex = /^[0-9]{10}$/; // Example: 10-digit phone number
        if (phone === '') {
            $('#phoneError').text('Company Phone number is required.');
            isValid = false;
        } else if (!phoneRegex.test(phone)) {
            $('#phoneError').text('Please enter a valid 10-digit phone number.');
            isValid = false;
        }

        // Demo date Validation
        const demoDate = $('#demo_date').val().trim();
        if (demoDate === '') {
            $('#demoDateError').text('Demo date is required.');
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

        $('#demo_date').on('input', function () {
            if ($(this).val().trim() !== '') {
                $('#demoDateError').text('');
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
        } else {
            $("#book-demoform .button-loader").show(); 

            let fullUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search + window.location.hash;
            
            let formDataArray = $(this).serializeArray(); 
            formDataArray.push({ name: "ref_url", value: fullUrl }); 
            let formData = $.param(formDataArray); 
            $.ajax({
                url: "routes/ajax.php",
                type: "POST",
                data: formData + "&action=submit_book_demo",
                dataType: "json",
                success: function (response) {
                    //alert(response.message);
                    if (response.status === "success") {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Thankyou!",
                            text: response.message,
                            showConfirmButton: false,
                            timer: 5000
                        });
                        if ($("#book-demoform").length) {
                            $("#book-demoform")[0].reset();
                            $('#myModal').modal('hide');
                        }
                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr) {
                    let errorMessage = "An error occurred while submitting the form.";
            
                    // Check if response contains a JSON error message
                    if (xhr.responseText) {
                        try {
                            let jsonResponse = JSON.parse(xhr.responseText);
                            if (jsonResponse.message) {
                                errorMessage = jsonResponse.message;
                            }
                        } catch (e) {
                            console.log("Error parsing JSON response:", e);
                        }
                    }
            
                    alert(errorMessage);
                },
                complete: function () {
                    $("#book-demoform .button-loader").hide();  
                }
            });
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


         // If any field is invalid, prevent form submission
         if (!isValid) {
            event.preventDefault();
        } else {
            $(".subscribe .button-loader").show(); 
            let fullUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + window.location.search + window.location.hash;
            
           
            $.ajax({
                url: "routes/ajax.php",
                type: "POST",
                data: {'action' : "subscribe", 'subs_email' : subs_email, 'ref_url' : fullUrl},
                dataType: "json",
                success: function (response) {
                  //  alert(response.message);
                    
                    if (response.status === "success") {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Thankyou!",
                            text: response.message,
                            showConfirmButton: false,
                            timer: 4000
                        });
                        if ($("#subscribe-form").length) {
                            $("#subscribe-form")[0].reset();
                        }
                    } else {
                        alert(response.message);
                    }
                },
                error: function (xhr) {
                    let errorMessage = "An error occurred while submitting the form.";
            
                    // Check if response contains a JSON error message
                    if (xhr.responseText) {
                        try {
                            let jsonResponse = JSON.parse(xhr.responseText);
                            if (jsonResponse.message) {
                                errorMessage = jsonResponse.message;
                            }
                        } catch (e) {
                            console.log("Error parsing JSON response:", e);
                        }
                    }
            
                    alert(errorMessage);
                },
                complete: function () {
                    $(".subscribe .button-loader").hide();  
                }
            });
        }
    });


    

    $('#signupForm').on('submit', function (event) {
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
  
      // If any field is invalid, prevent form submission
      if (!isValid) {
        event.preventDefault();
      } else {
        $("#signupForm .button-loader").show();  
        $.ajax({
            url: "routes/ajax.php",
            type: "POST",
            data: $(this).serialize() + "&action=sign_up_form",
            dataType: "json",
            success: function (response) {
                //alert(response.message);
                if (response.status === "success") {
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Thankyou!",
                        text: response.message,
                        showConfirmButton: false,
                        timer: 4000
                    });

                    if ($("#signupForm").length) {
                        $("#signupForm")[0].reset();
                    }
                } else {
                    alert(response.message);
                }
            },
            error: function (xhr) {
                let errorMessage = "An error occurred while submitting the form.";
        
                // Check if response contains a JSON error message
                if (xhr.responseText) {
                    try {
                        let jsonResponse = JSON.parse(xhr.responseText);
                        if (jsonResponse.message) {
                            errorMessage = jsonResponse.message;
                        }
                    } catch (e) {
                        console.log("Error parsing JSON response:", e);
                    }
                }
        
                alert(errorMessage);
                
                if ($("#signupForm").length) {
                    $("#signupForm")[0].reset();
                }
            }, complete: function () {
                $("#signupForm .button-loader").hide();  
            }
        });
      }
    });


});