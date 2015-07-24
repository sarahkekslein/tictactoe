<link rel="stylesheet" href="./styles/index.css" />
<div class="center">
    <h1 class="red">
        Tic
    </h1>
    <h1>
        Tac
    </h1>
    <h1 class="blue">
        Toe
    </h1>
    <h1>
        Registrierung
    </h1>
    <div class='red'>{if isset($message)}        
            {$message}
        {/if}</div>
    <form method="post" action="index.php?page=registration_post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>Passwort:</td>
                <td><input type="password" name="pw" /></td>
            </tr>
            <tr>
                <td>Wiederholen:</td>
                <td><input type="password" name="pw2" /></td>
            </tr>
        </table>
        <br />
        <input type="submit" value="jetzt registrieren" class="button"><br/>
    </form>
    <br />
    <form method="post" action="index.php?page=login">
        <input type="submit" value="=> Anmelden" class="button"><br/>
    </form>
</div>