<?php

require './lib/Database.class.php';

$db = Database::getInstance();
//$range = array('options' => array('min_range' => 1, 'max_range' => 6));
//$choice = filter_input(INPUT_POST, 'note', FILTER_VALIDATE_INT, $range);


if (empty($choice)) {
    header('Location: register.php');
} else {
    $einfuegen = $db->prepare("INSERT INTO benutzer (name, passwort, email)VALUES (:name, :passwort, :email)");
    $einfuegen->bindValue(':name', $_POST['name']);
    $einfuegen->bindValue(':passwort', password_hash($_POST['pw'], PASSWORD_DEFAULT));
    $einfuegen->bindValue(':note', $_POST['email']);
    $einfuegen->execute();
    $einfuegen->closeCursor();
    echo 'gut';
}

?>

