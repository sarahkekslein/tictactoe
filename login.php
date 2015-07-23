<?php
if (isset($_SESSION['user'])) {
    header('Location:index.php?page=game');
} else {
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}
?>
