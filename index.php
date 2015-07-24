<?php
require './smarty/libs/Smarty.class.php';
require './lib/Database.class.php';

session_start();

//getting template engine
$tpl = new Smarty();

$tpl->assign('isLoggedIn', isset($_SESSION['user']));

//list, which contains the allowed sites
define('WHITELIST', array('login', 'logout', 'edit', 'game', 'login_post', 'registration', 'registration_post', 'chat', 'ranking', 'chat_post'));
//list, which contains the sites a user can see although he is not logged in

define('NOT_LOGGED_IN', array('login', 'registration', 'registration_post', 'login_post', 'ranking'));

//when logged in and visiting index-page redirect to game
if (isset($_SESSION['user']) && empty($_GET['page'])) {
    $_GET['page'] = 'game';
}

if (isset($_GET['page']) && in_array($_GET['page'], WHITELIST) && ( isset($_SESSION['user']) || in_array($_GET['page'], NOT_LOGGED_IN))) {
    require $_GET['page'] . '.php';
}

$tpl->display('templates/main.tpl');
?>

