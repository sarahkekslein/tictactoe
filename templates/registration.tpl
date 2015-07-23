<form method="post" action="index.registration_post.php">
    Name: <input type="text" name="name"/>
    </br>
    Email <input type="text" name="email"/>
    </br>
    Passwort: <input type="password" name="pw"/>
    </br>
    Wiederholen: <input type="password" name="pw2">
    </br>
    <input type="submit" value="Registrieren"><br/>
    {if isset($message)}        
        {$message}
    {/if}
</form>