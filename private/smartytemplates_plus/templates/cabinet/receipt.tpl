<h2>Счет-фактура</h2>


{*<div><span>Плательщик:</span>&nbsp;<span>{$account_info.fio}</span></div>*}
<div><span>Лицевой счет №:</span>&nbsp;<span>{$account_info.id}</span></div>
<div><span>Адрес:</span>&nbsp;<span>{$house.street} д.{$house.number}{$house.subnumber} кв.{$account_info.apartment}</span></div>
<br>
<table cellpadding="10">
    <tr>
        <td class="pom" align="center"><b>Наименование операции</td>
        <td class="pom" align="center"><b>Дата</td>
        <td class="pom" align="center"><b>Оплата</td>
    </tr>

    {foreach from=$meters item=meter}
    <tr>
        <td class="pem" align="center">{$meter.title}</td>
        <td class="pem" align="center">{$date|date_format:"%m/%Y"}</td>
        <td class="pem" align="center">{$meter.diff}{$meter.unit}={$meter.sum}</td>
    </tr>
    {/foreach}
    
    <tr>
        <td class="pem" align="center">{$gku.title}</td>
        <td class="pem" align="center">{$date|date_format:"%m/%Y"}</td>
        <td class="pem" align="center">{$gku.sum}</td>
    </tr>
    
    <tr>
        <td class="pom" align="center">Итого</td>
        <td class="pom" align="center">&nbsp;</td>
        <td class="pom" align="center">{$itogo}</td>
    </tr>
    
</table>
<br>
<div align="center" style="font-size: 20px;">
{if $action!='print'}
<a href="?page={$page}&action=print" target="_blank">Распечатать</a>
{/if}
</div><br>