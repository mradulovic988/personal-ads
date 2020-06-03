/**
 * All Ajax query will be below
 */

$(document).ready(function() {

    // Phone number on customer portal
    $('#phoneNumberForm').submit(function(e) {
        e.preventDefault();

        let phoneNumber = $('#phoneNumber').val();
        let phoneNumber_submit = $('#phoneNumber_submit').val();

        let $body = $("body");

        $(document).on({
            ajaxStart: function() { $body.addClass("loading"); },
            ajaxStop: function() { $body.removeClass("loading"); }
        });

        $.ajax({
            type: "POST",
            data: {
                phoneNumber:phoneNumber,
                phoneNumber_submit: true
            },
            success: function() {
                $('#phoneSuccess').html('<p>Uspešno ste dodali telefon.</p>');
                setTimeout(function() {
                    $('#phoneSuccess').fadeOut();
                }, 2000)
            }
        });
    });

    // Birtday on customer portal
    $('#birthForm').submit(function(e) {
        e.preventDefault();

        let birth = $('#birth').val();
        let birth_submit = $('#birth_submit').val();

        let $body = $("body");

        $(document).on({
            ajaxStart: function() { $body.addClass("loading"); },
            ajaxStop: function() { $body.removeClass("loading"); }
        });

        $.ajax({
            type: "POST",
            data: {
                birth:birth,
                birth_submit: true
            },
            success: function() {
                $('#birthSuccess').html('<p>Uspešno ste dodali datum rođenja.</p>');
                setTimeout(function() {
                    $('#birthSuccess').fadeOut();
                }, 2000)
            }
        });
    });

    // City on customer portal
    $('#cityForm').submit(function(e) {
        e.preventDefault();

        let city = $('#city').val();
        let city_submit = $('#city_submit').val();

        let $body = $("body");

        $(document).on({
            ajaxStart: function() { $body.addClass("loading"); },
            ajaxStop: function() { $body.removeClass("loading"); }
        });

        $.ajax({
            type: "POST",
            data: {
                city:city,
                city_submit: true
            },
            success: function() {
                $('#citySuccess').html('<p>Uspešno ste dodali grad.</p>');
                setTimeout(function() {
                    $('#citySuccess').fadeOut();
                }, 2000)
            }
        });
    });

    // Profile image on customer portal
    /**
     * BUG
     *
     * Check what is happening here
     * #profileImageForm
     */
    $('').submit(function(e) {
        e.preventDefault();

        let profileImage = $('#profileImage').val();
        let profileImage_submit = $('#profileImage_submit').val();

        let $body = $("body");

        $(document).on({
            ajaxStart: function() { $body.addClass("loading"); },
            ajaxStop: function() { $body.removeClass("loading"); }
        });

        $.ajax({
            type: "POST",
            data: {
                profileImage:profileImage,
                profileImage_submit: true
            },
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            success: function() {
                $('#profileImageSuccess').html('<p>Uspešno ste dodali profilnu sliku.</p>');
                setTimeout(function() {
                    $('#profileImageSuccess').fadeOut();
                }, 2000)
            }
        });
    });


});