<?php
require './smarty/libs/Smarty.class.php';
require './lib/Database.class.php';
session_start();
$tpl = new Smarty();

$tpl->assign('isLoggedIn', isset($_SESSION['user']));

$whitelist = array('login', 'logout', 'edit', 'game', 'login_post', 'registration', 'registration_post', 'chat', 'ranking');
$notLoggedIn = array('login', 'registration', 'registration_post', 'login_post');

if (isset($_GET['page']) && in_array($_GET['page'], $whitelist) && ( isset($_SESSION['user']) || in_array($_GET['page'], $notLoggedIn))) {
    require $_GET['page'] . '.php';
    
}



$tpl->display('templates/main.tpl');


?>

