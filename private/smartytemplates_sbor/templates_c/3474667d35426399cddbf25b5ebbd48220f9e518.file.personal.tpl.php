<?php /* Smarty version Smarty-3.0.7, created on 2013-06-03 16:55:57
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/admin/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4017443551ac682d965f44-10639182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3474667d35426399cddbf25b5ebbd48220f9e518' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/admin/personal.tpl',
      1 => 1322553564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4017443551ac682d965f44-10639182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Персонал</div>
<div class="page_title_und">&nbsp;</div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=="edit"){?>&id=<?php echo $_smarty_tpl->getVariable('personal')->value['id'];?>
<?php }?>" method="post" enctype="multipart/form-data">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pem">
            <td width="200">ФИО</td>
            <td><input name="data[fio]" value="<?php echo $_smarty_tpl->getVariable('personal')->value['fio'];?>
" /></td>
        </tr> 
        <tr class="pem">
            <td>Фото</td>
            <td><?php if (!empty($_smarty_tpl->getVariable('personal',null,true,false)->value['foto'])){?><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->getVariable('personal')->value['foto'];?>
" /><br />
                &nbsp;<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del_file&id=<?php echo $_smarty_tpl->getVariable('personal')->value['id'];?>
&field=foto">удалить</a><br /><?php }?>
                <input type="file"  name="data[foto]" /></td>
        </tr>
        <tr class="pem">
            <td>Руководитель</td>
            <td><input name="data[is_leaders]" type="checkbox" <?php if (isset($_smarty_tpl->getVariable('personal',null,true,false)->value['leaders'])&&$_smarty_tpl->getVariable('personal')->value['leaders']){?>checked="checked"<?php }?> style="font-size: 14px; width: 25px;" /></td>
        </tr>
        <tr class="pem">
            <td>Отдел</td>
            <td><input name="data[department]" value="<?php echo $_smarty_tpl->getVariable('personal')->value['department'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Должность</td>
            <td><input name="data[position]" value="<?php echo $_smarty_tpl->getVariable('personal')->value['position'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>E-mail</td>
            <td><input name="data[email]" value="<?php echo $_smarty_tpl->getVariable('personal')->value['email'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Текст</td>
            <td><textarea name="data[sometext]" /><?php echo $_smarty_tpl->getVariable('personal')->value['sometext'];?>
</textarea></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ РАБОТНИКА</a>
</td>
</table>
<?php if ($_smarty_tpl->getVariable('personal_list')->value!==false){?>
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
    <tr>
       <td class="pum">Фото</td>
       <td class="pum">ФИО</td>
       <td class="pum">Отдел</td>
       <td class="pum">Должность</td>
       <td>&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['personal'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('personal_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['personal']->key => $_smarty_tpl->tpl_vars['personal']->value){
?>
    <tr>
        <td class="pem"><?php if ($_smarty_tpl->tpl_vars['personal']->value['img_prew']){?><img src="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['personal']->value['img_prew'];?>
" /><?php }else{ ?>&nbsp;<?php }?></td>
	<td class="pem"><?php echo $_smarty_tpl->tpl_vars['personal']->value['fio'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['personal']->value['department'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['personal']->value['position'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['personal']->value['id'];?>
">редактировать</a><br />
            <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['personal']->value['id'];?>
">удалить</a></td>
    </tr>
<?php }} ?>
</table>
<?php }?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ РАБОТНИКА</a>
</td>
</table>



<?php }?>