<?php

require './lib/Database.class.php';

$connection = Database::getInstance();

$password = $_POST['pw'];
$password2 = $_POST['pw2'];
$username = $_POST['name'];
$email = $_POST['email'];

$statement = $connection->prepare("SELECT * FROM user WHERE name = :name");
$statement->bindValue(':name', $username);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();

if (count($result) > 0 || $password === '' || $password2 === '' || $username === '' || $email === '') {
    header('Location: index.php?page=registration&fail=1');
} else {
    if ($password . length < 8) {
        header('Location: index.php?page=registration&fail=2');
    } else if ($password !== $password2) {
        header('Location: index.php?page=registration&fail=3');
    } else {
        $statement = $connection->prepare("INSERT INTO user (name, password, email) VALUES (:name, :password, :email)");
        $statement->bindValue(':name', $_POST['name']);
        $statement->bindValue(':password', password_hash($_POST['pw'], PASSWORD_DEFAULT));
        $statement->bindValue(':email', $_POST['email']);
        $statement->execute();
        $statement->closeCursor();

        header('Location: index.php?page=game');
    }
}
?>

