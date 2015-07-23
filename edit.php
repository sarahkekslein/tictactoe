<?php
require_once './lib/Database.class.php';
require_once './smarty/libs/Smarty.class.php';
/**
 * Created by PhpStorm.
 * User: Marvin
 * Date: 22.07.2015
 * Time: 13:02
 */

$_SESSION['user'] = 2;
function get_player_info($id)
{
    $data = array("id" => $id);
    $db_connection = Database::getInstance();
    $data_statistic = Database::get_data('SELECT name, password, email, description FROM user WHERE id=' . $id, $db_connection);
    $data_user = Database::get_data('SELECT win, lose, tie FROM statistic WHERE userid=' . $id, $db_connection);
    $data = array_merge($data, $data_statistic, $data_user);
    $db_connection = null;
    return $data;
}

function update_player_info($id, $statement, $db_connection = null)
{
    $db_connection = ($db_connection === null) ? Database::getInstance() : $db_connection;
    $db_statement = $db_connection->prepare('UPDATE user SET ' . $statement . ' WHERE id=' . $id);
    $db_statement->execute();
}

function data_to_html($data, $editable)
{
    $html = '<table>';
    foreach ($data as $key => $value) {
        if ($key !== 'password') {
            $html = $html . '<tr><th>' . $key . '</th>' . '<th>';
            $html = (in_array($key, $editable)) ? $html . '<input name="' . $key . '" type="text" value="' . $value . '"></input></th></tr>' : $html . $value . '</th></tr>';
        }
    }
    return ($html . '</table>');
}

function create_site()
{
    $editable = ['name', 'passwort', 'email', "description"];
    $data = get_player_info($_SESSION['user']);
    $html = data_to_html($data, $editable);
    $templet = new Smarty();
    $templet->assign('table', $html);
    $templet->display('edit.tpl');
}

if (!empty($_POST)) {
    if ($_POST['btn'] === 'save') {
        $statement = '';
        foreach ($_POST as $key => $value) {
            if ($key !== 'btn') {
                $statement = $statement . ', ' . $key . '="' . $value . '"';
            }
        }
        update_player_info($_SESSION['user'], substr($statement, 2));
        create_site();
    } else if ($_POST['btn'] === 'change') {
        $templet = new Smarty();
        $templet->display('./templates/edit_pw.tpl');
    } else if ($_POST['btn'] === 'save_pw') {
        $data = get_player_info($_SESSION['user']);
        if (password_verify($_POST['old'], $data['password'])) {
            update_player_info($_SESSION['user'], 'password="' . password_hash($_POST['new1'], PASSWORD_DEFAULT) . '"');
            create_site();
        } else {
            $templet = new Smarty();
            $templet->display('./templates/edit_pw.tpl');
            echo "Das alte Passwort war nicht korrekt";
        }
    }
} else {
    create_site();
}
