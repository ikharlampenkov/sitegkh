<div class="page_title">Показания счетчиков</div>
<div class="page_title_und">&nbsp;</div>
<br/>

{if $meters !== false}

<form action="?page={$page}" method="post">
    <table class="cab-table">
        <tr>
            <td class="cab-header">Счетчик</td>
            <td class="cab-header">Показания (предыдущее/текущее значение)</td>
        </tr>
        {foreach from=$meters item=meter}
        <tr>
            <td class="cab-value">{$meter.title}</td>
            <td class="cab-value">{$meter.prev_value.value}/&nbsp; <input type="text" name="data[{$meter.id}][value]" value="{$meter.cur_value.value}" style="width: 60px;" />
                <input type="hidden" name="data[{$meter.id}][date]" value="{$meter.cur_value.date}" /></td>
        </tr>
        {/foreach}
    </table>
    <br>
    <div align="center">
    <input id="save" name="save" type="submit" value="Сохранить" style="font-size: 14px;"/></div>
</form>

{else}
У Вас нет счетчиков
{/if}