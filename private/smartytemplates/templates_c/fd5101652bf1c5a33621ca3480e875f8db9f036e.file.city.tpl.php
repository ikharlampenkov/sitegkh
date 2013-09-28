<?php /* Smarty version Smarty-3.0.7, created on 2011-04-14 15:47:35
         compiled from "/home/dnevnik/private/smartytemplates/templates/admin/city.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17471005534da6b4a7aea595-03156308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd5101652bf1c5a33621ca3480e875f8db9f036e' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/admin/city.tpl',
      1 => 1302715446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17471005534da6b4a7aea595-03156308',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Города</h1>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ('edit'){?>&id=<?php echo $_smarty_tpl->getVariable('city')->value['id'];?>
<?php }?>" method="post">
    <table>
        <tr>
            <td width="200">Название</td>
            <td><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('city')->value['title'];?>
" /></td>
        </tr>
        <tr>
            <td>Телефонный код города</td>
            <td><input name="data[phone_code]" value="<?php echo $_smarty_tpl->getVariable('city')->value['phone_code'];?>
" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('city_list')->value!==false){?>
<table>
<?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('city_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['city']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['city']->value['phone_code'];?>
</td>
        <td><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
">редактировать</a><br /><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
">удалить</a> </td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">добавить</a>

<?php }?>