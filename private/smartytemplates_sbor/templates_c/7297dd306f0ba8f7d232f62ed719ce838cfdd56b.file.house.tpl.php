<?php /* Smarty version Smarty-3.0.7, created on 2013-07-19 10:52:33
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/admin/house.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75736395851e8b80141e145-64322048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7297dd306f0ba8f7d232f62ed719ce838cfdd56b' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/admin/house.tpl',
      1 => 1322553562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75736395851e8b80141e145-64322048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Ваш дом</div>
<div class="page_title_und">&nbsp;</div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
" method="post">
    <table>
        <tr>
            <td width="200">Улица</td>
            <td><input name="data[street]" value="" /></td>
        </tr>
        <tr>
            <td width="200">Номер</td>
            <td><input name="data[number]" value="" style="width: 50px;" /> / <input name="data[subnumber]" value="" style="width: 25px;" /></td>
        </tr>
        <tr>
            <td width="200">Общая площадь</td>
            <td><input name="data[area]" value="" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }elseif($_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('house')->value['id'];?>
" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="200">Улица</td>
            <td><input name="data[street]" value="<?php echo $_smarty_tpl->getVariable('house')->value['street'];?>
" /></td>
        </tr>
        <tr>
            <td >Номер</td>
            <td><input name="data[number]" value="<?php echo $_smarty_tpl->getVariable('house')->value['number'];?>
" style="width: 50px;" /> / <input name="data[subnumber]" value="<?php echo $_smarty_tpl->getVariable('house')->value['subnumber'];?>
" style="width: 25px;" /></td>
        </tr>
        <tr>
            <td >Общая площадь</td>
            <td><input name="data[area]" value="<?php echo $_smarty_tpl->getVariable('house')->value['area'];?>
" /></td>
        </tr>
        <tr>
            <td>План работ по содержанию и ремонту</td>
            <td><?php if (!empty($_smarty_tpl->getVariable('house',null,true,false)->value['file_repair_plan'])){?><a href=<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->getVariable('house')->value['file_repair_plan'];?>
>План работ по содержанию и ремонту</a>
                &nbsp;<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del_file&id=<?php echo $_smarty_tpl->getVariable('house')->value['id'];?>
&field=file_repair_plan">удалить</a><br /><?php }?>
                <input type="file"  name="data[file_repair_plan]" /></td>
        </tr>
        <tr>
            <td>Доходы и расходы</td>
            <td><?php if (!empty($_smarty_tpl->getVariable('house',null,true,false)->value['file_costs_income'])){?><a href=<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->getVariable('house')->value['file_costs_income'];?>
>Доходы и расходы</a>
                &nbsp;<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del_file&id=<?php echo $_smarty_tpl->getVariable('house')->value['id'];?>
&field=file_costs_income">удалить</a><br /><?php }?>
                <input type="file"  name="data[file_costs_income]" /></td>
        </tr>
        <tr>
            <td>Выполненные работы</td>
            <td><?php if (!empty($_smarty_tpl->getVariable('house',null,true,false)->value['file_performed_repair'])){?><a href=<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->getVariable('house')->value['file_performed_repair'];?>
>Выполненные работы</a>
                &nbsp;<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del_file&id=<?php echo $_smarty_tpl->getVariable('house')->value['id'];?>
&field=file_performed_repair">удалить</a><br /><?php }?>
                <input type="file"  name="data[file_performed_repair]" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('house_list')->value!==false){?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ ДОМ</a> / <a href="#" style="color:#aaaaaa">ИМПОРТИРОВАТЬ ДАННЫЕ ИЗ CVS-ФАЙЛА</a>
</td>
</table>
<table cellpadding="5" border="0" style="font-size:14px;">
    <tr>
       <td class="pum">Улица</td>
       <td class="pum">Номер</td>
       <td class="pum">Общая площадь</td>
       <td>&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['house'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('house_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['house']->key => $_smarty_tpl->tpl_vars['house']->value){
?>
    <tr>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['house']->value['street'];?>
</td>
	<td class="pem"><?php echo $_smarty_tpl->tpl_vars['house']->value['number'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['house']->value['subnumber'])){?><?php echo $_smarty_tpl->tpl_vars['house']->value['subnumber'];?>
<?php }?></td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['house']->value['area'];?>
</td>    
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['house']->value['id'];?>
">редактировать</a></td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['house']->value['id'];?>
">удалить</a></td>
    </tr>
<?php }} ?>
</table>
<?php }?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ ДОМ</a> / <a href="#" style="color:#aaaaaa">ИМПОРТИРОВАТЬ ДАННЫЕ ИЗ CVS-ФАЙЛА</a>
</td>
</table>
<br>

<?php }?>