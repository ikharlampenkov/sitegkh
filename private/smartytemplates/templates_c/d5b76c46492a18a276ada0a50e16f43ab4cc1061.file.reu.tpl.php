<?php /* Smarty version Smarty-3.0.7, created on 2011-03-27 23:18:50
         compiled from "H:/www/gkh/private/smartytemplates/templates/admin/reu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114394d8f636abf0b44-40752995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b76c46492a18a276ada0a50e16f43ab4cc1061' => 
    array (
      0 => 'H:/www/gkh/private/smartytemplates/templates/admin/reu.tpl',
      1 => 1301242528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114394d8f636abf0b44-40752995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>РЭУ</h1>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ('edit'){?>&id=<?php echo $_smarty_tpl->getVariable('reu')->value['id'];?>
<?php }?>" method="post">
    <table>
        <tr>
            <td width="200">Название</td>
            <td><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('reu')->value['title'];?>
" /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input name="data[email]" value="<?php echo $_smarty_tpl->getVariable('reu')->value['email'];?>
" /></td>
        </tr>
        <tr>
            <td>Логин</td>
            <td><input name="data[login]" value="<?php echo $_smarty_tpl->getVariable('reu')->value['login'];?>
" /></td>
        </tr>
        <tr>
            <td>Пароль</td>
            <td><input name="data[password]" value="<?php echo $_smarty_tpl->getVariable('reu')->value['password'];?>
" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('reu_list')->value!==false){?>
<table>
<?php  $_smarty_tpl->tpl_vars['reu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('reu_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['reu']->key => $_smarty_tpl->tpl_vars['reu']->value){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['reu']->value['title'];?>
</td>
        <td><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['reu']->value['id'];?>
">редактировать</a><br /><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['reu']->value['id'];?>
">удалить</a> </td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">добавить</a>

<?php }?>