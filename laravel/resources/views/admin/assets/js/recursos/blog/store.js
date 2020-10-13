$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form[name="admin.blog.store"]').submit(function(event) {
        event.preventDefault();

        const form = $(this);
        const action = form.attr('action');
        const title = form.find('input[name="title"]').val();
        const subtitle = form.find('input[name="subtitle"]').val();
        const content = form.find('input[name="content"]').val();
        const cover = form.find('input[name="cover"]').val();
        const author = form.find('input[name="author"]').val();

        $.post(action, { text: title, text: subtitle, text: content, text: cover, text: author}, function(response) {
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