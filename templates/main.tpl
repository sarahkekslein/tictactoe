<!DOCTYPE html>
<html>
    <head>
        <title>Browserspiel</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>  
        {include file="menu.tpl"}

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