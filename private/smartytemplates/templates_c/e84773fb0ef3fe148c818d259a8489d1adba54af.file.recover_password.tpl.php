<?php /* Smarty version Smarty-3.0.7, created on 2011-06-18 22:17:57
         compiled from "/home/dnevnik/private/smartytemplates/templates/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17040545394dfcc1a510bee3-71425804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84773fb0ef3fe148c818d259a8489d1adba54af' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/recover_password.tpl',
      1 => 1305306772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17040545394dfcc1a510bee3-71425804',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Восстановление пароля</h1>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
" method="post">
    <table width="100%">
        <tr>
            <td width="200">Логин</td>
            <td><input name="data[login]" /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input name="data[email]" /> </td>
        </tr>
        <tr>
            <td><input type="submit" name="action" value="Восстановить" /> </td>
            <td>&nbsp;</td>
        </tr>
    </table>
</form>