<?php
require './lib/Database.class.php';

$content = $_POST['content'];
$connection = Database::getInstance();
$statement = $connection->prepare("SELECT name FROM user WHERE name LIKE :content");
$statement->bindValue(':content', $content . '%');
$statement->execute();
$result = $statement->fetchAll();
json_encode($result);
?>

