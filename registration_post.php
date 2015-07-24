<?php

if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
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
        if (strlen($password) < 8) {
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

            $statement = $connection->prepare('SELECT id FROM user WHERE name=:name');
            $statement->bindValue(':name', $_POST['name']);
            $statement->execute();
            $array = $statement->fetch();

            $statement = $connection->prepare('INSERT INTO statistic(userId, win, lose, tie) VALUES (:id,0,0,0)');
            $statement->bindValue(':id', $array['id']);
            $statement->execute();

            $_SESSION['user'] = $array['id'];

            header('Location: index.php?page=game');
        }
    }
}
?>

