<?php /* Smarty version Smarty-3.0.7, created on 2012-11-13 13:00:59
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/vacancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8758772750a1f02b250246-79893653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e086d7ea504886ef6d84993d613573cb22e6c1da' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/vacancy.tpl',
      1 => 1320591079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8758772750a1f02b250246-79893653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="page_title">Вакансии</div>
<div class="page_title_und">&nbsp;</div>

<?php if ($_smarty_tpl->getVariable('vacancy_list')->value!==false){?>

<table cellpadding="10">
    <tr>
       <td class="pom"><b>Должность<b></td>
       <td class="pom"><b>Требования<b></td>
       <td class="pom"><b>Заработная плата<b></td>
       <td class="pom"><b>Куда присылать резюме<b></td>
       <td class="pom"><b>К кому обращаться<b></td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['vacancy'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('vacancy_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['vacancy']->key => $_smarty_tpl->tpl_vars['vacancy']->value){
?>
    <tr>
	<td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['position'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['requirements'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['salary'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['contact'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['who'];?>
</td>
    </tr>
<?php }} ?>
</table>

<?php }else{ ?>
    
    <div style="font-size: 14pt; font-weight: bold;">Вакансий нет</div>

<?php }?>