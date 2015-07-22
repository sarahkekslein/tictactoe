<?php

require './lib/Database.class.php';

$connection = Database::getInstance();
$password = $_POST['pw'];
$username = $_POST['name'];
$email = $_POST['email'];


//$statement = $connection->prepare()

$statement = $db->prepare("INSERT INTO user (name, password, email) VALUES (:name, :password, :email)");
$statement->bindValue(':name', $_POST['name']);
$statement->bindValue(':password', password_hash($_POST['pw'], PASSWORD_DEFAULT));
$statement->bindValue(':email', $_POST['email']);
$statement->execute();
$statement->closeCursor();
echo 'gut';


?>

