<?php

if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
    $connection = Database::getInstance();

    $password = $_POST['pw'];
    $username = $_POST['name'];
    $email = $_POST['email'];

    $statement = $connection->prepare("SELECT * FROM user WHERE name = :name");
    $statement->bindValue(':name', $username);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();

    if (count($result) > 0 || $password === '' || $username === '' || $email === '') {
        header('Location: index.php?page=registration&fail=1');
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

