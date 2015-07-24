<?php /* Smarty version Smarty-3.1.20, created on 2015-07-24 11:18:58
         compiled from ".\templates\chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634255b0e576e80f45-59113481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d36e0614283f4071c815ab0755b67991861cf3c' => 
    array (
      0 => '.\\templates\\chat.tpl',
      1 => 1437727257,
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
<?php if ($_valid && !is_callable('content_55b0e576ea4398_93214949')) {function content_55b0e576ea4398_93214949($_smarty_tpl) {?>
<h1>Los chatte!</h1>
<?php if (!isset($_smarty_tpl->tpl_vars['show_content']->value)) {?>
    <form method="post" action="index.php?page=chat&amp;content=1">
        Chatpartner: 
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <?php }?>
        </br>
        <input id="chat_partner" type="text" name="user2"/>
        </br>    
        <div id="proposal">
        </div>
        <input type="submit" value="Auswählen">
    </form>
<?php }?>

<form method="post" action="index.php?page=chat_post">   

    <?php if (isset($_smarty_tpl->tpl_vars['show_content']->value)) {?>
        Chatpartner: 
        </br>
        <input id="chat_partner" readonly="readonly" type="text" name="user2" value="<?php echo $_smarty_tpl->tpl_vars['user_to']->value;?>
"/> 
        </br>            
        Verlauf:
        </br>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <textarea readonly="readonly">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </textarea>
        <?php }?>
        </br>
        Nachricht:
        </br>
        <input id="message" type="text" name="message"/>
        </br>
        <input type="submit" value="Senden"><br/>    
    <?php }?>
</form>
<?php }} ?>
