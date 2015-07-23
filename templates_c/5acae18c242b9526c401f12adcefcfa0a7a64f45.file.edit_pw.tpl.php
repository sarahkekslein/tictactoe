<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 13:52:23
         compiled from ".\templates\edit_pw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:604155afa08f5665f0-69231802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acae18c242b9526c401f12adcefcfa0a7a64f45' => 
    array (
      0 => '.\\templates\\edit_pw.tpl',
      1 => 1437651482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '604155afa08f5665f0-69231802',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55afa08f5904b6_36214865',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55afa08f5904b6_36214865')) {function content_55afa08f5904b6_36214865($_smarty_tpl) {?><script src="./scripts/edit_pw.js"></script>
<h1>Passwort aendern</h1>
<form action="index.php?page=edit" method="POST">
        <p>Altes Passwort: <input type="password" name="old" id="old"></p>

        <p>Neues Passwort: <input type="password" name="new1" id="new1"></p>

        <p>Wiederholen: <input type="password" name="new2" id="new2"></p>

        <p><input type="submit" value="Passwort speichern" name="btn" id="save_pw"/> </p>

        <div id="output"></div>
</form>
<?php }} ?>
