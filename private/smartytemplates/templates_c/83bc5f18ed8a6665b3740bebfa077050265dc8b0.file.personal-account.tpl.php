<?php /* Smarty version Smarty-3.0.7, created on 2011-05-16 12:40:16
         compiled from "/home/dnevnik/private/smartytemplates/templates/reu/personal-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11384372544dd0b8c084d692-45565502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83bc5f18ed8a6665b3740bebfa077050265dc8b0' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/reu/personal-account.tpl',
      1 => 1305306769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11384372544dd0b8c084d692-45565502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Управление лицевыми счетами</h1>

<?php if ($_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2>Редактировать лицевой счет </h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('paccount')->value['id'];?>
" method="post">
    <table>
        <tr>
            <td width="200">Лицевой счет</td>
            <td><?php echo $_smarty_tpl->getVariable('paccount')->value['id'];?>
</td>
        </tr>
        <tr>
            <td>ФИО</td>
            <td><?php echo $_smarty_tpl->getVariable('paccount')->value['fio'];?>
</td>
        </tr>
        <tr>
            <td>Адрес</td>
            <td><?php echo $_smarty_tpl->getVariable('paccount')->value['street'];?>
, <?php echo $_smarty_tpl->getVariable('paccount')->value['house'];?>
-<?php echo $_smarty_tpl->getVariable('paccount')->value['apartment'];?>
</td>
        </tr>
        <tr>
            <td>Телефон</td>
            <td><textarea name="data[phone_number]"><?php echo $_smarty_tpl->getVariable('paccount')->value['phone_number'];?>
</textarea></td>
        </tr>
        <tr>
            <td>Телефон (автоинформатор)</td>
            <td><textarea name="data[ai_phone_number]"><?php echo $_smarty_tpl->getVariable('paccount')->value['ai_phone_number'];?>
</textarea></td>
        </tr>
        <tr>
            <td>Мобильный телефон</td>
            <td><textarea name="data[mobile_phone_number]"><?php echo $_smarty_tpl->getVariable('paccount')->value['mobile_phone_number'];?>
</textarea></td>
        </tr>
        <tr>
            <td>Мобильный телефон (автоинформатор)</td>
            <td><textarea name="data[ai_mobile_phone_number]"><?php echo $_smarty_tpl->getVariable('paccount')->value['ai_mobile_phone_number'];?>
</textarea></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>

<table border="1">
    <tr>
        <td>лицевой счет</td>
        <td>сектор</td>
        <td>улица</td>
        <td>дом</td>
        <td>квартира</td>
        <td>фио</td>
        <td>телефон</td>
        <td></td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['paccount'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('personal_account_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['paccount']->key => $_smarty_tpl->tpl_vars['paccount']->value){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['paccount']->value['personal_account'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['paccount']->value['sector'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['paccount']->value['street'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['paccount']->value['house'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['paccount']->value['apartment'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['paccount']->value['fio'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['paccount']->value['phone_number'];?>
</td>
        <td><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['paccount']->value['id'];?>
">редактировать</a></td>

    </tr>
<?php }} ?>
</table>
<?php }?>