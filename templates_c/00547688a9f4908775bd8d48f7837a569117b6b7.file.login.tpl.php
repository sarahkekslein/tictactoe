<?php /* Smarty version Smarty-3.1.20, created on 2015-07-24 11:13:30
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299055afcdb26a7777-50468648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00547688a9f4908775bd8d48f7837a569117b6b7' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1437727257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299055afcdb26a7777-50468648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55afcdb26cca62_87737562',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55afcdb26cca62_87737562')) {function content_55afcdb26cca62_87737562($_smarty_tpl) {?><link rel="stylesheet" href="./styles/index.css" />
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
        Login
    </h1>
    <form method="post" action="index.php?page=login_post">
        <table>
            <tr>
                <td>Benutzername:</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Passwort:</td>
                <td><input type="password" name="pw"/></td>
            </tr>
        </table>
        <br />
        <input type="submit" value="Anmelden" class="button"><br/>
    </form>
    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <?php }?>
    <br />
    <form method="post" action="index.php?page=registration">
        <input type="submit" value="=> Registrieren" class="button"><br/>
    </form>
</div><?php }} ?>
