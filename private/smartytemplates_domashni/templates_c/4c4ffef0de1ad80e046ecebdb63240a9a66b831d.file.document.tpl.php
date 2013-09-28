<?php /* Smarty version Smarty-3.0.7, created on 2013-05-16 11:20:28
         compiled from "/home/dnevnik/private/smartytemplates_domashni/templates/document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116038319451945e8c3c85f6-65323595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c4ffef0de1ad80e046ecebdb63240a9a66b831d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_domashni/templates/document.tpl',
      1 => 1368421945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116038319451945e8c3c85f6-65323595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Документы</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

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