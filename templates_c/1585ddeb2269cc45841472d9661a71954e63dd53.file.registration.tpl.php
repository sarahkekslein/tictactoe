<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 22:20:26
         compiled from ".\templates\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1159955afcdb67a8fe3-76435411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1585ddeb2269cc45841472d9661a71954e63dd53' => 
    array (
      0 => '.\\templates\\registration.tpl',
      1 => 1437654494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159955afcdb67a8fe3-76435411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55afcdb6832cc7_53503925',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55afcdb6832cc7_53503925')) {function content_55afcdb6832cc7_53503925($_smarty_tpl) {?><form method="post" action="index.php?page=registration_post">
    Name: <input type="text" name="name"/>
    </br>
    Email <input type="text" name="email"/>
    </br>
    Passwort: <input type="password" name="pw"/>
    </br>
    Wiederholen: <input type="password" name="pw2">
    </br>
    <input type="submit" value="Registrieren"><br/>
    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>        
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <?php }?>
</form><?php }} ?>
