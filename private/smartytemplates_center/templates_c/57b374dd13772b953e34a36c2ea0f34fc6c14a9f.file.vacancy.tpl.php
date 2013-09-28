<?php /* Smarty version Smarty-3.0.7, created on 2012-06-11 12:57:11
         compiled from "/home/dnevnik/private/smartytemplates_center/templates/vacancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11750995674fd57aa75a2446-18092729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57b374dd13772b953e34a36c2ea0f34fc6c14a9f' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_center/templates/vacancy.tpl',
      1 => 1339390629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11750995674fd57aa75a2446-18092729',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1 class="text_heading">Вакансии</h1>

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