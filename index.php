<?php
require './smarty/libs/Smarty.class.php';
session_start();
$tpl = new Smarty();



$tpl->assign('year', date('y'));
$tpl->assign('month', date('F'));



if (isset($_GET['page'])) {
    require $_GET['page'] . '.php';
    
}



$tpl->display('templates/main.tpl');


?>

