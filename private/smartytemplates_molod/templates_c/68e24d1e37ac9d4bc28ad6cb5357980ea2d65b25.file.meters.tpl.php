<?php /* Smarty version Smarty-3.0.7, created on 2011-06-30 23:53:22
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/cabinet/meters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1483005864e0caa02b50158-64223806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e24d1e37ac9d4bc28ad6cb5357980ea2d65b25' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/cabinet/meters.tpl',
      1 => 1309108088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1483005864e0caa02b50158-64223806',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Показания счетчиков</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
<?php if ($_smarty_tpl->getVariable('meters')->value!==false){?>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
" method="post">
    <table cellpadding="10">
        <tr>
            <td width="200" class="pom" align="center">Счетчик</td>
            <td class="pom" align="center">Показания (предыдущее/текущее значение)</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['meter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('meters')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['meter']->key => $_smarty_tpl->tpl_vars['meter']->value){
?>
        <tr>
            <td width="200" class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['meter']->value['title'];?>
</td>
            <td class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['meter']->value['prev_value']['value'];?>
/&nbsp; <input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['meter']->value['id'];?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['meter']->value['cur_value']['value'];?>
" style="width: 60px;" />
                <input type="hidden" name="data[<?php echo $_smarty_tpl->tpl_vars['meter']->value['id'];?>
][date]" value="<?php echo $_smarty_tpl->tpl_vars['meter']->value['cur_value']['date'];?>
" /></td>
        </tr>
        <?php }} ?>
    </table>
    <br>
    <div align="center">
    <input id="save" name="save" type="submit" value="Сохранить" style="font-size: 14px;"/></div>
</form>

<?php }else{ ?>
У Вас нет счетчиков
<?php }?>