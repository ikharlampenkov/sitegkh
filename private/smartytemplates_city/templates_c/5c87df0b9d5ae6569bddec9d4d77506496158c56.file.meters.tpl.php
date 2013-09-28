<?php /* Smarty version Smarty-3.0.7, created on 2012-09-26 14:51:51
         compiled from "/home/dnevnik/private/smartytemplates_city/templates/admin/meters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15254964525062b417d9eba0-21537866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c87df0b9d5ae6569bddec9d4d77506496158c56' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_city/templates/admin/meters.tpl',
      1 => 1323227519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15254964525062b417d9eba0-21537866',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Счетчики</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ('edit'){?>&id=<?php echo $_smarty_tpl->getVariable('meter')->value['id'];?>
<?php }?>" method="post">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pom">
            <td width="200">Название</td>
            <td><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('meter')->value['title'];?>
" /></td>
        </tr>
        <tr class="pom">
            <td width="200">Тариф</td>
            <td><input name="data[rate]" value="<?php echo $_smarty_tpl->getVariable('meter')->value['rate'];?>
" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('meters_list')->value!==false){?>
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
    <tr class="pum">
       <td>Название</td>
       <td>Тариф</td>
       <td>&nbsp;</td><td>&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['meter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('meters_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['meter']->key => $_smarty_tpl->tpl_vars['meter']->value){
?>
    <tr>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['meter']->value['title'];?>
</td>
	<td class="pem"><?php echo $_smarty_tpl->tpl_vars['meter']->value['rate'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['meter']->value['id'];?>
">редактировать</a></td>
        <td class="pom">    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['meter']->value['id'];?>
">удалить</a></td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<br />
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">Добавить счетчик</a>

<?php }?>