<?php /* Smarty version Smarty-3.1.20, created on 2015-07-22 13:01:52
         compiled from "templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2326455adf9afcb7838-56446303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5cab98200155968e18c0ce38c84ba5470a61eb8' => 
    array (
      0 => 'templates\\main.tpl',
      1 => 1437562227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2326455adf9afcb7838-56446303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55adf9afd31632_15265421',
  'variables' => 
  array (
    'month' => 0,
    'year' => 0,
    'tpl_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55adf9afd31632_15265421')) {function content_55adf9afd31632_15265421($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Browserspiel</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>  
        <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <div id="datum"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
 20<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</div>  
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
