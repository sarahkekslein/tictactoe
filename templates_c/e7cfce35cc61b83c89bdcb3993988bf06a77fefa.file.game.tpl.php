<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 11:41:30
         compiled from ".\templates\game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2645255b0b6ca45dd74-11875299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7cfce35cc61b83c89bdcb3993988bf06a77fefa' => 
    array (
      0 => '.\\templates\\game.tpl',
      1 => 1437644322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2645255b0b6ca45dd74-11875299',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0b6ca5f41d5_72707723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0b6ca5f41d5_72707723')) {function content_55b0b6ca5f41d5_72707723($_smarty_tpl) {?><script src="./scripts/gamelogic.js"></script>
<link rel="stylesheet" href="./styles/game.css" />
<div id="current_player"></div>
<table>
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

<button id="new_game">Neues Spiel</button>
<?php }} ?>
