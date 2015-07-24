$(document).ready(function () {
    $('#proposal').hide();
    
    $('#chat_partner').keyup(function () {
        var content = $('#chat_partner').val();
        $.ajax({
            type: 'POST',
            url: 'chat.json.php',
            data: {
                "content": content
            }

        }).done(function (result) {
            var proposals = JSON.parse(result);
            alert(proposals);
            for(var i in result) {
                $('#proposal').append(result[i]);
            }
            $('#proposal').show();
        }).fail(function () {
            dialog.show('Fehler', 'Es ist ein Fehler aufgetreten. Bitte laden Sie\n\
                     die Seite neu.');
        });

    });
});
