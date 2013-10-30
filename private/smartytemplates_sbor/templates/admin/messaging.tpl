<div class="page_title">Рассылка SMS-сообщений</div>
<div class="page_title_und">&nbsp;</div>

<br/>

{if $isComplite}
    <div style="font-weight: bold;">Ваша заявка отправлена</div>
    <br/>
{/if}

<form action="?page={$page}" method="post">

    <div style="font-weight: bold;">Сообщение</div>
    <textarea name="data[message]" rows="4">{$message}</textarea>
    <br/><br/>

    <table class="cab-table">
        <tr>
            <td class="cab-header">&nbsp;</td>
            <td class="cab-header">Лицевой счет</td>
            <td class="cab-header">Адрес</td>
            <td class="cab-header">ФИО</td>
            <td class="cab-header">Телефон</td>
            <td class="cab-header">Задолженность</td>
        </tr>
        {foreach from=$paList item=pa}
            <tr>
                <td class="cab-value" style="width: 30px;"><input id="check" type="checkbox" name="data[pa][{$pa.ls}][check]"/></td>
                <td class="cab-value">{$pa.ls}</td>
                <td class="cab-value">{$pa.address}</td>
                <td class="cab-value">{$pa.fio}</td>
                <td class="cab-value">{$pa.phone}<input type="hidden" name="data[pa][{$pa.ls}][phone]" value="{$pa.phone}"/></td>
                <td class="cab-value">{$pa.debt}<input type="hidden" name="data[pa][{$pa.ls}][debt]" value="{$pa.debt}"/></td>
            </tr>
        {/foreach}
    </table>

    <input id="save" name="save" type="submit" value="Разослать"/>
</form>