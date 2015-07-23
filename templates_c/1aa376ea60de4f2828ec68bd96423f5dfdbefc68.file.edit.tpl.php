<?php /* Smarty version Smarty-3.1.20, created on 2015-07-22 15:48:11
         compiled from ".\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1863255af8d8e821273-09327458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa376ea60de4f2828ec68bd96423f5dfdbefc68' => 
    array (
      0 => '.\\templates\\edit.tpl',
      1 => 1437572754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1863255af8d8e821273-09327458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55af8d8e919736_00543992',
  'variables' => 
  array (
    'table' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55af8d8e919736_00543992')) {function content_55af8d8e919736_00543992($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="edit.php" method="POST">
    <h1>Dein Profil</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
</p>

    <p><input type="submit" value="save" name="btn"/>
        <input type="submit" value="change" name="btn"/></p>
</form>
<p></p>
</body>
<footer>
    <ul>
        <li>
            <a href="index.php?page=imprint">Impressum </a>
        </li>
        <li>
            <a href="index.php?page=contact"> Kontakt</a>
        </li>

    </ul>
</footer>
</html><?php }} ?>
