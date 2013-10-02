<?php /* Smarty version Smarty-3.0.7, created on 2011-05-16 12:42:59
         compiled from "/home/dnevnik/private/smartytemplates/templates/reu/auto-inf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7720404284dd0b963dd5be8-69791546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca181f3db0355477d5298b4b42a985e8b517585' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/reu/auto-inf.tpl',
      1 => 1305306767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7720404284dd0b963dd5be8-69791546',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><h1>Управление авто-информатором</h1>

<h4>Обновить БД</h4>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=update_db" enctype="multipart/form-data" method="post">
    <table>
        <tr>
            <td width="150">Выберите файл</td>
            <td><input type="file" name="data[file]" /></td>
        </tr>
        <tr>
            <td colspan="2"><input id="save" name="save" type="submit" value="Обновить БД" /></td>
        </tr>
    </table>
</form>

<hr width="100%" size="1" />

<h4>История обновлений</h4>

<?php if ($_smarty_tpl->getVariable('history_list')->value!=false){?>
<table border="1">
    <tr>
        <td>Дата</td>
        <td></td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['history'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('history_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['history']->key => $_smarty_tpl->tpl_vars['history']->value){
?>
    <tr>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['history']->value['date'],"%d.%m.%Y %H:%M");?>
</td>
        <td><a href="">загрузить</a></td>
    </tr>
<?php }} ?>
</table>

<?php }?>

<hr width="100%" size="1" />