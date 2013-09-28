<?php /* Smarty version Smarty-3.0.7, created on 2011-07-11 12:21:45
         compiled from "/home/dnevnik/private/smartytemplates/templates/reu/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14915969694e1a886966b5d3-60954635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0ffb970556f2e0adab99afcaaec38336cd9910' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/reu/contact.tpl',
      1 => 1305306768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14915969694e1a886966b5d3-60954635',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h1>Контакты</h1>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
" method="post">
    <table>
        <tr>
            <td width="200">Адрес</td>
            <td><input type="text" name="data[address]" value="<?php if (isset($_smarty_tpl->getVariable('contact',null,true,false)->value['address'])){?><?php echo $_smarty_tpl->getVariable('contact')->value['address'];?>
<?php }?>" /></td>
        </tr>
         <tr>
            <td width="200">Телефон</td>
            <td><input type="text" name="data[phone_number]" value="<?php if (isset($_smarty_tpl->getVariable('contact',null,true,false)->value['phone_number'])){?><?php echo $_smarty_tpl->getVariable('contact')->value['phone_number'];?>
<?php }?>" /></td>
        </tr>
    </table>
    <input type="hidden" name="data[id]" value="<?php if (isset($_smarty_tpl->getVariable('contact',null,true,false)->value['id'])){?><?php echo $_smarty_tpl->getVariable('contact')->value['id'];?>
<?php }else{ ?>0<?php }?>" />
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>