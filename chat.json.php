<?php
require './lib/Database.class.php';

$content = $_POST['content'];
$connection = Database::getInstance();
$statement = $connection->prepare("SELECT name FROM user WHERE name LIKE :content");
$statement->bindValue(':content', $content . '%');
$statement->execute();
$result = $statement->fetchAll();
$proposals = array();
foreach($result as $proposal) {
    $proposals[] = $proposol['name'];
}
echo json_encode($proposals);
?>

