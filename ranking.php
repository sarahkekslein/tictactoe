<?php
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 23.07.2015
 * Time: 12:52
 */
require_once './lib/Member.class.php';
require_once './lib/Ranking.class.php';

if (isset($_GET['page'])) {
    $db_connect = Database::getInstance();
    $data = array();
    $db_request = $db_connect->prepare('SELECT userId FROM statistic');
    $db_request->execute();
    while ($array = $db_request->fetch()) {
        foreach ($array as $key => $value) {
            if (is_integer($key)) {
                $data[] = $value;
            }
        }
    }

    $member_array = array();
    foreach ($data as $id) {
        $member_array[$id] = new Member((int)$id);
    }
    $ranking = new Ranking($member_array);
    $html = $ranking->to_html();
    $tpl->assign('ranking', $html);
    $tpl->assign('tpl_name', $_GET['page'] . '.tpl');
} else {
    echo "Kein Zugriff";
}