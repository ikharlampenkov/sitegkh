<?php /* Smarty version Smarty-3.0.7, created on 2012-11-12 19:07:09
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/ncab/accruals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54609326350a0f47ded0a25-77842390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69e735234c804cf8bc27f9dfc9150fbeb5c3246' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/ncab/accruals.tpl',
      1 => 1352725626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54609326350a0f47ded0a25-77842390',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.replace.php';
?><div class="page_title">Начисления</div>
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
        <td class="cab-header" rowspan="2">Вид услуг</td>
        <td class="cab-header" rowspan="2">Ед. изм.</td>
        <td class="cab-header" colspan="2">Объем услуг</td>
        <td class="cab-header" rowspan="2">Тариф руб / ед.изм.</td>
        <td class="cab-header" colspan="2">Размер платы за ком.услуги, руб.</td>
        <td class="cab-header" rowspan="2">Всего начислено за расчетный период, руб.</td>
        <td class="cab-header" rowspan="2">Перерасчеты всего, руб.</td>
        <td class="cab-header" rowspan="2">Льготы, субсидии, руб.</td>
        <td class="cab-header" rowspan="2">Итого начислено за расчетный период, руб</td>
    </tr>
    <tr>
        <td class="cab-header">инд. потребление</td>
        <td class="cab-header">общедом. нужды</td>
        <td class="cab-header">инд. потребление</td>
        <td class="cab-header">общедом. нужды</td>
    </tr>
    <?php $_smarty_tpl->tpl_vars["ind_sum"] = new Smarty_variable(0, null, null);?>
    <?php $_smarty_tpl->tpl_vars["odn_sum"] = new Smarty_variable(0, null, null);?>
    <?php $_smarty_tpl->tpl_vars["itogo_sum"] = new Smarty_variable(0, null, null);?>
<?php  $_smarty_tpl->tpl_vars['usluga'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['period']->value['usluga']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_usluga']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['usluga']->key => $_smarty_tpl->tpl_vars['usluga']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_usluga']['index']++;
?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['_usluga']['index']==0){?>
<tr>
    <td class="cab-value" style="text-align: left; font-weight: bold; padding: 5px;" colspan="11">Содержание и ремонт жилого помещения</td>
</tr>
<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['_usluga']['index']==1){?>
    <tr>
        <td class="cab-value" style="text-align: left; font-weight: bold; padding: 5px;" colspan="11">Коммунальные услуги</td>
    </tr>
    <?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['_usluga']['index']==6){?>
        <tr>
            <td class="cab-value" style="text-align: left; font-weight: bold; padding: 5px;" colspan="11">Прочие услуги</td>
        </tr>
<?php }?>
    <tr>
        <td class="cab-value"><?php echo $_smarty_tpl->tpl_vars['usluga']->value['NAIMUSL'];?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->tpl_vars['usluga']->value['ED_IZM'];?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->KOL;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->KOL_ODN;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->TARIF;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->SUM_TARIF;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->SUM_ODN;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->ITOGO_NACHISL;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->PERERASCHET;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->SUBSIDII;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('usluga')->value->K_OPLATE;?>
</td>
        <?php $_smarty_tpl->tpl_vars["ind_sum"] = new Smarty_variable($_smarty_tpl->getVariable('ind_sum')->value+smarty_modifier_replace($_smarty_tpl->getVariable('usluga')->value->SUM_TARIF,',','.'), null, null);?>
        <?php $_smarty_tpl->tpl_vars["odn_sum"] = new Smarty_variable($_smarty_tpl->getVariable('odn_sum')->value+smarty_modifier_replace($_smarty_tpl->getVariable('usluga')->value->SUM_ODN,',','.'), null, null);?>
    </tr>
<?php }} ?>
    <tr>
        <?php $_smarty_tpl->tpl_vars["itogo_sum"] = new Smarty_variable($_smarty_tpl->getVariable('ind_sum')->value+$_smarty_tpl->getVariable('odn_sum')->value, null, null);?>
        <td class="cab-header" colspan="5" style="font-weight: bold;">Итого к оплате за расчетный период</td>
        <td class="cab-value" style="font-weight: bold;"><?php echo smarty_modifier_replace($_smarty_tpl->getVariable('ind_sum')->value,'.',',');?>
</td>
        <td class="cab-value" style="font-weight: bold;"><?php echo smarty_modifier_replace($_smarty_tpl->getVariable('odn_sum')->value,'.',',');?>
</td>
        <td class="cab-value" style="font-weight: bold;"><?php echo smarty_modifier_replace($_smarty_tpl->getVariable('itogo_sum')->value,'.',',');?>
</td>
        <td class="cab-value"></td>
        <td class="cab-value"></td>
        <td class="cab-value" style="font-weight: bold; color: #ff0000;"><?php echo $_smarty_tpl->tpl_vars['period']->value['period']['SUM'];?>
</td>
    </tr>
</table>
<br/>
<?php }} ?>