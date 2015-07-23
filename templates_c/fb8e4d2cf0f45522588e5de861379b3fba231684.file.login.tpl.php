<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 11:42:57
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74855b0b721d4ebe6-32111345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8e4d2cf0f45522588e5de861379b3fba231684' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1437644322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74855b0b721d4ebe6-32111345',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0b721eae4f9_42211938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0b721eae4f9_42211938')) {function content_55b0b721eae4f9_42211938($_smarty_tpl) {?><form method="post" action="index.php?page=login_post">
    Benutzername: <input type="text" name="name"/>
    </br>
    Passwort: <input type="password" name="pw"/>
    </br>
    <input type="submit" value="Anmelden"><br/>
</form><?php }} ?>
