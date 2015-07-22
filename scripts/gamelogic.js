var current_player = parseInt(Math.random() * 2);
not_clicked = [11, 12, 13, 21, 22, 23, 31, 32, 33];
//Spieler=0, KI=1

$(function () {
    if (current_player === 1) {
        ki_play();
    }
    $('.button').click(function () {
        $(this)
                .css('background-color', '#00FF00')
                .prop('disabled', true);

        var not_clicked_new = [];
        var j = 0;
        var l = not_clicked.length;
        for (var i = 0; i < not_clicked.length; i++) {
            var id=parseInt($(this).attr('id').substring(3));
            if (i !== not_clicked.indexOf(id)) {
                not_clicked_new[j] = not_clicked[i];
                j++;
            }
        }
        this.not_clicked = not_clicked_new;

        ki_play();
    });
});

function ki_play() {
    var random_number = parseInt(Math.random() * (not_clicked.length + 1));
    var field = not_clicked[random_number];
    $('#btn' + field)
            .css('background-color', '#FF0000')
            .prop('disabled', true);
    var not_clicked_new = [];
    var j = 0;
    var l = not_clicked.length;
    for (var i = 0; i < not_clicked.length; i++) {
        if (i !== random_number) {
            not_clicked_new[j] = not_clicked[i];
            j++;
        }
    }
    not_clicked = not_clicked_new;
}