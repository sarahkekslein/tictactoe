var current_player = parseInt(Math.random() * 2);
not_clicked = [11, 12, 13, 21, 22, 23, 31, 32, 33];
var KI = 1;
var WIN = 2, TIE = 1, LOSE = 0;

$(function () {
    if (current_player === KI) {
        ki_play();
    }
    $('.button').click(function () {
        $(this)
            .css('background-color', '#00FF00')
            .prop('disabled', true)
            .html('X');

        var id = parseInt($(this).attr('id').substring(3));

        not_clicked = delete_field(not_clicked, not_clicked.indexOf(id));
        if (win_or_game_end()) {
            set_buttons_inactive();
            return;
        }
        ki_play();
        if (win_or_game_end()) {
            set_buttons_inactive();
            return;
        }
    });
    $('#new_game').click(function () {
        $('.button')
            .css('background-color', '#dcdcdc')
            .prop('disabled', false)
            .html('');
        not_clicked = [11, 12, 13, 21, 22, 23, 31, 32, 33];
        current_player = parseInt(Math.random() * 2);
        if (current_player === KI) {
            ki_play();
        }
    });
});

function set_buttons_inactive() {
    $('.button').prop('disabled', true);
}

function ki_play() {
    var random_number = parseInt(Math.random() * (not_clicked.length + 1));
    while (random_number === not_clicked.length) {
        random_number = parseInt(Math.random() * (not_clicked.length + 1));
    }
    var field = not_clicked[random_number];
    $('#btn' + field)
        .css('background-color', '#FF0000')
        .prop('disabled', true)
        .html('O');

    not_clicked = delete_field(not_clicked, random_number);
}

function delete_field(list, index) {
    var j = 0;
    var not_clicked_new = [];
    for (var i = 0; i < not_clicked.length; i++) {
        if (i !== index) {
            not_clicked_new[j] = not_clicked[i];
            j++;
        }
    }
    return not_clicked_new;
}

function win_row() {
    if ($('#btn11').css('background-color') === $('#btn12').css('background-color')
        && $('#btn12').css('background-color') === $('#btn13').css('background-color')
        && $('#btn11').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    } else if ($('#btn21').css('background-color') === $('#btn22').css('background-color')
        && $('#btn22').css('background-color') === $('#btn23').css('background-color')
        && $('#btn21').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn21').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    } else if ($('#btn31').css('background-color') === $('#btn32').css('background-color')
        && $('#btn32').css('background-color') === $('#btn33').css('background-color')
        && $('#btn31').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn31').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    }
    return false;
}

function win_colum() {
    if ($('#btn11').css('background-color') === $('#btn21').css('background-color')
        && $('#btn21').css('background-color') === $('#btn31').css('background-color')
        && $('#btn11').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    } else if ($('#btn12').css('background-color') === $('#btn22').css('background-color')
        && $('#btn22').css('background-color') === $('#btn32').css('background-color')
        && $('#btn12').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn12').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    } else if ($('#btn13').css('background-color') === $('#btn23').css('background-color')
        && $('#btn23').css('background-color') === $('#btn33').css('background-color')
        && $('#btn13').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn13').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    }
    return false;
}

function win_diagonal() {
    if ($('#btn11').css('background-color') === $('#btn22').css('background-color')
        && $('#btn22').css('background-color') === $('#btn33').css('background-color')
        && $('#btn11').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    } else if ($('#btn31').css('background-color') === $('#btn22').css('background-color')
        && $('#btn22').css('background-color') === $('#btn13').css('background-color')
        && $('#btn31').css('background-color') !== 'rgb(220, 220, 220)') {
        if ($('#btn31').css('background-color') === 'rgb(255, 0, 0)') {
            return upload(LOSE);
        } else {
            return upload(WIN);
        }
    }
    return false;
}

function tie() {
    if ($('#btn11').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn12').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn13').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn21').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn22').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn23').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn31').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn32').css('background-color') !== ('rgb(220, 220, 220)')
        && $('#btn33').css('background-color') !== ('rgb(220, 220, 220)')) {
        upload(TIE);
    }
    return false;
}

function win_or_game_end() {
    if (win_row() || win_colum() || win_diagonal() || tie()) {
        return true;
    }
    return false;
}

function upload(winner) {
    $.post('upload_winner.json.php', {content: winner});
    switch (winner) {
        case TIE :
            alert("Keiner hat gewonnen :/");
            break;
        case LOSE:
            alert("Der Computer hat gewonnen :(");
            break;
        case WIN:
            alert("Du hast gewonnen :)");
            break;
    }
    return true;
}