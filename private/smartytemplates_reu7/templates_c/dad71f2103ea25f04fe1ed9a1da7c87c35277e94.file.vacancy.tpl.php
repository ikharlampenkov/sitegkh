<?php /* Smarty version Smarty-3.0.7, created on 2011-10-08 20:28:56
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/vacancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13762225564e905018b103c5-54736712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad71f2103ea25f04fe1ed9a1da7c87c35277e94' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/vacancy.tpl',
      1 => 1317977912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13762225564e905018b103c5-54736712',
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