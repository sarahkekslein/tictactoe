<script src="./scripts/edit_pw.js"></script>
<h1>Passwort aendern</h1>
<form action="index.php?page=edit" method="POST">
        <p>Altes Passwort: <input type="password" name="old" id="old"></p>

        <p>Neues Passwort: <input type="password" name="new1" id="new1"></p>

        <p>Wiederholen: <input type="password" name="new2" id="new2"></p>

        <p><input type="submit" value="save_pw" name="btn" id="save_pw"/> </p>

        <div id="output"></div>
</form>
