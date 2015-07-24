<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 23.07.2015
 * Time: 21:44
 */

require_once './lib/Database.class.php';
session_start();

$db_connect = Database::getInstance();
$data = Database::get_data("SELECT win, lose, tie FROM statistic WHERE userid=" . $_SESSION['user'], $db_connect);
$statement = "UPDATE statistic SET win=:win,lose=:lose,tie=:tie WHERE userid=" . $_SESSION['user'];

switch ($_POST['content']) {
    case 0:
        $data['lose']++;
        break;
    case 1:
        $data['tie']++;
        break;
    case 2:
        $data['win']++;
        break;
}

$db_upload = $db_connect->prepare($statement);
$db_upload->bindValue(':win', "".$data['win']);
$db_upload->bindValue(':lose', "".$data['lose']);
$db_upload->bindValue(':tie', "".$data['tie']);
$db_upload->execute();
$db_upload->closeCursor();