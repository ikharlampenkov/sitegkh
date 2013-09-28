<?php /* Smarty version Smarty-3.0.7, created on 2013-04-23 08:25:11
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/qa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12602951985175e2f729b700-24046730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03bbe9be0a2c0eb3a97e90652cbfe955f06ac1b7' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/qa.tpl',
      1 => 1337164527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12602951985175e2f729b700-24046730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Вопрос-ответ</div>
<div class="page_title_und">&nbsp;</div>


<?php if ($_smarty_tpl->getVariable('isComplite')->value){?>
<div style="font-weight: bold;">Ваша заявка отправлена</div><br/>
<?php }?>

<form action="?page=qa" method="post">

    <table>

        <tr>
            <td style="width: 150px;">Фамилия имя отчество<span class="red">*</span></td>
            <td><input type="text" name="question[fio]" value=""/></td>
        </tr>
        <tr>
            <td>Адрес<span class="red">*</span></td>
            <td><input type="text" name="question[address]" value=""/></td>
        </tr>
        <tr>
            <td>Телефон<span class="red">*</span></td>
            <td><input type="text" name="question[phone]" value=""/></td>
        </tr>
        <tr>
            <td>E-mail<span class="red">*</span></td>
            <td><input type="text" name="question[email]" value=""/></td>
        </tr>
        <tr>
            <td>Тема письма<span class="red">*</span></td>
            <td><input type="text" name="question[subject]" value=""/></td>
        </tr>
        <tr>
            <td>Тип сообщения<span class="red">*</span></td>
            <td><select name="question[type]">
                <option value=" "> </option>
                <option value="Вопрос">Вопрос</option>
                <option value="Жалоба">Жалоба</option>
                <option value="Благодарность">Благодарность</option>
                <option value="Администратору сайта">Администратору сайта</option>
                <option value="Получение информации">Получение информации</option>
            </select></td>
        </tr>
        <tr>
            <td>Текст сообщения<span class="red">*</span></td>
            <td><textarea name="question[text]"></textarea></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Отправить">

    <br/><br/>
    <div><span class="red">*</span> - обязательные поля</div>

</form>