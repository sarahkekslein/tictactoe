<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
{include file="menu.tpl"}
<form action="edit.php" method="POST">
    <h1>Passwort aendern</h1>

    <form action="login_post.php" method="POST">
        <p>Altes Passwort: <input type="password" name="old"></p>

        <p>Neues Passwort: <input type="password" name="new1"></p>

        <p>Wiederholen: <input type="password" name="new2"></p>

        <p><input type="submit" value="save_pw" name="btn"/> </p>
    </form>
    <p></p>
</body>
<footer>
    <ul>
        <li>
            <a href="index.php?page=imprint">Impressum </a>
        </li>
        <li>
            <a href="index.php?page=contact"> Kontakt</a>
        </li>
    </ul>
</footer>
</html>