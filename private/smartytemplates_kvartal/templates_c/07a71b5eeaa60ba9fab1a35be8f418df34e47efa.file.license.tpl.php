<?php /* Smarty version Smarty-3.0.7, created on 2013-05-11 16:00:40
         compiled from "/home/dnevnik/private/smartytemplates_kvartal/templates/license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312417706518e08b8e7cd09-53205462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07a71b5eeaa60ba9fab1a35be8f418df34e47efa' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_kvartal/templates/license.tpl',
      1 => 1366443318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312417706518e08b8e7cd09-53205462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.truncate.php';
?><div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Достижения</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

<?php if ($_smarty_tpl->getVariable('license_list')->value!==false){?>
<table>
<?php  $_smarty_tpl->tpl_vars['license'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('license_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['license']->key => $_smarty_tpl->tpl_vars['license']->value){
?>
    <tr>
        <td>
    <?php if ($_smarty_tpl->tpl_vars['license']->value['img_prew']){?><a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['license']->value['img'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['license']->value['img_prew'];?>
" alt="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['license']->value['description'],50);?>
" border="0" /></a><?php }else{ ?>&nbsp;<?php }?><br />
        <div><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['license']->value['description'],50);?>
</div>
        </td>
    </tr>
<?php }} ?>
</table>
<?php }?>