<!DOCTYPE html>
<html>
    <head>
        <title>Browserspiel</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="./styles/main.css" />
        <script src="./scripts/jquery.js"></script>    
    </head>
    {if $isLoggedIn}
        <header>
            <form method="post" action="index.php?page=logout">
                <input id="logout" type="submit" value="Logout">
            </form>
            <form method="post" action="index.php?page=game">
                <input id="start" type="submit" value="Zum Spiel">
            </form>
            <form method="post" action="index.php?page=edit">
                <input id="profile" type="submit" value="Profil">
            </form>             
            <form method="post" action="index.php?page=chat">
                <input id="chat" type="submit" value="Chat">
            </form> 
            <div id="datum">{$month} 20{$year}</div> 
        </header>
    {/if}
    <body>         
        {if isset($tpl_name)}
            {include file="$tpl_name"}
        {else}
            {include file="index.tpl"}   
        {/if}
    </body> 
    <footer> 
        <div>
        <a href ="index.php?page=imprint">Impressum </a>
        |
        <a href ="index.php?page=contact"> Kontakt</a> 
        </div>
    </footer>
</html>