<?php /* Smarty version Smarty-3.0.7, created on 2011-10-12 08:40:22
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/cabinet/receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3533442434e94f006671393-87253502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e43e501e2732770de4fbf8f3fb93e60690dc527' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/cabinet/receipt.tpl',
      1 => 1317977902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3533442434e94f006671393-87253502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Счет-фактура</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
<div><span>Лицевой счет №:</span>&nbsp;<span><?php echo $_smarty_tpl->getVariable('account_info')->value['id'];?>
</span></div>
<div><span>Адрес:</span>&nbsp;<span><?php echo $_smarty_tpl->getVariable('house')->value['street'];?>
 д.<?php echo $_smarty_tpl->getVariable('house')->value['number'];?>
<?php echo $_smarty_tpl->getVariable('house')->value['subnumber'];?>
 кв.<?php echo $_smarty_tpl->getVariable('account_info')->value['apartment'];?>
</span></div>
<br>
<table cellpadding="10">
    <tr>
        <td class="pom" align="center"><b>Наименование операции</td>
        <td class="pom" align="center"><b>Дата</td>
        <td class="pom" align="center"><b>Оплата</td>
    </tr>

    <?php  $_smarty_tpl->tpl_vars['meter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('meters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['meter']->key => $_smarty_tpl->tpl_vars['meter']->value){
?>
    <tr>
        <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['meter']->value['title'];?>
</td>
        <td class="pem" align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('date')->value,"%m/%Y");?>
</td>
        <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['meter']->value['diff'];?>
<?php echo $_smarty_tpl->tpl_vars['meter']->value['unit'];?>
=<?php echo $_smarty_tpl->tpl_vars['meter']->value['sum'];?>
</td>
    </tr>
    <?php }} ?>
    
    <tr>
        <td class="pem" align="center"><?php echo $_smarty_tpl->getVariable('gku')->value['title'];?>
</td>
        <td class="pem" align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('date')->value,"%m/%Y");?>
</td>
        <td class="pem" align="center"><?php echo $_smarty_tpl->getVariable('gku')->value['sum'];?>
</td>
    </tr>
    
    <tr>
        <td class="pom" align="center">Итого</td>
        <td class="pom" align="center">&nbsp;</td>
        <td class="pom" align="center"><?php echo $_smarty_tpl->getVariable('itogo')->value;?>
</td>
    </tr>
    
</table>
<br>
<div align="center" style="font-size: 20px;">
<?php if ($_smarty_tpl->getVariable('action')->value!='print'){?>
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=print" target="_blank">Распечатать</a>
<?php }?>
</div><br>