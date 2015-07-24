<script src="./scripts/edit.js"></script>
<link rel="stylesheet" href="./styles/edit.css" />
<div class="center">
<form action="index.php?page=edit" method="POST">
    <h1>Dein Profil</h1>
    <p><table>{$table}</table></p>
    <p><input type="submit" value="Speichern" name="btn"/>
        <input type="submit" value="Passwort aendern" name="btn"/></p>
</form>
</div>
