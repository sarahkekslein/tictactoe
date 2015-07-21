<!DOCTYPE html>
<html>
    <head>
        <title>Browserspiel</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>  
        {include file="menueLeiste.tpl"}

        <div id="datum">{$monat} 20{$jahr}</div>  
Hallo
        {if isset($tpl_name)}
            {include file="$tpl_name"}
        {/if}
    </body> 
    <footer> 
        <ul>
            <li>
                <a href ="index.php?page=impressum">Impressum </a>
            </li>
            <li>
                <a href ="index.php?page=kontakt"> Kontakt</a> 
            </li>

        </ul>
    </footer>
</html>