<link rel="stylesheet" href="./styles/chat.css" />
<script src="./scripts/chat.js"></script>
<div class="center">
    <h1>Chat</h1>{if !isset($show_content)}
    <form method="post" action="index.php?page=chat&amp;content=1">
        Chatpartner:
        <div id="message">
            {if isset($message)}
                {$message}
            {/if}
        </div>
        <br />
        <input id="chat_partner" autocomplete="off" type="text" name="user2"/>
        <br /><br />
        <div id="proposals">
            Vorschläge:
            <br /><br />
            <select id="proposal" name="proposal">
            </select>
            <br/><br/>
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