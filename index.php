<?php
require './smarty/libs/Smarty.class.php';
$tpl = new Smarty();



$tpl->assign('year', date('y'));
$tpl->assign('month', date('F'));



if (isset($_GET['page'])) {
    require $_GET['page'] . '.php';
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}



$tpl->display('templates/main.tpl');


?>

