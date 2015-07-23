<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 11:47:17
         compiled from ".\templates\edit_pw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671455b0b8252872e6-22326513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0896f083c30782651da85883259178484bbd28' => 
    array (
      0 => '.\\templates\\edit_pw.tpl',
      1 => 1437644322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671455b0b8252872e6-22326513',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0b8253e6be5_75528882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0b8253e6be5_75528882')) {function content_55b0b8253e6be5_75528882($_smarty_tpl) {?><script src="./scripts/edit_pw.js"></script>
<h1>Passwort aendern</h1>
<form action="index.php?page=edit" method="POST">
        <p>Altes Passwort: <input type="password" name="old" id="old"></p>

        <p>Neues Passwort: <input type="password" name="new1" id="new1"></p>

        <p>Wiederholen: <input type="password" name="new2" id="new2"></p>

        <p><input type="submit" value="save_pw" name="btn" id="save_pw"/> </p>

        <div id="output"></div>
</form>
<?php }} ?>
