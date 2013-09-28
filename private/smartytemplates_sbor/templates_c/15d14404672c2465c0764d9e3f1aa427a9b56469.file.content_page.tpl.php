<?php /* Smarty version Smarty-3.0.7, created on 2013-04-22 21:11:01
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325435038517544f53deb38-65162683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15d14404672c2465c0764d9e3f1aa427a9b56469' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/content_page.tpl',
      1 => 1322553558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325435038517544f53deb38-65162683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="page_title"><?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>
</div>
<div class="page_title_und">&nbsp;</div>


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