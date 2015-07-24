<?php /* Smarty version Smarty-3.1.20, created on 2015-07-24 12:36:57
         compiled from ".\templates\chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634255b0e576e80f45-59113481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d36e0614283f4071c815ab0755b67991861cf3c' => 
    array (
      0 => '.\\templates\\chat.tpl',
      1 => 1437734058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2634255b0e576e80f45-59113481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0e576ea4398_93214949',
  'variables' => 
  array (
    'show_content' => 0,
    'message' => 0,
    'user_to' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0e576ea4398_93214949')) {function content_55b0e576ea4398_93214949($_smarty_tpl) {?><link rel="stylesheet" href="./styles/chat.css" />
<script src="./scripts/chat.js"></script>
<div class="center">
    <h1>Chat</h1><?php if (!isset($_smarty_tpl->tpl_vars['show_content']->value)) {?>
    <form method="post" action="index.php?page=chat&amp;content=1">
        Chatpartner:
        <div id="messageFail">
            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            <?php }?>
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
    <?php }?>

        <form method="post" action="index.php?page=chat_post">   

            <?php if (isset($_smarty_tpl->tpl_vars['show_content']->value)) {?>
                Chatpartner:
                <br />
                <input id="chat_partner" readonly="readonly" type="text" name="user2" value="<?php echo $_smarty_tpl->tpl_vars['user_to']->value;?>
" class="textfield" />
                <br /><br />
                Verlauf:
                <br />
                <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                    <textarea readonly="readonly" class="textarea">
                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                    </textarea>
                <?php }?>
                <br /><br />
                Nachricht:
                <br />
                <input id="message" type="text" name="message" class="textfield" />
                <br /><br /><br />
                <input type="submit" value="Senden" class="button"><br/>    
            <?php }?>
        </form>
    </div><?php }} ?>
