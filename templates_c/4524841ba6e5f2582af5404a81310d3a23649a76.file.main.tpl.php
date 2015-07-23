<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 14:59:17
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:753555ae43003070c5-17770242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4524841ba6e5f2582af5404a81310d3a23649a76' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1437656302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '753555ae43003070c5-17770242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55ae430063a431_47381099',
  'variables' => 
  array (
    'isLoggedIn' => 0,
    'tpl_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae430063a431_47381099')) {function content_55ae430063a431_47381099($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Browserspiel</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="./styles/main.css" />
        <script src="./scripts/jquery.js"></script>    
    </head>
    <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
        <header class="header">
            <form method="post" action="index.php?page=game">
                <input id="start" type="submit" value="Zum Spiel" class="menu">
            </form>
            <form method="post" action="index.php?page=edit">
                <input id="profile" type="submit" value="Profil" class="menu">
            </form>
            <form method="post" action="index.php?page=chat">
                <input id="chat" type="submit" value="Chat" class="menu">
            </form>
            <form method="post" action="index.php?page=logout">
                <input id="logout" type="submit" value="Logout" class="menu">
            </form>
        </header>
    <?php }?>
    <body>         
        <?php if (isset($_smarty_tpl->tpl_vars['tpl_name']->value)) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_name']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
        <?php }?>
    </body> 
    <footer> 
        <div>
            <a href ="index.php?page=imprint">Impressum </a>
            |
            <a href ="index.php?page=contact"> Kontakt</a> 
        </div>
    </footer>
</html><?php }} ?>
