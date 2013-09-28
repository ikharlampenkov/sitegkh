<?php /* Smarty version Smarty-3.0.7, created on 2012-10-18 11:48:13
         compiled from "/home/dnevnik/private/smartytemplates_zles/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:572597469507f8a0d8ad110-94588015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1eac6e64d7ee165249ec5217b53f70cd1dbe0d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_zles/templates/content_page.tpl',
      1 => 1350535692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '572597469507f8a0d8ad110-94588015',
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