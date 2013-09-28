<div class="page_title">Общие сведения о лицевом счете</div>
<div class="page_title_und">&nbsp;</div>

<br/>

{foreach from=$accruals item=period name=_period}

<b>{$period.period.PERIODSTR}</b><br/><br/>

<table class="cab-table">
    <tr>
        <td class="cab-header">№</td>
        <td class="cab-header">Наименование услуги</td>
        <td class="cab-header">Количество</td>
        <td class="cab-header">Тариф</td>
        <td class="cab-header">Итого начислено</td>
        <td class="cab-header">Сумма субсидий</td>
        <td class="cab-header">Перерасчет</td>
        <td class="cab-header">Итого к оплате</td>
        <td class="cab-header">Поставщик</td>
    </tr>
{foreach from=$period.usluga item=usluga name=_usluga}
    <tr>
        <td class="cab-value">{$smarty.foreach._usluga.iteration}</td>
        <td class="cab-value">{$usluga.NAIMUSL}</td>
        <td class="cab-value">{$usluga->KOL}</td>
        <td class="cab-value">{$usluga->TARIF}</td>
        <td class="cab-value">{$usluga->ITOGO_NACHISL}</td>
        <td class="cab-value">{$usluga->SUBSIDII}</td>
        <td class="cab-value">{$usluga->PERERASCHET}</td>
        <td class="cab-value">{$usluga->K_OPLATE}</td>
        <td class="cab-value">{$usluga->POSTAVCHIK}</td>
    </tr>
{/foreach}
    <tr>
        <td class="cab-header">Итого</td>
        <td class="cab-value" colspan="8">{$period.period.SUM}</td>
    </tr>
</table>
<br/>
{/foreach}