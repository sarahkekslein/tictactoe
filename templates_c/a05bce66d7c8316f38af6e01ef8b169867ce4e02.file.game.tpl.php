<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 15:00:27
         compiled from ".\templates\game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:595955b0bef5f18499-11162858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05bce66d7c8316f38af6e01ef8b169867ce4e02' => 
    array (
      0 => '.\\templates\\game.tpl',
      1 => 1437656302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '595955b0bef5f18499-11162858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0bef5f37f60_29784630',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0bef5f37f60_29784630')) {function content_55b0bef5f37f60_29784630($_smarty_tpl) {?><script src="./scripts/gamelogic.js"></script>
<link rel="stylesheet" href="./styles/game.css" />
<div id="current_player"></div>
<br/>
<table class="center">
    <tr>
        <td><button id="btn11" class="button"></button></td>
        <td><button id="btn12" class="button"></button></td>
        <td><button id="btn13" class="button"></button></td>
    </tr>
    <tr>
        <td><button id="btn21" class="button"></button></td>
        <td><button id="btn22" class="button"></button></td>
        <td><button id="btn23" class="button"></button></td>
    </tr>
    <tr>
        <td><button id="btn31" class="button"></button></td>
        <td><button id="btn32" class="button"></button></td>
        <td><button id="btn33" class="button"></button></td>
    </tr>
</table>
<br/>
<button id="new_game" class="new_game_button">Neues Spiel</button><?php }} ?>
