<?php /* Smarty version Smarty-3.1.20, created on 2015-07-24 09:34:42
         compiled from ".\templates\edit_pw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:604155afa08f5665f0-69231802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acae18c242b9526c401f12adcefcfa0a7a64f45' => 
    array (
      0 => '.\\templates\\edit_pw.tpl',
      1 => 1437723277,
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
<link rel="stylesheet" href="./styles/edit.css" />
<div class="center">
    <h1>Passwort ändern</h1>
    <form action="index.php?page=edit" method="POST">
        <table>
            <tr>
                <td>Altes Passwort:</td>
                <td><input type="password" name="old" id="old"></td>
            </tr>
            <tr>
                <td>Neues Passwort:</td>
                <td><input type="password" name="new1" id="new1"></td>
            </tr>
            <tr>
                <td>Wiederholen:</td>
                <td><input type="password" name="new2" id="new2"></td>
            </tr>
            <tr>
            <td><input type="submit" value="Passwort speichern" name="btn" id="save_pw"/></td>
            </tr>
        </table>
        <div id="output"></div>
    </form>
</div><?php }} ?>
