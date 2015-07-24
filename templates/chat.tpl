<link rel="stylesheet" href="./styles/chat.css" />
<div class="center">
    <h1>Chat</h1>
    {if !isset($show_content)}
        <form method="post" action="index.php?page=chat&amp;content=1">
            Chatpartner:
            {if isset($message)}
                {$message}
            {/if}
            <br /><br />
            <input id="chat_partner" type="text" name="user2" class="textfield" />
            <br /><br />    
            <div id="proposal">
            </div>
            <input type="submit" value="Auswählen" class="button">
        </form>
    {/if}

    <form method="post" action="index.php?page=chat_post">   

        {if isset($show_content)}
            Chatpartner:
            <br />
            <input id="chat_partner" readonly="readonly" type="text" name="user2" value="{$user_to}" class="textfield" /> 
            <br /><br />
            Verlauf:
            <br />
            {if isset($message)}
                <textarea readonly="readonly" class="textarea">
                    {$message}
                </textarea>
            {/if}
            <br /><br />
            Nachricht:
            <br />
            <input id="message" type="text" name="message" class="textfield" />
            <br /><br /><br />
            <input type="submit" value="Senden" class="button"><br/>    
        {/if}
    </form>
</div>