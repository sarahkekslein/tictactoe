<?php
if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else if (isset($_POST['user2']) || isset($_GET['user2'])){
    if (isset($_POST['user2'])) {
        $user2_name = $_POST['user2'];
    } else if (isset($_GET['user2'])) {
        $user2_name = $_GET['user2'];
    }
    
    $connection = Database::getInstance();
    $statement = $connection->prepare("SELECT id FROM user WHERE name = :username");
    $statement->bindValue(':username', $user2_name);
    $statement->execute();
    $id_user2 = $statement->fetch();
    $statement->closeCursor();

    if (!$id_user2 || isset($_GET['fail'])) {
        $tpl->assign('message', 'Dieser Benutzer existiert nicht!');
    } else if (isset($_GET['content'])) {
        $tpl->assign('show_content', true);

        $statement = $connection->prepare("SELECT * FROM chat c JOIN user u ON c.`from` = u.`id` WHERE ((`from` = :user1 AND `to` = :user2) OR (`from` = :user2 AND `to` = :user1))");
        $statement->bindValue('user1', intval($_SESSION['user']));
        $statement->bindValue('user2', intval($id_user2['id']));
        $statement->execute();
        $messages = $statement->fetchAll();
        $statement->closeCursor();

        $content = "";
        foreach ($messages as $message) {
            $content .= "\nAbsender: " . $message['name'] . "\nNachricht: " . $message['message'] . "\n";
        }

        $tpl->assign('user_to', $user2_name);
        $tpl->assign('message', $content);
    }
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
} else {
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}
?>
