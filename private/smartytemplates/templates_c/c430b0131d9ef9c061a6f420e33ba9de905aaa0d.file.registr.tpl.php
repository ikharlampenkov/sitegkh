<?php /* Smarty version Smarty-3.0.7, created on 2011-06-18 22:17:57
         compiled from "/home/dnevnik/private/smartytemplates/templates/registr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13018392834dfcc1a5727369-22847890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c430b0131d9ef9c061a6f420e33ba9de905aaa0d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/registr.tpl',
      1 => 1305306772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13018392834dfcc1a5727369-22847890',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Регистрация нового РЭУ</h1>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
" method="post">
    <table width="100%">
        <tr>
            <td width="200">Город</td>
            <td><select name="data[city_id]" >
                <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('city_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['city']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['city']->value['title'];?>
</option>
                <?php }} ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Название</td>
            <td><input name="data[title]" /> </td>
        </tr>
        <tr>
            <td>Контактная информация</td>
            <td><textarea name="data[contact_info_admin]"></textarea></td>
        </tr>
        <tr>
            <td>Что заинтересовало?</td>
            <td><textarea name="data[what_interested]"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="action" value="Зарегистрировать" /> </td>
            <td>&nbsp;</td>
        </tr>
    </table>
</form>