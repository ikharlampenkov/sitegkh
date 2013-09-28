<?php /* Smarty version Smarty-3.0.7, created on 2013-05-22 19:28:42
         compiled from "/home/dnevnik/private/smartytemplates_plus/templates/vacancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:767987240519cb9facf7426-60952063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0944f7f4cc0a67acb4d6dc016a5e1959e0e0a5a1' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_plus/templates/vacancy.tpl',
      1 => 1369150464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '767987240519cb9facf7426-60952063',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2>Вакансии</h2>

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