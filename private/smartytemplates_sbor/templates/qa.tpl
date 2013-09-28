<div class="page_title">Вопрос-ответ</div>
<div class="page_title_und">&nbsp;</div>


{if $isComplite}
<div style="font-weight: bold;">Ваша заявка отправлена</div><br/>
{/if}

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