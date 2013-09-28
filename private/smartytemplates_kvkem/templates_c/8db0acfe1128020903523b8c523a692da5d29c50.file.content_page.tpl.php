<?php /* Smarty version Smarty-3.0.7, created on 2012-11-14 13:10:08
         compiled from "/home/dnevnik/private/smartytemplates_kvkem/templates/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88740894950a343d0065703-37936559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8db0acfe1128020903523b8c523a692da5d29c50' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_kvkem/templates/content_page.tpl',
      1 => 1349882378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88740894950a343d0065703-37936559',
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