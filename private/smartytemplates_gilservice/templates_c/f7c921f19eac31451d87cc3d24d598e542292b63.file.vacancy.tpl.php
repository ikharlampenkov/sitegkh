<?php /* Smarty version Smarty-3.0.7, created on 2012-02-14 11:25:37
         compiled from "/home/dnevnik/private/smartytemplates_gilservice/templates/vacancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9069806394f39e241cedac2-64970609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c921f19eac31451d87cc3d24d598e542292b63' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_gilservice/templates/vacancy.tpl',
      1 => 1328859204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9069806394f39e241cedac2-64970609',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Вакансии</h1>

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

<?php }?>