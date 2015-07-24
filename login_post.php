<?php

if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
    $connection = Database::getInstance();
    $password = $_POST['pw'];
    $username = $_POST['name'];
    $email = $_POST['name'];


    if(empty($_POST['pw']) || empty($_POST['name'])){
        header('Location:index.php?page=login&fail=1');
    }

    $statement = $connection->prepare("SELECT password FROM user WHERE name = :username OR email =:email");
    $statement->bindValue(':username', $username);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $hash = $statement->fetch();
    $statement->closeCursor();

    $statement = $connection->prepare("SELECT id FROM user WHERE name = :username OR email =:email");
    $statement->bindValue(':username', $username);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $id = $statement->fetch();
    $statement->closeCursor();
    
    echo($hash);

    if ($hash !== false) {
        if (password_verify($password, $hash['password'])) {
            $_SESSION['user'] = $id['id'];
            header('Location:index.php?page=game');
        }else{
            header('Location:index.php?page=login&fail=2');
        }
    }
    header('Location:index.php?page=login&fail=3');
}
?>
