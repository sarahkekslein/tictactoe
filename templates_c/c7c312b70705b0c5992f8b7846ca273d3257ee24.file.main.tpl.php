<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 11:40:55
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2847855b0b6a74c3666-13570874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7c312b70705b0c5992f8b7846ca273d3257ee24' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1437644322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2847855b0b6a74c3666-13570874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'month' => 0,
    'year' => 0,
    'tpl_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0b6a7b0cde3_40905083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0b6a7b0cde3_40905083')) {function content_55b0b6a7b0cde3_40905083($_smarty_tpl) {?><!DOCTYPE html>
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
        <form method="post" action="index.php?page=edit">
            <input id="profile" type="submit" value="Profil">
        </form>        
        <div id="datum"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 20<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</div> 
    </header>
    <body>         
        <?php if (isset($_smarty_tpl->tpl_vars['tpl_name']->value)) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_name']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   
        <?php }?>
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
</html><?php }} ?>
