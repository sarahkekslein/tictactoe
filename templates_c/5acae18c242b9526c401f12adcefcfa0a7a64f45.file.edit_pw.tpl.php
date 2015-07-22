<?php /* Smarty version Smarty-3.1.20, created on 2015-07-22 15:54:23
         compiled from ".\templates\edit_pw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:604155afa08f5665f0-69231802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5acae18c242b9526c401f12adcefcfa0a7a64f45' => 
    array (
      0 => '.\\templates\\edit_pw.tpl',
      1 => 1437572882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '604155afa08f5665f0-69231802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55afa08f5904b6_36214865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55afa08f5904b6_36214865')) {function content_55afa08f5904b6_36214865($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form action="edit.php" method="POST">
    <h1>Passwort aendern</h1>

    <form action="login_post.php" method="POST">
        <p>Altes Passwort: <input type="password" name="old"></p>

        <p>Neues Passwort: <input type="password" name="new1"></p>

        <p>Wiederholen: <input type="password" name="new2"></p>

        <p><input type="submit" value="save_pw" name="btn"/> </p>
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
