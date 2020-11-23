$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form[name="register"]').submit(function(event) {
        event.preventDefault();

        const form = $(this);
        const action = form.attr('action');
        const first_name = form.find('input[name="first_name"]').val();
        const last_name = form.find('input[name="last_name"]').val();
        const document = form.find('input[name="document"]').val();
        const genre = form.find('select[name="genre"]').val();
        const date_of_birth = form.find('input[name="date_of_birth"]').val();
        const came_from = form.find('select[name="came_from"]').val();
        const cell = form.find('input[name="cell"]').val();
        const email = form.find('input[name="email"]').val();
        const password = form.find('input[name="password"]').val();
        const newsletter = form.find('input[name="newsletter"]').val();

        $.post(action, { first: first_name, last: last_name, cpf: document, genre: genre, dateOfBirth: date_of_birth, cameFrom: came_from,
            cell: cell, email: email, password: password, newsletter: newsletter }, function(response) {
            console.log(response);

            if (response.message) {
                ajaxMessage(response.message, 3);
            }

            if (response.redirect) {
                var delay = 3000;
                setTimeout(function() {
                    window.location.href = response.redirect;
                }, delay)
            }
        }, 'json');

    });

    // AJAX RESPONSE
    var ajaxResponseBaseTime = 3;

    function ajaxMessage(message, time) {
        var ajaxMessage = $(message);

        ajaxMessage.append("<div class='message_time'></div>");
        ajaxMessage.find(".message_time").animate({ "width": "100%" }, time * 1000, function() {
            $(this).parents(".message").fadeOut(200);
        });

        $(".ajax_response").append(ajaxMessage);
    }

    // AJAX RESPONSE MONITOR
    $(".ajax_response .message").each(function(e, m) {
        ajaxMessage(m, ajaxResponseBaseTime += 1);
    });

    // AJAX MESSAGE CLOSE ON CLICK
    $(".ajax_response").on("click", ".message", function(e) {
        $(this).effect("bounce").fadeOut(1);
    });
});