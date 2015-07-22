<!DOCTYPE html>
<html>
    <head>
        <title>TicTacToe</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="./styles/main.css" />
        <script src="./scripts/jquery.js"></script>
        <script src="./scripts/gamelogic.js"></script>
    </head>
    <body>  
        {include file="menu.tpl"}

        <div id="datum">{$month} 20{$year}</div>  
        {if isset($tpl_name)}
            {include file="$tpl_name"}
        {else}
            {include file="index.tpl"}   
        {/if}
        <div id="current_player"></div>
        <table>
            <tr>
                <td><button id="btn11" class="button"></button></td>
                <td><button id="btn12" class="button"></button></td>
                <td><button id="btn13" class="button"></button></td>
            </tr>
            <tr>
                <td><button id="btn21" class="button"></button></td>
                <td><button id="btn22" class="button"></button></td>
                <td><button id="btn23" class="button"></button></td>
            </tr>
            <tr>
                <td><button id="btn31" class="button"></button></td>
                <td><button id="btn32" class="button"></button></td>
                <td><button id="btn33" class="button"></button></td>
            </tr>
        </table>
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