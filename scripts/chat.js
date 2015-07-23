$(document).ready(function () {
    $('#proposal').hide();
    
    $('#chat_partner').keyup(function () {
        var content = $('#chat_partner').val();
        $.ajax({
            type: 'POST',
            url: 'chat.json.php',
            data: {
                "content": content
            },
            async: false

        }).done(function (result) {
            for each(var proposal in result) {
                $('#proposal').append('proposal');
            }
            $('#proposal').show();
        }).fail(function () {
            dialog.show('Fehler', 'Es ist ein Fehler aufgetreten. Bitte laden Sie\n\
                     die Seite neu.');
        });

    });
});
