<?php

if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
    if (isset($_GET['fail'])) {
        $tpl->assign('message', 'Probier es noch einmal!');
    }
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}
?>

