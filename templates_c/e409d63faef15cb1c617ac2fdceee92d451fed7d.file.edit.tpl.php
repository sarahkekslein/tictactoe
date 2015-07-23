<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 11:44:29
         compiled from ".\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2219755b0b77d64a5f5-10281433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e409d63faef15cb1c617ac2fdceee92d451fed7d' => 
    array (
      0 => '.\\templates\\edit.tpl',
      1 => 1437644322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2219755b0b77d64a5f5-10281433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0b77d81f1f3_12388442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0b77d81f1f3_12388442')) {function content_55b0b77d81f1f3_12388442($_smarty_tpl) {?>
<form action="index.php?page=edit" method="POST">
    <h1>Dein Profil</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
</p>

    <p><input type="submit" value="save" name="btn"/>
        <input type="submit" value="change" name="btn"/></p>
</form>
<?php }} ?>
