<?php /* Smarty version Smarty-3.0.7, created on 2012-04-11 23:58:52
         compiled from "/home/dnevnik/private/smartytemplates_reu21/templates/license.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7988215194f85aa3c16e325-07625427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae0429e8b4256c1af40035b1ce967b184082ade' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu21/templates/license.tpl',
      1 => 1334065360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7988215194f85aa3c16e325-07625427',
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