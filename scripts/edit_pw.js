$(document).ready(function () {
    $('#save_pw').click(function () {
        if($('#new1').val().length < 8){
            $('#output').html('Das neue Passwort muss min 8 Zeichen lang sein');
            return false;
        }

        if ($('#new1').val() !== $('#new2').val()) {
            $('#output').html('Die beiden Passwörter sind nicht identisch');
            return false;
        }
    });
});
