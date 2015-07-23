<script src="./scripts/edit_pw.js"></script>
<link rel="stylesheet" href="./styles/edit.css" />
<div class="center">
    <h1>Passwort aendern</h1>
    <form action="index.php?page=edit" method="POST">
        <table>
            <tr>
                <td>Altes Passwort:</td>
                <td><input type="password" name="old" id="old"></td>
            </tr>
            <tr>
                <td>Neues Passwort:</td>
                <td><input type="password" name="new1" id="new1"></td>
            </tr>
            <tr>
                <td>Wiederholen:</td>
                <td><input type="password" name="new2" id="new2"></td>
            </tr>
            <tr>
            <td><input type="submit" value="Passwort speichern" name="btn" id="save_pw"/></td>
            </tr>
        </table>
        <div id="output"></div>
    </form>
</div>