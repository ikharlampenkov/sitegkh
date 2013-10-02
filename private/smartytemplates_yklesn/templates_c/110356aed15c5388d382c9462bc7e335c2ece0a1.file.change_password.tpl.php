<?php /* Smarty version Smarty-3.0.7, created on 2013-03-21 22:59:00
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/admin/change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789201323514b3c54a657f6-95899706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110356aed15c5388d382c9462bc7e335c2ece0a1' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/admin/change_password.tpl',
      1 => 1363885086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789201323514b3c54a657f6-95899706',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Смена пароля</div>
<div class="page_title_und">&nbsp;</div>
<br/>

<?php if ($_smarty_tpl->getVariable('isNotEq')->value){?>
    <div style="font-weight: bold;">Пароли не совпадают</div><br/>
    <?php }?>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="200">Пароль</td>
            <td><input name="data[password]" value=""/></td>
        </tr>
        <tr>
            <td>Подтверждение пароля</td>
            <td><input name="data[sec_password]" value=""/></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить"/>
</form>