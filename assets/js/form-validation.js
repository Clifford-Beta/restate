

$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='profile']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            password_again: {
                equalTo: "#password"
            },
            phone: {
                required: true
            }
        },
        // Specify validation error messages
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            var datea = new FormData();
            jQuery.each($('#wizard-picture')[0].files, function(i, file) {
                datea.append('file[]', file);
            });

            jQuery.ajax({
                url: '<?php echo base_url('do_upload'); ?>',
                data: datea,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST', // For jQuery < 1.9
                success: function(data){
                    var img = [];
                    console.log(data.dta.upload_data)
                    data.dta.forEach(element => {
                        img.push(element.file_name);
                });
                    console.log(imgs);
                    toastr.success(data.msg);

                    jQuery.ajax({
                        url: '<?php echo base_url('dosubmit_property'); ?>',
                        data: $(".upload-image-form").serialize()+'&image='+JSON.stringify(imgs),
                        cache: false,
                        contentType: false,
                        processData: false,
                        method: 'POST',
                        type: 'POST', // For jQuery < 1.9
                        success: function(data){
                            $('#loader').hide();
                            toastr.success("Property added successfully");
                            //   console.log( $(".upload-image-form").serialize() );


                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            $('#loader').hide();
                            toastr.error(errorThrown);
                        }

                    });

                    //   console.log( $(".upload-image-form").serialize() );


                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('#loader').hide();
                    toastr.error(errorThrown);
                }

            });
            form.submit();
        }
    });
});