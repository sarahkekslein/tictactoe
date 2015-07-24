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
        Login
    </h1>
    <div class='red'>{if isset($message)}        
        {$message}
        {/if}
        </div>
        <form method="post" action="index.php?page=login_post">
            <table>
                <tr>
                    <td>Benutzername:</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td>Passwort:</td>
                    <td><input type="password" name="pw"/></td>
                </tr>
            </table>
            <br />
            <input type="submit" value="Anmelden" class="button"><br/>
        </form>
        <br />
        <form method="post" action="index.php?page=registration">
            <input type="submit" value="=> Registrieren" class="button"><br/>
        </form>
    </div>