<?php /* Smarty version Smarty-3.0.7, created on 2013-02-12 11:15:18
         compiled from "/home/dnevnik/private/smartytemplates_reu9/templates/admin/personal_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20007190455119cfe6607086-33909810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3a53643fa6bc15168a81271d2659d5472520de' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu9/templates/admin/personal_account.tpl',
      1 => 1332237726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20007190455119cfe6607086-33909810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Лицевые счета</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ('edit'){?>&id=<?php echo $_smarty_tpl->getVariable('pa')->value['id'];?>
<?php }?>" method="post">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pem">
            <td width="200">ФИО</td>
            <td><input name="data[fio]" value="<?php echo $_smarty_tpl->getVariable('pa')->value['fio'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Дом</td>
            <td><select name="data[house_id]">
                <?php  $_smarty_tpl->tpl_vars['house'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('house_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['house']->key => $_smarty_tpl->tpl_vars['house']->value){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['house']->value['id'];?>
" <?php if (isset($_smarty_tpl->getVariable('pa',null,true,false)->value['house_id'])&&$_smarty_tpl->getVariable('pa')->value['house_id']==$_smarty_tpl->tpl_vars['house']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['house']->value['street'];?>
, <?php echo $_smarty_tpl->tpl_vars['house']->value['number'];?>
<?php echo $_smarty_tpl->tpl_vars['house']->value['subnumber'];?>
</option>
                <?php }} ?>
                </select>
            </td>
        </tr>
        <tr class="pem">
            <td>Квартира</td>
            <td><input name="data[apartment]" value="<?php echo $_smarty_tpl->getVariable('pa')->value['apartment'];?>
" /></td>
        </tr>
        <tr class="pem">
            <td>Пароль</td>
            <td><input name="data[password]" value="<?php echo $_smarty_tpl->getVariable('pa')->value['password'];?>
" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }elseif($_smarty_tpl->getVariable('action')->value=="meters"){?>

<h2>Счетчики для л/с <?php echo $_smarty_tpl->getVariable('pa')->value['id'];?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('pa')->value['id'];?>
" method="post">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">   
<?php  $_smarty_tpl->tpl_vars['meter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('meters_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['meter']->key => $_smarty_tpl->tpl_vars['meter']->value){
?>
        <tr class="pem">
            <td><?php echo $_smarty_tpl->tpl_vars['meter']->value['title'];?>
</td>
            <td><input type="checkbox" name=data[meters][<?php echo $_smarty_tpl->tpl_vars['meter']->value['id'];?>
] <?php if (in_array($_smarty_tpl->tpl_vars['meter']->value['id'],$_smarty_tpl->getVariable('pa_meters')->value)){?>checked="checked"<?php }?> /></td>
        </tr>
<?php }} ?>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>
<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('pa_list')->value!==false){?>
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
    <tr>
        <td class="pum">Счет</td>
        <td class="pum">ФИО</td>
        <td class="pum">Адрес</td>
        <td class="pum">&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['pa'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pa_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pa']->key => $_smarty_tpl->tpl_vars['pa']->value){
?>
    <tr>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['pa']->value['fio'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['pa']->value['fio'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=meters&id=<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
">счетчики</a><br />
            <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
">редактировать</a><br />
            <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
">удалить</a></td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<br />
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">Добавить лицевой счет</a>

<?php }?>