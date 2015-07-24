$(document).ready(function () {
    $('#proposals').hide();

    $('#chat_partner').keyup(function () {

        $('#proposal').empty();
        var content = $('#chat_partner').val();
        $.ajax({
            type: 'POST',
            url: 'chat.json.php',
            data: {
                "content": content
            }

        }).done(function (result) {
            var proposals = JSON.parse(result);
            var content = '';
            for (var i = 0; i < proposals.length; i++) {
                content += '<option value="' + proposals[i] + '">' + proposals[i] + '</option>';
                $('#proposal').append(content);
            }
            if (proposals.length > 0) {
                $('#proposals').show();
            } else  {
                $('#proposals').hide();
            }
        }).fail(function () {
            dialog.show('Fehler', 'Es ist ein Fehler aufgetreten. Bitte laden Sie\n\
                     die Seite neu.');
        });

    });


    $('#proposal').change(function () {
        $('#chat_partner').prop('value', $('#proposal').val());
    });
});
