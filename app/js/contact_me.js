// Contact Form Scripts

$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name =          $("input#name").val(),
            email =             $("input#email").val(),
            phone =             $("input#phone").val(),
            message =           $("textarea#message").val(),
            avto_marka =        $("input#avto_marka").val(),
            avto_engine_type =  $("input#avto_engine_type").val(),
            avto_kyzov =        $("input#avto_kyzov").val(),
            avto_korobka =      $("input#avto_korobka").val(),
            avto_engine_power = $("input#avto_engine_power").val(),
            avto_color =        $("input#avto_color").val(),
            avto_probeg =       $("input#avto_probeg").val(),
            avto_money =        $("input#avto_money").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "../modules/mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message,
                    avto_marka: avto_marka,
                    avto_engine_type : avto_engine_type,
                    avto_kyzov : avto_kyzov,
                    avto_korobka : avto_korobka,
                    avto_engine_power : avto_engine_power,
                    avto_color : avto_color,
                    avto_probeg : avto_probeg,
                    avto_money : avto_money
                },
                cache: false,
                success: function(response) {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append(response);//("<strong>Спасибо, что выбрали нашу команду.</strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append($("<strong>").text("Простите " + firstName + ", кажеться неполадки с серверами, пожалуйста, свяжитесь с нами по телефону."));
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
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
$('#name').focus(function() {
    $('#success').html('');
});