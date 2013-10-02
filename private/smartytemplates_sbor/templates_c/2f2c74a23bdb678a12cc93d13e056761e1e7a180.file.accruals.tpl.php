<?php /* Smarty version Smarty-3.0.7, created on 2013-04-22 22:34:27
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/ncab/accruals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:816188852517558836dea59-68920552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f2c74a23bdb678a12cc93d13e056761e1e7a180' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/ncab/accruals.tpl',
      1 => 1341325588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '816188852517558836dea59-68920552',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Общие сведения о лицевом счете</div>
<div class="page_title_und">&nbsp;</div>

<br/>

<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('accruals')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value){
?>

<b><?php echo $_smarty_tpl->tpl_vars['period']->value['period']['PERIODSTR'];?>
</b><br/><br/>

<table class="cab-table">
    <tr>
        <td class="cab-header">№</td>
        <td class="cab-header">Наименование услуги</td>
        <td class="cab-header">Количество</td>
        <td class="cab-header">Тариф</td>
        <td class="cab-header">Итого начислено</td>
        <td class="cab-header">Сумма субсидий</td>
        <td class="cab-header">Перерасчет</td>
        <td class="cab-header">Итого к оплате</td>
        <td class="cab-header">Поставщик</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['usluga'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['period']->value['usluga']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_usluga']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['usluga']->key => $_smarty_tpl->tpl_vars['usluga']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_usluga']['iteration']++;
?>
    <tr>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_usluga']['iteration'];?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->tpl_vars['usluga']->value['NAIMUSL'];?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->KOL;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->TARIF;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->ITOGO_NACHISL;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->SUBSIDII;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->PERERASCHET;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->K_OPLATE;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->POSTAVCHIK;?>
</td>
    </tr>
<?php }} ?>
    <tr>
        <td class="cab-header">Итого</td>
        <td class="cab-value" colspan="8"><?php echo $_smarty_tpl->tpl_vars['period']->value['period']['SUM'];?>
</td>
    </tr>
</table>
<br/>
<?php }} ?>