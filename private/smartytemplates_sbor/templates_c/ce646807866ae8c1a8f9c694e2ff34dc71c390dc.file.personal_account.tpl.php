<?php /* Smarty version Smarty-3.0.7, created on 2013-09-12 16:57:57
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/admin/personal_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1347163679523190258250a9-45472904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce646807866ae8c1a8f9c694e2ff34dc71c390dc' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/admin/personal_account.tpl',
      1 => 1341326100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347163679523190258250a9-45472904',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Лицевые счета</div>
<div class="page_title_und">&nbsp;</div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ($_smarty_tpl->getVariable('action')->value=="edit"){?>&id=<?php echo $_smarty_tpl->getVariable('pa')->value['id'];?>
<?php }?>" method="post">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pem">
            <td width="200">Лицевой счет</td>
            <td><input name="data[ls]" value="<?php echo $_smarty_tpl->getVariable('pa')->value['ls'];?>
"/></td>
        </tr>
        <tr class="pem">
            <td width="200">ФИО</td>
            <td><input name="data[fio]" value="<?php echo $_smarty_tpl->getVariable('pa')->value['fio'];?>
"/></td>
        </tr>
        <tr class="pem">
            <td>Пароль</td>
            <td><input name="data[password]" value="<?php echo $_smarty_tpl->getVariable('pa')->value['password'];?>
"/></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить"/>
</form>

    <?php }elseif($_smarty_tpl->getVariable('action')->value=="meters"){?>

<h2>Счетчики для л/с <?php echo $_smarty_tpl->getVariable('pa')->value['ls'];?>
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
]
                           <?php if (in_array($_smarty_tpl->tpl_vars['meter']->value['id'],$_smarty_tpl->getVariable('pa_meters')->value)){?>checked="checked"<?php }?> /></td>
            </tr>
        <?php }} ?>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить"/>
</form>
    <?php }elseif($_smarty_tpl->getVariable('action')->value=="cur_meters"){?>

<h2>Показания для л/с <?php echo $_smarty_tpl->getVariable('pa')->value['ls'];?>
</h2>
    <?php if ($_smarty_tpl->getVariable('cur_meters')->value!==false){?>

    <table cellpadding="10">
        <tr>
            <td width="200" class="pom" align="center">Счетчик</td>
            <td class="pom" align="center">Показания (предыдущее/текущее значение)</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['meter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cur_meters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['meter']->key => $_smarty_tpl->tpl_vars['meter']->value){
?>
            <tr>
                <td width="200" class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['meter']->value['title'];?>
</td>
                <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['meter']->value['prev_value']['value'];?>
/&nbsp;<?php echo $_smarty_tpl->tpl_vars['meter']->value['cur_value']['value'];?>
</td>
            </tr>
        <?php }} ?>
    </table>

        <?php }else{ ?>
    У Вас нет счетчиков
    <?php }?>

    <?php }else{ ?>

<br/>
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">Добавить лицевой счет</a>

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=refresh">Перечитать файл с данными</a>

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=unload_meters">Выгрузить показания счетчиков</a>
<br/><br/>

    <?php if ($_smarty_tpl->getVariable('pa_list')->value!==false){?>
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px" class="cab-table">
        <tr>
            <td class="cab-header">Счет</td>
            <td class="cab-header">ФИО</td>
            <td class="cab-header">Пароль</td>
            <td class="cab-header">&nbsp;</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['pa'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pa_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pa']->key => $_smarty_tpl->tpl_vars['pa']->value){
?>
            <tr>
                <td class="cab-value"><?php echo $_smarty_tpl->tpl_vars['pa']->value['ls'];?>
</td>
                <td class="cab-value"><?php echo $_smarty_tpl->tpl_vars['pa']->value['fio'];?>
</td>
                <td class="cab-value"><?php echo $_smarty_tpl->tpl_vars['pa']->value['password'];?>
</td>
                <td class="cab-value">
                    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=cur_meters&id=<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
">текущие показания</a><br/>
                    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=meters&id=<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
">счетчики</a><br/>
                    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
">редактировать</a><br/>
                    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
">удалить</a></td>
            </tr>
        <?php }} ?>
    </table>
    <?php }?>

<br/>
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">Добавить лицевой счет</a>

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=refresh">Перечитать файл с данными</a>
<br/><br/>

<?php }?>