<?php /* Smarty version Smarty-3.0.7, created on 2013-04-22 22:34:18
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/ncab/pmeters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9448685975175587a85d168-00218072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73f05d4bbe80b90928fdaab017c718c7361f9a2' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/ncab/pmeters.tpl',
      1 => 1343806304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9448685975175587a85d168-00218072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_replace')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.replace.php';
?><div class="page_title">Информацию о приборах учета</div>
<div class="page_title_und">&nbsp;</div>

<div style="padding:  10px 0 10px 0; text-align: justify;">Уважаемые жильцы, передавайте показания счетчиков не позднее, чем за три рабочих дня до конца месяца!</div>

<?php if ($_smarty_tpl->getVariable('meters')->value){?>
<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
" method="post">
    <table class="cab-table">
        <tr>
            <td class="cab-header">Наименование счетчика</td>
            <td class="cab-header">Характеристика счетчика</td>
            <td class="cab-header">Номер счетчика</td>
            <td class="cab-header">Предыдущее показание</td>
            <td class="cab-header">Текущее показание</td>
            <td class="cab-header">Разница</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['jilci'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('meters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['jilci']->key => $_smarty_tpl->tpl_vars['jilci']->value){
?>
            <tr>
                <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->NAIM;?>
</td>
                <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->TYPE;?>
</td>
                <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->NOMER;?>
</td>
                <td class="cab-value">
                    <div id="meter_prev_<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('jilci')->value->ID,'.','_');?>
"><?php ob_start();?><?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('pa_meters')->value[$_tmp1]['prev_value']['value'];?>
</div>
                </td>
                <td class="cab-value">
                    <input type="text" name="data[<?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
][value]" id="meter_value_<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('jilci')->value->ID,'.','_');?>
" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('pa_meters')->value[$_tmp2]['cur_value']['value'];?>
" style="width: 60px;" onkeyup="calcMeterDiff('<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('jilci')->value->ID,'.','_');?>
')"/>
                    <input type="hidden" name="data[<?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
][date]" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('pa_meters')->value[$_tmp3]['prev_value']['date'];?>
"/>
                </td>
                <td class="cab-value">
                    <div id="meter_diff_<?php echo smarty_modifier_replace($_smarty_tpl->getVariable('jilci')->value->ID,'.','_');?>
"><?php ob_start();?><?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('pa_meters')->value[$_tmp4]['cur_value']['value']!=0){?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('jilci')->value->ID;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('pa_meters')->value[$_tmp5]['cur_value']['value']-$_smarty_tpl->getVariable('pa_meters')->value[$_tmp6]['prev_value']['value'];?>
<?php }else{ ?>0<?php }?></div>
                </td>
            </tr>
        <?php }} ?>
    </table>

    <br/>

    <div align="center">
        <input id="save" name="save" type="submit" value="Сохранить" style="font-size: 14px;"/>
    </div>
</form>
<?php }?>