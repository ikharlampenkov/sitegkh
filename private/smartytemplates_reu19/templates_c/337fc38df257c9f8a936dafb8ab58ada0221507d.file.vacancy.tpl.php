<?php /* Smarty version Smarty-3.0.7, created on 2012-02-27 12:46:16
         compiled from "/home/dnevnik/private/smartytemplates_reu19/templates/admin/vacancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5102171234f4b18a88a9c15-06266668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '337fc38df257c9f8a936dafb8ab58ada0221507d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu19/templates/admin/vacancy.tpl',
      1 => 1327983643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5102171234f4b18a88a9c15-06266668',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Вакансии</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=="edit"){?>&id=<?php echo $_smarty_tpl->getVariable('vacancy')->value['id'];?>
<?php }?>" method="post" enctype="multipart/form-data">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pem">
            <td width="200">Должность</td>
            <td><input name="data[position]" value="<?php echo $_smarty_tpl->getVariable('vacancy')->value['position'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Требования</td>
            <td><textarea name="data[requirements]" /><?php echo $_smarty_tpl->getVariable('vacancy')->value['requirements'];?>
</textarea></td>
        </tr> 
        <tr class="pem">
            <td>Заработная плата</td>
            <td><input name="data[salary]" value="<?php echo $_smarty_tpl->getVariable('vacancy')->value['salary'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Текст</td>
            <td><textarea name="data[some_text]" /><?php echo $_smarty_tpl->getVariable('vacancy')->value['some_text'];?>
</textarea></td>
        </tr>
        <tr class="pem">
            <td>Куда присылать резюме</td>
            <td><input name="data[contact]" value="<?php echo $_smarty_tpl->getVariable('vacancy')->value['contact'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>К кому обращаться</td>
            <td><input name="data[who]" value="<?php echo $_smarty_tpl->getVariable('vacancy')->value['who'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Активная</td>
            <td><input name="data[is_active]" type="checkbox" <?php if (isset($_smarty_tpl->getVariable('vacancy',null,true,false)->value['is_active'])&&$_smarty_tpl->getVariable('vacancy')->value['is_active']){?>checked="checked"<?php }?> style="font-size: 14px; width: 25px;" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ ВАКАНСИЮ</a>
</td>
</table>
<?php if ($_smarty_tpl->getVariable('vacancy_list')->value!==false){?>
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
    <tr>
       <td class="pum">Должность</td>
       <td class="pum">Требования</td>
       <td class="pum">Заработная плата</td>
       <td class="pum">Активность</td>
       <td class="pum">&nbsp;</td>
       <td class="pum">&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['vacancy'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('vacancy_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['vacancy']->key => $_smarty_tpl->tpl_vars['vacancy']->value){
?>
    <tr>
	<td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['position'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['requirements'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['salary'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['vacancy']->value['is_active'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['vacancy']->value['id'];?>
">редактировать</a></td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['vacancy']->value['id'];?>
">удалить</a></td>
    </tr>
<?php }} ?>
</table>
<?php }?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ ВАКАНСИЮ</a>
</td>
</table>


<?php }?>