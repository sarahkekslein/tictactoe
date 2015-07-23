<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 13:52:22
         compiled from ".\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1863255af8d8e821273-09327458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa376ea60de4f2828ec68bd96423f5dfdbefc68' => 
    array (
      0 => '.\\templates\\edit.tpl',
      1 => 1437651482,
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
<?php if ($_valid && !is_callable('content_55af8d8e919736_00543992')) {function content_55af8d8e919736_00543992($_smarty_tpl) {?>
<form action="index.php?page=edit" method="POST">
    <h1>Dein Profil</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
</p>

    <p><input type="submit" value="Speichern" name="btn"/>
        <input type="submit" value="Passwort aendern" name="btn"/></p>
</form>
<?php }} ?>
