<?php

if (!isset($_GET['page'])) {
    echo 'Zugriff verweigert!';
} else {
    session_unset();
    header('Location: index.php?page=login');
}
?>

