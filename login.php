<?php

if (isset($_SESSION['user'])) {
    header('Location:index.php?page=game');
} else if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
    if (isset($_GET['fail'])) {
        $fehler = $_GET['fail'];
        if ($fehler === '1') {
            $tpl->assign('message', 'Fehlende Eingabe!');
        }
        if ($fehler === '2') {
            $tpl->assign('message', 'Das Passwort ist falsch!');
        }
        if ($fehler === '3') {
            $tpl->assign('message', 'Der Benutzername existiert nicht! Bitte registriere dich');
        }
    }
}
?>
