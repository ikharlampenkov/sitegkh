<?php /* Smarty version Smarty-3.0.7, created on 2011-12-06 16:05:25
         compiled from "/home/dnevnik/private/smartytemplates_gilishnik/templates/admin/phones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17391131424edddad51cfa83-71187602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad0d5c55eeb08cedc8af11d41fdcb384fedeab4b' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_gilishnik/templates/admin/phones.tpl',
      1 => 1322804192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17391131424edddad51cfa83-71187602',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Персонал</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=="edit"){?>&id=<?php echo $_smarty_tpl->getVariable('phones')->value['id'];?>
<?php }?>" method="post" enctype="multipart/form-data">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pem">
            <td width="200">Название</td>
            <td><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('phones')->value['title'];?>
" /></td>
        </tr> 
        <tr class="pem">
            <td>Код</td>
            <td><input name="data[phone_code]" value="<?php echo $_smarty_tpl->getVariable('phones')->value['phone_code'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Телефон</td>
            <td><input name="data[phone]" value="<?php echo $_smarty_tpl->getVariable('phones')->value['phone'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Комментарий</td>
            <td><input name="data[comment]" value="<?php echo $_smarty_tpl->getVariable('phones')->value['comment'];?>
" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ ТЕЛЕФОН</a>
</td>
</table>
<?php if ($_smarty_tpl->getVariable('phones_list')->value!==false){?>
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
    <tr>
       <td class="pum">Название</td>
       <td class="pum">Код</td>
       <td class="pum">Телефон</td>
       <td class="pum">Комментарий</td>
       <td>&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['phones'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('phones_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['phones']->key => $_smarty_tpl->tpl_vars['phones']->value){
?>
    <tr>
	<td class="pem"><?php echo $_smarty_tpl->tpl_vars['phones']->value['title'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['phones']->value['phone_code'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['phones']->value['phone'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['phones']->value['comment'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['phones']->value['id'];?>
">редактировать</a><br />
            <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['phones']->value['id'];?>
">удалить</a></td>
    </tr>
<?php }} ?>
</table>
<?php }?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ ТЕЛЕФОН</a>
</td>
</table>



<?php }?>