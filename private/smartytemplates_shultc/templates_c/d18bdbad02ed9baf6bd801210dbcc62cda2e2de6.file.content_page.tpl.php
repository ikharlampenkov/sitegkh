<?php /* Smarty version Smarty-3.0.7, created on 2012-02-10 15:06:36
         compiled from "/home/dnevnik/private/smartytemplates_ourhouse/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18157698164f34d00ca681c8-90381497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18bdbad02ed9baf6bd801210dbcc62cda2e2de6' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_ourhouse/templates/content_page.tpl',
      1 => 1328859591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18157698164f34d00ca681c8-90381497',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #3399ff; padding-bottom: 10px;"><?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>
</div>
<div style="font-size: 5px; border-top: 1px dashed #3399ff; margin-top: 1px; ">&nbsp;</div>


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