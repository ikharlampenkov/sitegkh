<?php /* Smarty version Smarty-3.0.7, created on 2012-06-09 00:42:20
         compiled from "/home/dnevnik/private/smartytemplates_center/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20652520304fd22b6c9374e9-66459431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7361860e5254a82a571eca6536b82ea7e3d50403' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_center/templates/content_page.tpl',
      1 => 1339173737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20652520304fd22b6c9374e9-66459431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1 class="text_heading">
<?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>

</h1>

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
</a><br/><br/>
    <?php }} ?>
<?php }?>