/**
 * All Ajax query will be below
 */

$(document).ready(function() {

    // Testing purpose
    $('').submit(function(e) {
        e.preventDefault();

        let register_userName = $('#register_userName').val();
        let register_firstName = $('#register_firstName').val();
        let register_lastName = $('#register_lastName').val();

        let $body = $("body");

        $(document).on({
            ajaxStart: function() { $body.addClass("loading"); },
            ajaxStop: function() {
                $body.removeClass("loading");

                setTimeout(function () {
                    window.location.replace('login.php');
                }, 2000);
            }
        });

        $.ajax({
            type: "POST",
            url: '',
            data: {
                register_userName:register_userName,
                register_firstName:register_firstName,
                register_lastName:register_lastName
            },
            cache: false,
            success: function() {
                $('#register_successMessage').html('<div class="alert alert-success" role="alert">Uspešno ste kreirali nalog. Uskoro ćete biti redirektovani.</div>');
            }
        });
    });



});