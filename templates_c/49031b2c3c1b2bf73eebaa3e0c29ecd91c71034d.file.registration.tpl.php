<?php /* Smarty version Smarty-3.1.20, created on 2015-07-23 11:41:00
         compiled from ".\templates\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170355b0b6acc7d317-92459627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49031b2c3c1b2bf73eebaa3e0c29ecd91c71034d' => 
    array (
      0 => '.\\templates\\registration.tpl',
      1 => 1437644322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170355b0b6acc7d317-92459627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55b0b6ad092763_60495303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0b6ad092763_60495303')) {function content_55b0b6ad092763_60495303($_smarty_tpl) {?><form method="post" action="registration_post.php">
    Name: <input type="text" name="name"/>
    </br>
    Email <input type="text" name="email"/>
    </br>
    Passwort: <input type="password" name="pw"/>
    </br>
    <input type="submit" value="Registrieren"><br/>
    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>        
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <?php }?>
</form><?php }} ?>
