<?php /* Smarty version Smarty-3.0.7, created on 2013-03-30 00:02:26
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11218552085155d732e229a9-16039832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c84bb4eaebb22bb958552b9d69f18512d32b297a' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/personal.tpl',
      1 => 1309108099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11218552085155d732e229a9-16039832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1><?php echo $_smarty_tpl->getVariable('personal_title')->value;?>
</h1>

<?php if ($_smarty_tpl->getVariable('personal_list')->value!==false){?>
<table>
    <tr>
       <td>Фото</td>
       <td>ФИО</td>
       <td>Отдел</td>
       <td>Должность</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['personal'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('personal_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['personal']->key => $_smarty_tpl->tpl_vars['personal']->value){
?>
    <tr>
        <td><?php if ($_smarty_tpl->tpl_vars['personal']->value['img_prew']){?><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['personal']->value['img_prew'];?>
" /><?php }else{ ?>&nbsp;<?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['personal']->value['fio'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['personal']->value['department'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['personal']->value['position'];?>
</td>
    </tr>
<?php }} ?>
</table>
<?php }?>