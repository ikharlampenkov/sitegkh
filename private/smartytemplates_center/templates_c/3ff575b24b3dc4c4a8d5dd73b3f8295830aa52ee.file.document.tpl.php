<?php /* Smarty version Smarty-3.0.7, created on 2012-06-09 00:45:57
         compiled from "/home/dnevnik/private/smartytemplates_center/templates/document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15703240164fd22c4575dbc6-08356935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ff575b24b3dc4c4a8d5dd73b3f8295830aa52ee' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_center/templates/document.tpl',
      1 => 1339173952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15703240164fd22c4575dbc6-08356935',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1 class="text_heading">
    Документы
</h1>

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
        <tr>
            <td class="pem">
                <div><img src="/img/folder.png"/> <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&root=<?php echo $_smarty_tpl->tpl_vars['document']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['document']->value['title'];?>
</a></div>
            </td>
        </tr>
        <?php }else{ ?>
        <tr>
            <td class="peem">
                <div><img src="/img/page_word.png"/> <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['document']->value['file'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['document']->value['short_text'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['document']->value['title'];?>
</a></div>
            </td>
        </tr>
    <?php }?>

<?php }} ?>
</table>