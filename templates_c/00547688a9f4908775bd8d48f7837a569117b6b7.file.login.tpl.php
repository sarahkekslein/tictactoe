<?php /* Smarty version Smarty-3.1.20, created on 2015-07-22 19:06:58
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299055afcdb26a7777-50468648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00547688a9f4908775bd8d48f7837a569117b6b7' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1437573387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299055afcdb26a7777-50468648',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55afcdb26cca62_87737562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55afcdb26cca62_87737562')) {function content_55afcdb26cca62_87737562($_smarty_tpl) {?><form method="post" action="login_post.php">
    Benutzername: <input type="text" name="name"/>
    </br>
    Passwort: <input type="password" name="pw"/>
    </br>
    <input type="submit" value="Anmelden"><br/>
</form><?php }} ?>
