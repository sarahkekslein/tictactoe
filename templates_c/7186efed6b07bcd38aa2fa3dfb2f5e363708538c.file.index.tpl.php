<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 15:53:45
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974655af7533d143f8-74423336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7186efed6b07bcd38aa2fa3dfb2f5e363708538c' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1437658441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974655af7533d143f8-74423336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55af7533d165f6_26936940',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55af7533d165f6_26936940')) {function content_55af7533d165f6_26936940($_smarty_tpl) {?><link rel="stylesheet" href="./styles/index.css">
<div class="center">
    <h1 class="red">
        Tic
    </h1>
    <h1>
        Tac
    </h1>
    <h1 class="blue">
        Toe
    </h1>
    <div id="button">
        <form id="register" method="post" action="index.php?page=registration">
            <input type="submit" value="Registrieren" class="button">
        </form>
        <form id="login" method="post" action="index.php?page=login">
            <input type="submit" value="Anmelden" class="button">
        </form>
        <form id="ranking" method="post" action="index.php?page=ranking">
            <input type="submit" value="Ranking" class="button">
        </form>    
    </div>
</div>
<?php }} ?>
