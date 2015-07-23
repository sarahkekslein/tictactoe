<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 14:52:02
         compiled from ".\templates\ranking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68955b0e331c824d0-29136760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b6f3e5f77744e04999bcd93586e2e181affcc5' => 
    array (
      0 => '.\\templates\\ranking.tpl',
      1 => 1437655918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68955b0e331c824d0-29136760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0e331d08ad7_62442557',
  'variables' => 
  array (
    'ranking' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0e331d08ad7_62442557')) {function content_55b0e331d08ad7_62442557($_smarty_tpl) {?><h1>Rangliste</h1>
<table>
    <tr>
        <th>Rang</th>
        <th>Name</th>
        <th>Punkte</th>
        <th>Spiele</th>
        <th>Gewonnen</th>
        <th>Unentschieden</th>
        <th>Verloren</th>
    </tr>
    <?php echo $_smarty_tpl->tpl_vars['ranking']->value;?>
</table><?php }} ?>
