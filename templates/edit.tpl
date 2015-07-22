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
    <h1>Dein Profil</h1>
    <p>{$table}</p>

    <p><input type="submit" value="save" name="btn"/>
        <input type="submit" value="change" name="btn"/></p>
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