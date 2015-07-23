<!DOCTYPE html>
<html>
    <head>
        <title>Browserspiel</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="./styles/main.css" />
        <script src="./scripts/jquery.js"></script>

    </head>
    <header><form method="post" action="index.php?page=logout">
            <input id="logout" type="submit" value="Logout">
        </form>
        <form method="post" action="index.php?page=game">
            <input id="start" type="submit" value="Startseite">
        </form>  
    </header>
    <body>        
        <div id="datum">{$month} 20{$year}</div>  
        {if isset($tpl_name)}
            {include file="$tpl_name"}
        {else}
            {include file="index.tpl"}   
        {/if}
    </body> 
    <footer> 
        <ul>
            <li>
                <a href ="index.php?page=imprint">Impressum </a>
            </li>
            <li>
                <a href ="index.php?page=contact"> Kontakt</a> 
            </li>

        </ul>
    </footer>
</html>