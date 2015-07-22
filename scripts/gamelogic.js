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
        not_clicked = not_clicked_new;

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

function win_row(){
    if ($('#btn11').prop('background-color')===$('#btn12').prop('background-color')===$('#btn13').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }

    else if ($('#btn21').prop('background-color')===$('#btn22').prop('background-color')===$('#btn23').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }

    else if ($('#btn31').prop('background-color')===$('#btn32').prop('background-color')===$('#btn33').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }
}




function win_colum(){
    if ($('#btn11').prop('background-color')===$('#btn21').prop('background-color')===$('#btn31').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }

    else if ($('#btn12').prop('background-color')===$('#btn22').prop('background-color')===$('#btn32').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }

    else if ($('#btn13').prop('background-color')===$('#btn23').prop('background-color')===$('#btn33').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }
}

function win_diagonal(){
    if ($('#btn11').prop('background-color')===$('#btn22').prop('background-color')===$('#btn33').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }

    else if ($('#btn31').prop('background-color')===$('#btn22').prop('background-color')===$('#btn13').prop('background-color')){
        if($('#btn11').prop('background-color')==='#FF0000'){
            alert("Der Computer hat gewonnen :(");
        }
        else{
            alert("Du hast gewonnen :)");
        }

    }


}