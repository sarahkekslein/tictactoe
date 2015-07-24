/**
 * Created by Marvin on 24.07.2015.
 */

$(document).ready(function () {
    $('#change_name').click(function () {
        var text = $('#name').html();
        $('#name').html('<input type=text value="' + text + '" name=name>');
        this.disabled = true;
        return false;
    });

    $('#change_email').click(function () {
        var text = $('#email').html();
        $('#email').html('<input type=text value="'+text+'" name=email>');
        this.disabled = true;
        return false;
    });

    $('#change_description').click(function () {
        var text = $('#description').html();
        alert("12");
        $('#description').html('<textarea name=description>'+text+'</textarea>');
        this.disabled = true;
        return false;
    });
});
