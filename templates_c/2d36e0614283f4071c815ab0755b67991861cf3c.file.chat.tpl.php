<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 15:00:38
         compiled from ".\templates\chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634255b0e576e80f45-59113481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d36e0614283f4071c815ab0755b67991861cf3c' => 
    array (
      0 => '.\\templates\\chat.tpl',
      1 => 1437651484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2634255b0e576e80f45-59113481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0e576ea4398_93214949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0e576ea4398_93214949')) {function content_55b0e576ea4398_93214949($_smarty_tpl) {?><h1>Los chatte!</h1>
<form method="post" action="indexx.php?page=">
    Chatpartner: <input type="text" name="user2"/>
</form>
<textarea readonly="readonly">
    Verlauf
</textarea><?php }} ?>
