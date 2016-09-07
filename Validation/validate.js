$(function() {

    $("#registerform input,#registerform textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var first_name = $("input#first_name").val();
            var last_name = $("input#last_name").val();
            var login_name = $("input#login_name").val();
            var encrypt_password = $("input#encrypt_password").val();
              var email_id = $("input#email_id").val();
                var user_role = $("input#user_role").val();
                  var contact_number = $("input#contact_number").val();
                  var address = $("textarea#address").val();
            var firstName =  first_name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "internal_user_register.php",
                type: "POST",
                data: {
                  first_name:first_name
                  last_name:last_name
                  login_name:login_name
                  encrypt_password:encrypt_password
                  email_id:email_id
                  user_role:user_role
                  contact_number:contact_number
                  address:address


                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger')
                        .append("<strong>Registration success. </strong>");
                    $('#success > .alert-danger')
                        .append('</div>');

                    //clear all fields
                    $('registerform').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#registerform').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#first_name').focus(function() {
    $('#success').html('');
});
