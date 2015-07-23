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

        var id = parseInt($(this).attr('id').substring(3));

        not_clicked = delete_field(not_clicked, not_clicked.indexOf(id));
        if (win_or_game_end()) {
            set_buttons_inactive();
        }
        ki_play();
        if (win_or_game_end()) {
            set_buttons_inactive();
        }
    });
    $('#new_game').click(function(){
        $('.button').css('background-color','#dcdcdc').prop('disabled',false);
        not_clicked = [11, 12, 13, 21, 22, 23, 31, 32, 33];
        current_player = parseInt(Math.random() * 2);
        if (current_player === 1) {
            ki_play();
        }
    });
});

function set_buttons_inactive() {
    //TODO
}

function ki_play() {
    var random_number = parseInt(Math.random() * (not_clicked.length + 1));
    while(random_number===not_clicked.length){
        random_number = parseInt(Math.random() * (not_clicked.length + 1));
    }
    var field = not_clicked[random_number];
    $('#btn' + field)
            .css('background-color', '#FF0000')
            .prop('disabled', true);

    not_clicked = delete_field(not_clicked, random_number);
}

function delete_field(list, index){
    var j=0;
    var not_clicked_new=[];
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
            && $('#btn11').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    } else if ($('#btn21').css('background-color') === $('#btn22').css('background-color')
            && $('#btn22').css('background-color')=== $('#btn23').css('background-color')
            && $('#btn21').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    } else if ($('#btn31').css('background-color') === $('#btn32').css('background-color')
            && $('#btn32').css('background-color')=== $('#btn33').css('background-color')
            && $('#btn31').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    }
    return false;
}

function win_colum() {
    if ($('#btn11').css('background-color') === $('#btn21').css('background-color')
            && $('#btn21').css('background-color') === $('#btn31').css('background-color')
            && $('#btn11').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    } else if ($('#btn12').css('background-color') === $('#btn22').css('background-color')
            && $('#btn22').css('background-color') === $('#btn32').css('background-color')
            && $('#btn12').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    } else if ($('#btn13').css('background-color') === $('#btn23').css('background-color')
            && $('#btn23').css('background-color') === $('#btn33').css('background-color')
            && $('#btn13').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    }
    return false;
}

function win_diagonal() {
    if ($('#btn11').css('background-color') === $('#btn22').css('background-color')
            && $('#btn22').css('background-color') === $('#btn33').css('background-color')
            && $('#btn11').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn12').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    } else if ($('#btn31').css('background-color') === $('#btn22').css('background-color')
            && $('#btn22').css('background-color') === $('#btn13').css('background-color')
            && $('#btn31').css('background-color') !== 'rgb(211, 211, 211)') {
        if ($('#btn11').css('background-color') === 'rgb(255, 0, 0)') {
            alert("Der Computer hat gewonnen :(");
            return true;
        } else {
            alert("Du hast gewonnen :)");
            return true;
        }
    }
    return false;
}

function tie() {
    if ($('#btn11').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn12').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn13').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn21').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn22').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn23').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn31').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn32').css('background-color') !== ('rgb(221, 221, 221)')
            && $('#btn33').css('background-color') !== ('rgb(221, 221, 221)')) {
        alert("Keiner hat gewonnen :/");
        return true;
    }
    return false;
}

function win_or_game_end() {
    win_row();
    win_colum();
    win_diagonal();
    tie();
}