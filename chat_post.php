<?php

$connection = Database::getInstance();

$statement = $connection->prepare("SELECT id FROM user WHERE name = :username");
$statement->bindValue(':username', $_POST['user2']);
$statement->execute();
$id_user2 = $statement->fetch();
$statement->closeCursor();

if ($id_user2 !== false) {
    $statement = $connection->prepare("INSERT INTO `chat` (`from`, `to`, `message`, `time`) VALUES (:from, :to, :message, :time)");
    $statement->bindValue(':message', $_POST['message']);
    $statement->bindValue(':time', ''.time());
    $statement->bindValue(':from', intval($_SESSION['user']));
    $statement->bindValue(':to', intval($id_user2['id']));
    $statement->execute();
    $statement->closeCursor();
    
    header('Location: index.php?page=chat&content=1&user2=' . $_POST['user2']);
} else {
    header('Location: index.php?page=chat&fail=1');
}
?>
