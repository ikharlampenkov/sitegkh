<div class="page_title">Рассылка SMS-сообщений</div>
<div class="page_title_und">&nbsp;</div>

{if $isComplite}
    <div style="font-weight: bold;">Ваша заявка отправлена</div>
    <br />
{/if}

<form action="?page={$page}" method="post">

    <div>Сообщение</div>
    <textarea name="data[message]">{$message}</textarea>
    <br /><br />

    <table border="1">
        <tr>
            <td width="25" align="center">&nbsp;</td>
            <td>Лицевой счет</td>
            <td>Адрес</td>
            <td>ФИО</td>
            <td>Телефон</td>
            <td>Задолженность</td>
        </tr>
        {foreach from=$paList item=pa}
            <tr>
                <td><input id="check" type="checkbox" name="data[pa][{$pa.ls}][check]" /></td>
                <td>{$pa.ls}</td>
                <td>{$pa.address}</td>
                <td>{$pa.fio}</td>
                <td>{$pa.phone}<input type="hidden" name="data[pa][{$pa.ls}][phone]" value="{$pa.phone}" /></td>
                <td>{$pa.debt}<input type="hidden" name="data[pa][{$pa.ls}][debt]" value="{$pa.debt}" /></td>
            </tr>
        {/foreach}
    </table>

    <input id="save" name="save" type="submit" value="Разослать" />
</form>