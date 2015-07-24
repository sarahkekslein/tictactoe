<?php /* Smarty version Smarty-3.1.20, created on 2015-07-24 12:30:56
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:841955adf90a0ca898-52502729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f2f2cc9f62e3646c56af32f7b126d2f50d1a43' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1437733069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '841955adf90a0ca898-52502729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55adf90a107795_36805159',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55adf90a107795_36805159')) {function content_55adf90a107795_36805159($_smarty_tpl) {?><link rel="stylesheet" href="./styles/index.css">
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
