<?php /* Smarty version Smarty-3.0.7, created on 2011-03-28 20:48:08
         compiled from "H:/www/gkh/private/smartytemplates/templates/reu/messaging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266954d9091987a0e57-51727355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '572a0201117949f5ca72310fbf366866a54f1e4e' => 
    array (
      0 => 'H:/www/gkh/private/smartytemplates/templates/reu/messaging.tpl',
      1 => 1301320084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266954d9091987a0e57-51727355',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Рассылка универсальных сообщений</h1>

<?php if ($_smarty_tpl->getVariable('action')->value=="send_dept_message"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
" method="post">

<table>
    <tr>
        <td colspan="6"><b>Фильтр</b></td>
    </tr>
    <tr>
        <td>По улице: </td>
        <td><select name="filter[street]">
                <option value=""></option>
                <?php  $_smarty_tpl->tpl_vars['street'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('street_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['street']->key => $_smarty_tpl->tpl_vars['street']->value){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['street']->value['street'];?>
" <?php if ($_smarty_tpl->tpl_vars['street']->value['street']==$_smarty_tpl->getVariable('cur_street')->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['street']->value['street'];?>
</option>
                <?php }} ?>
            </select></td>
        <td>По дому: </td>
        <td><select name="filter[house]">
                <option value=""></option>
                <?php  $_smarty_tpl->tpl_vars['house'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('house_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['house']->key => $_smarty_tpl->tpl_vars['house']->value){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['house']->value['house'];?>
" <?php if ($_smarty_tpl->tpl_vars['house']->value['house']==$_smarty_tpl->getVariable('cur_house')->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['house']->value['house'];?>
</option>
                <?php }} ?>
            </select></td>
        <td>По квартире:</td>
        <td><select name="filter[apartment]">
                <option value=""></option>
                <?php  $_smarty_tpl->tpl_vars['apartment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('apartment_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['apartment']->key => $_smarty_tpl->tpl_vars['apartment']->value){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['apartment']->value['apartment'];?>
" <?php if ($_smarty_tpl->tpl_vars['apartment']->value['apartment']==$_smarty_tpl->getVariable('cur_apartment')->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['apartment']->value['apartment'];?>
</option>
                <?php }} ?>
            </select></td>
    </tr>
    <tr>
        <td colspan="6"><input id="save" name="save" type="submit" value="Выбрать" /></td>
    </tr>
</table>
</form>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
" method="post">
<table border="1">
    <tr>
        <td width="25" align="center">&nbsp;</td>
        <td>сектор</td>
        <td>улица</td>
        <td>дом</td>
        <td>квартира</td>
        <td>фио</td>
        <td>телефон</td>
        <td>лицевой счет</td>
        <td>сумма долга</td>
        <td>сумма пени</td>
        <td>сумма долга c пеней</td>
        <td>кол-во мес</td>
        <td>статус жилья</td>
        <td>общая площадь</td>
        <td>кол-во прожив</td>
        <td>кол-во лиц сч</td>
        <td>рэу</td>
        <td>льгота</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['debt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dept_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['debt']->key => $_smarty_tpl->tpl_vars['debt']->value){
?>
    <tr>
        <td><input id="check" type="checkbox" name="data[<?php echo $_smarty_tpl->tpl_vars['debt']->value['reu_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['sector'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['street'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['house'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['apartment'];?>
]" /></td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['sector'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['street'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['house'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['apartment'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['fio'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['phone_number'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['personal_account'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['amount_debt'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['amount_penalty'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['amount_debt_w_penalties'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['number_months'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['status_housing'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['total_area'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['number_persons'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['number_personal_accounts'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['reu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['allowance'];?>
</td>

    </tr>
<?php }} ?>
</table>

<input id="save" name="save" type="submit" value="Разослать" />
</form>

<?php }elseif($_smarty_tpl->getVariable('action')->value=="send_message"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
" method="post">

<table>
    <tr>
        <td colspan="6"><b>Фильтр</b></td>
    </tr>
    <tr>
        <td>По улице: </td>
        <td><select name="filter[street]">
                <option value=""></option>
                <?php  $_smarty_tpl->tpl_vars['street'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('street_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['street']->key => $_smarty_tpl->tpl_vars['street']->value){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['street']->value['street'];?>
" <?php if ($_smarty_tpl->tpl_vars['street']->value['street']==$_smarty_tpl->getVariable('cur_street')->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['street']->value['street'];?>
</option>
                <?php }} ?>
            </select></td>
        <td>По дому: </td>
        <td><select name="filter[house]">
                <option value=""></option>
                <?php  $_smarty_tpl->tpl_vars['house'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('house_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['house']->key => $_smarty_tpl->tpl_vars['house']->value){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['house']->value['house'];?>
" <?php if ($_smarty_tpl->tpl_vars['house']->value['house']==$_smarty_tpl->getVariable('cur_house')->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['house']->value['house'];?>
</option>
                <?php }} ?>
            </select></td>
        <td>По квартире:</td>
        <td><select name="filter[apartment]">
                <option value=""></option>
                <?php  $_smarty_tpl->tpl_vars['apartment'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('apartment_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['apartment']->key => $_smarty_tpl->tpl_vars['apartment']->value){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['apartment']->value['apartment'];?>
" <?php if ($_smarty_tpl->tpl_vars['apartment']->value['apartment']==$_smarty_tpl->getVariable('cur_apartment')->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['apartment']->value['apartment'];?>
</option>
                <?php }} ?>
            </select></td>
    </tr>
    <tr>
        <td colspan="6"><input id="save" name="save" type="submit" value="Выбрать" /></td>
    </tr>
</table>
</form>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
" method="post">

    <div>Сообщение</div>
    <textarea name="data[message]"></textarea>
    <br /><br />

<table border="1">
    <tr>
        <td width="25" align="center">&nbsp;</td>
        <td>сектор</td>
        <td>улица</td>
        <td>дом</td>
        <td>квартира</td>
        <td>фио</td>
        <td>телефон</td>
        <td>лицевой счет</td>
        <td>сумма долга</td>
        <td>сумма пени</td>
        <td>сумма долга c пеней</td>
        <td>кол-во мес</td>
        <td>статус жилья</td>
        <td>общая площадь</td>
        <td>кол-во прожив</td>
        <td>кол-во лиц сч</td>
        <td>рэу</td>
        <td>льгота</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['debt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dept_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['debt']->key => $_smarty_tpl->tpl_vars['debt']->value){
?>
    <tr>
        <td><input id="check" type="checkbox" name="data[debts][<?php echo $_smarty_tpl->tpl_vars['debt']->value['reu_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['sector'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['street'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['house'];?>
_<?php echo $_smarty_tpl->tpl_vars['debt']->value['apartment'];?>
]" /></td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['sector'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['street'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['house'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['apartment'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['fio'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['phone_number'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['personal_account'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['amount_debt'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['amount_penalty'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['amount_debt_w_penalties'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['number_months'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['status_housing'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['total_area'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['number_persons'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['number_personal_accounts'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['reu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['debt']->value['allowance'];?>
</td>

    </tr>
<?php }} ?>
</table>

<input id="save" name="save" type="submit" value="Разослать" />
</form>

<?php }else{ ?>
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=send_dept_message" >Разослать информацию о задолженности</a><br />

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=send_message" >Разослать сообщение</a><br />
<?php }?>