<?php

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

function data_to_html($data)
{
    $html = '<table id ="abc"';
    $html .= '<tr><th> Name </th><th id="name"> ' . $data['name'] . '</th><th><input type="submit" value="bearbeiten" name="change_name" id="change_name"/></th></tr>';
    $html .= '<tr><th> Email </th><th id="email"> ' . $data['email'] . '</th><th><input type="submit" value="bearbeiten" name="change_email" id="change_email"/></th></tr>';
    $html .= '<tr><th> Punkte </th><th>' . ($data['win'] - $data['lose']) . '</th></tr>';
    $html .= '<tr><th> Spiele  </th><th>' . ($data['tie'] + $data['win'] + $data['lose']) . '</th></tr>';
    $html .= '<tr><th> Gewonnen </th><th>' . $data['win'] . '</th></tr>';
    $html .= '<tr><th> Unentschieden </th><th>' . $data['tie'] . '</th></tr>';
    $html .= '<tr><th> Verloren </th><th>' . $data['lose'] . '</th></tr>';
    $html .= '<tr><th> Über dich </th><th id="description">' . $data['description'] . '</th><th><input type="submit" value="bearbeiten" name="change_description" id="change_description"/></th></tr>';
    return ($html . '</table>');
}

function create_site($tpl)
{
    $data = get_player_info($_SESSION['user']);
    $html = data_to_html($data);
    $tpl->assign('table', $html);
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}

if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
    exit;
}
if (!empty($_POST)) {
    if ($_POST['btn'] === 'Speichern') {
        $statement = '';
        foreach ($_POST as $key => $value) {
            if ($key !== 'btn') {
                $statement = $statement . ', ' . $key . '="' . $value . '"';
            }
        }
        update_player_info($_SESSION['user'], substr($statement, 2));
        create_site($tpl);
    } else if ($_POST['btn'] === 'Passwort aendern') {
        $tpl->assign('tpl_name', 'edit_pw.tpl');
    } else if ($_POST['btn'] === 'Passwort speichern') {
        $data = get_player_info($_SESSION['user']);
        if (password_verify($_POST['old'], $data['password'])) {
            update_player_info($_SESSION['user'], 'password="' . password_hash($_POST['new1'], PASSWORD_DEFAULT) . '"');

            create_site($tpl);
        } else if ($_POST['btn'] === 'change') {
            $tpl->assign('tpl_name', 'edit_pw.tpl');
        } else if ($_POST['btn'] === 'save_pw') {
            $data = get_player_info($_SESSION['user']);
            if (password_verify($_POST['old'], $data['password'])) {
                update_player_info($_SESSION ['user'], 'password="' . password_hash($_POST['new1'], PASSWORD_DEFAULT) . '"');
                create_site($tpl);
            } else {
                $tpl->assign('tpl_name', 'edit_pw.tpl');
                echo "Das alte Passwort war nicht korrekt";
            }
        }
    }
} else {
    create_site($tpl);
}


