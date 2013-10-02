<?php /* Smarty version Smarty-3.0.7, created on 2011-06-01 13:11:31
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/cabinet/balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13635156694de5d813d5a932-99116722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38833dbf82fe3e463c84f387e0074a89f7c9950' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/cabinet/balance.tpl',
      1 => 1306908688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13635156694de5d813d5a932-99116722',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?>
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Баланс платежей</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
<?php if ($_smarty_tpl->getVariable('balance')->value!==false){?>

<table cellpadding="10">
    <tr>
        <td class="pom" align="center"><b>Месяц</td>
        <td class="pom" align="center"><b>Баланс на начало месяца</td>
        <td class="pom" align="center"><b>Начислено</td>
        <td class="pom" align="center"><b>Оплачено</td>
        <td class="pom" align="center"><b>Баланс на конец месяца</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('balance')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
?>
    <tr>
        <td class="pem" align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['month']->value['date'],"%m.%Y");?>
</td>
        <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['month']->value['total_beginning_month'];?>
</td>
        <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['month']->value['debt'];?>
</td>
        <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['month']->value['payment'];?>
</td>
        <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['month']->value['total_end_month'];?>
</td>
    </tr>
    <?php }} ?>
</table>
<br>
<div align="center" style="font-weight:bold; font-size: 16px">Итого <?php if ($_smarty_tpl->getVariable('month')->value['total_end_month']>0){?>(долг)<?php }else{ ?>(переплата)<?php }?>: <?php echo $_smarty_tpl->getVariable('month')->value['total_end_month'];?>
</div>

<?php }?>