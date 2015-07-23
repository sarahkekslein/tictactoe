<?php
if (isset($_SESSION['user'])) {
    header('Location:index.php?page=game');
} else if(!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}
?>
