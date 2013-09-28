<?php /* Smarty version Smarty-3.0.7, created on 2013-04-22 22:34:39
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/ncab/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4635477125175588f1cc326-34360160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1fbb9c93431354b8aa1186bae081cf0bae9ea41' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/ncab/about.tpl',
      1 => 1341325588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4635477125175588f1cc326-34360160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Общие сведения о лицевом счете</div>
<div class="page_title_und">&nbsp;</div>

<br/>

<table class="cab-table">
    <tr>
        <td class="cab-header">Л/С</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['KOD'];?>
</td>
    </tr>
    <tr>
        <td class="cab-header">ФИО собственника</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['SOBSTV'];?>
</td>
    </tr>
    <tr>
        <td class="cab-header">Адрес</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['ADRES'];?>
</td>
    </tr>
    <tr>
        <td class="cab-header">Общая площадь</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['OB_PL'];?>
</td>
    </tr>
    <tr>
        <td class="cab-header">Число постоянно зарегистрированных</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['KOL_POST_ZAREG'];?>
</td>
    </tr>
    <tr>
        <td class="cab-header">Число временно зарегистрированных</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['KOL_VREM_ZAREG'];?>
</td>
    </tr>
    <tr>
        <td class="cab-header">Общая задолженность</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['DOLG'];?>
</td>
    </tr>
    <tr>
        <td class="cab-header">Пеня</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('about_ls')->value['PENYA'];?>
</td>
    </tr>
</table>

<br/>

<?php if ($_smarty_tpl->getVariable('about_jilci')->value){?>
<table class="cab-table">
    <tr>
        <td class="cab-header">№</td>
        <td class="cab-header">ФИО</td>
        <td class="cab-header">Дата рождения</td>
        <td class="cab-header">Тип регистрации</td>
        <td class="cab-header">Дата регистрации</td>
        <td class="cab-header">Проживает</td>
        <td class="cab-header">Дата окончания временной регистрации</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['jilci'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('about_jilci')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_jilci']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['jilci']->key => $_smarty_tpl->tpl_vars['jilci']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_jilci']['iteration']++;
?>
    <tr>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_jilci']['iteration'];?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->FIO;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->DATA_ROJD;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->TYPE_REGISTR;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->DATA_REGISTR;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->PROJIVAET;?>
</td>
        <td class="cab-value"><?php echo $_smarty_tpl->getVariable('jilci')->value->DATA_OKONCH_REGISTR;?>
</td>
    </tr>
<?php }} ?>
</table>
<?php }?>