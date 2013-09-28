<?php /* Smarty version Smarty-3.0.7, created on 2013-04-23 09:25:27
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14220273845175f1176b0610-01138583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96edd86625453ccaffa7ae72e84f452f30cca7c1' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/document.tpl',
      1 => 1322553558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14220273845175f1176b0610-01138583',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Документы</div>
<div class="page_title_und">&nbsp;</div>


<?php if ($_smarty_tpl->getVariable('document')->value!=false){?>
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
"><< Назад</a>
<h4><?php echo $_smarty_tpl->getVariable('document')->value['title'];?>
</h4>
<?php }?>

<table width="100%" cellpadding="5" cellspacing="2">
<?php  $_smarty_tpl->tpl_vars['document'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('document_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['document']->key => $_smarty_tpl->tpl_vars['document']->value){
?>

<?php if ($_smarty_tpl->tpl_vars['document']->value['is_folder']){?>
<tr><td class="pem"><div><img src="/img/folder.png" /> <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&root=<?php echo $_smarty_tpl->tpl_vars['document']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['document']->value['title'];?>
</a></div>
<?php }else{ ?>
<tr><td class="peem"><div><img src="/img/page_word.png" /> <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['document']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['document']->value['short_text'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['document']->value['title'];?>
</a></div>
<?php }?>
</td></tr>
<?php }} ?>
</table>