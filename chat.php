<?php
if(!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {    
    $tpl->assign('tpl_name', $_GET['page'] . ".tpl");
}
?>
