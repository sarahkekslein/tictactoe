<?php /* Smarty version Smarty-3.1.20, created on 2015-07-24 10:09:42
         compiled from ".\templates\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1159955afcdb67a8fe3-76435411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1585ddeb2269cc45841472d9661a71954e63dd53' => 
    array (
      0 => '.\\templates\\registration.tpl',
      1 => 1437725315,
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
<?php if ($_valid && !is_callable('content_55afcdb6832cc7_53503925')) {function content_55afcdb6832cc7_53503925($_smarty_tpl) {?><link rel="stylesheet" href="./styles/index.css" />
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
    <h1>
        Registrierung
    </h1>
    <form method="post" action="index.php?page=registration_post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>Passwort:</td>
                <td><input type="password" name="pw" /></td>
            </tr>
            <tr>
                <td>Wiederholen:</td>
                <td><input type="password" name="pw2" /></td>
            </tr>
        </table>
        <br />
        <input type="submit" value="jetzt registrieren" class="button"><br/>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>        
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <?php }?>
    </form>
    <br />
    <form method="post" action="index.php?page=login">
        <input type="submit" value="=> Anmelden" class="button"><br/>
    </form>
</div><?php }} ?>
