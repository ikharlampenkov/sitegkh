<?php /* Smarty version Smarty-3.0.7, created on 2013-08-04 22:03:34
         compiled from "/home/dnevnik/private/smartytemplates_reu1/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18552580751fe6d46de68d7-31834733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83f39e28d2dc702dc1668ac9be5a3c3a871c12e2' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu1/templates/content_page.tpl',
      1 => 1375628408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18552580751fe6d46de68d7-31834733',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2><?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>
</h2>

<?php if (!empty($_smarty_tpl->getVariable('conpage',null,true,false)->value['description'])){?>
<div><?php echo $_smarty_tpl->getVariable('conpage')->value['description'];?>
</div><br/><br/>
<?php }?>

<div><?php echo $_smarty_tpl->getVariable('conpage')->value['content'];?>
</div>

<?php if (isset($_smarty_tpl->getVariable('conpage',null,true,false)->value['file_list'])&&$_smarty_tpl->getVariable('conpage')->value['file_list']!==false){?>
<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('conpage')->value['file_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']++;
?>
<a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" target="_blank">Файл <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_file']['iteration'];?>
</a><br /><br /> 
<?php }} ?>
<?php }?>