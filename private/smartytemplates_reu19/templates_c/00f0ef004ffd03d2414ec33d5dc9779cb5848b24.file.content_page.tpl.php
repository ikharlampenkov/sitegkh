<?php /* Smarty version Smarty-3.0.7, created on 2012-02-02 15:29:44
         compiled from "/home/dnevnik/private/smartytemplates_reu19/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19819952594f2a4978ce66f5-79158272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f0ef004ffd03d2414ec33d5dc9779cb5848b24' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu19/templates/content_page.tpl',
      1 => 1327983656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19819952594f2a4978ce66f5-79158272',
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