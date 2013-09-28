<?php /* Smarty version Smarty-3.0.7, created on 2011-10-19 14:41:19
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19666853194e9e7f1fd01677-61370444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c1feb97a4670f029491f46d47aba6db00d1b60' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/content_page.tpl',
      1 => 1319010073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19666853194e9e7f1fd01677-61370444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;"><?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>
</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>


<?php if (!empty($_smarty_tpl->getVariable('conpage',null,true,false)->value['description'])){?>
<div><?php echo $_smarty_tpl->getVariable('conpage')->value['description'];?>
</div><br/><br/>
<?php }?>

<div><?php echo $_smarty_tpl->getVariable('conpage')->value['content'];?>
</div>

<?php if (isset($_smarty_tpl->getVariable('conpage',null,true,false)->value['file_list'])&&$_smarty_tpl->getVariable('conpage')->value['file_list']!==false){?>
<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('conpage')->value['file_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
?>
<a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['file']->value['title'];?>
</a><br /><br />
<?php }} ?>
<?php }?>