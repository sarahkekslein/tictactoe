
<h1>Los chatte!</h1>
{if !isset($show_content)}
    <form method="post" action="index.php?page=chat&amp;content=1">
        Chatpartner: 
        {if isset($message)}
            {$message}
        {/if}
        </br>
        <input id="chat_partner" type="text" name="user2"/>
        </br>    
        <div id="proposal">
        </div>
        <input type="submit" value="Auswählen">
    </form>
{/if}

<form method="post" action="index.php?page=chat_post">   

    {if isset($show_content)}
        Chatpartner: 
        </br>
        <input id="chat_partner" readonly="readonly" type="text" name="user2" value="{$user_to}"/> 
        </br>            
        Verlauf:
        </br>
        {if isset($message)}
            <textarea readonly="readonly">
                {$message}
            </textarea>
        {/if}
        </br>
        Nachricht:
        </br>
        <input id="message" type="text" name="message"/>
        </br>
        <input type="submit" value="Senden"><br/>    
    {/if}
</form>
