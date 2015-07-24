<form method="post" action="index.php?page=login_post">
    Benutzername: <input type="text" name="name"/>
    </br>
    Passwort: <input type="password" name="pw"/>
    </br>
    <input type="submit" value="Anmelden"><br/>
</form>
{if isset($message)}        
        {$message}
    {/if}
<form method="post" action="index.php?page=registration">
    <input type="submit" value="-->Registrieren"><br/>
</form>
