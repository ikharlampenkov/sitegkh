<?php /* Smarty version Smarty-3.0.7, created on 2011-10-12 08:43:26
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/cabinet/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3044770514e94f0be732460-93786075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed5bd499f228f5b0e6da0c07ec19e425efe4f06' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/cabinet/content_page.tpl',
      1 => 1317977895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3044770514e94f0be732460-93786075',
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