<?php

if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
if (isset($_GET['fail'])) {
    $fehler = $_GET['fail'];
    if ($fehler === 1) {
        $tpl->assign('message', 'Probier es noch einmal!');
    }
    if ($fehler === 2) {
        $tpl->assign('message', 'Das Passwort ist zu kurz!');
    }
    if ($fehler === 3) {
        $tpl->assign('message', 'Die Passwörter stimmen nicht überein!');
    }
}
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}
?>

