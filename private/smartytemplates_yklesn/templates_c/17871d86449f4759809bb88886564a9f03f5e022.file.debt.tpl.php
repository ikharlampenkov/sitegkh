<?php /* Smarty version Smarty-3.0.7, created on 2012-11-12 19:07:59
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/ncab/debt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52419155150a0f4afadb099-84754694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17871d86449f4759809bb88886564a9f03f5e022' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/ncab/debt.tpl',
      1 => 1343799743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52419155150a0f4afadb099-84754694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Информация о задолженности</div>
<div class="page_title_und">&nbsp;</div>

<div style="padding: 10px 0 10px 0; text-align: justify;">Если в графе "Сумма задолженности" указан минус, то это переплата.</div>

<table class="cab-table">
    <tr>
        <td class="cab-header">Период</td>
        <td class="cab-header">Сумма задолженности</td>
        <td class="cab-header">Сумма пени</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['jilci'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('debt')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['jilci']->key => $_smarty_tpl->tpl_vars['jilci']->value){
?>
    <tr>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->PERIOD;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->DOLG;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->PENYA;?>
</td>
    </tr>
<?php }} ?>
</table>