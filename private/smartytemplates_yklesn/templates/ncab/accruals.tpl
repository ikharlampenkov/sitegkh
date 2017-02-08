<div class="page_title">Начисления</div>
<div class="page_title_und">&nbsp;</div>

<br/>

{foreach from=$accruals item=period name=_period}

<b>{$period.period.PERIODSTR}</b><br/><br/>

<table class="cab-table">
    <tr>
        <td class="cab-header" rowspan="2">Вид услуг</td>
        <td class="cab-header" rowspan="2">Ед. изм.</td>
        <td class="cab-header" colspan="2">Объем услуг</td>
        <td class="cab-header" rowspan="2">Тариф руб / ед.изм.</td>
        <td class="cab-header" colspan="2">Размер платы за ком.услуги, руб.</td>
        <td class="cab-header" rowspan="2">Всего начислено за расчетный период, руб.</td>
        <td class="cab-header" rowspan="2">Перерасчеты всего, руб.</td>
        <td class="cab-header" rowspan="2">Льготы, субсидии, руб.</td>
        <td class="cab-header" rowspan="2">Итого начислено за расчетный период, руб</td>
    </tr>
    <tr>
        <td class="cab-header">инд. потребление</td>
        <td class="cab-header">общедом. нужды</td>
        <td class="cab-header">инд. потребление</td>
        <td class="cab-header">общедом. нужды</td>
    </tr>
    {assign var="ind_sum" value=0}
    {assign var="odn_sum" value=0}
    {assign var="itogo_sum" value=0}
{foreach from=$period.usluga item=usluga name=_usluga}
{if $smarty.foreach._usluga.index==0}
<tr>
    <td class="cab-value" style="text-align: left; font-weight: bold; padding: 5px;" colspan="11">Содержание и ремонт жилого помещения</td>
</tr>
{elseif $smarty.foreach._usluga.index==1 || $smarty.foreach._usluga.index==8}
    <tr>
        <td class="cab-value" style="text-align: left; font-weight: bold; padding: 5px;" colspan="11">Коммунальные услуги</td>
    </tr>
    {elseif $smarty.foreach._usluga.index==6}
        <tr>
            <td class="cab-value" style="text-align: left; font-weight: bold; padding: 5px;" colspan="11">Прочие услуги</td>
        </tr>
{/if}
    <tr>
        <td class="cab-value">{$usluga.NAIMUSL}</td>
        <td class="cab-value">{$usluga.ED_IZM}</td>
        <td class="cab-value">{$usluga->KOL}</td>
        <td class="cab-value">{$usluga->KOL_ODN}</td>
        <td class="cab-value">{$usluga->TARIF}</td>
        <td class="cab-value">{$usluga->SUM_TARIF}</td>
        <td class="cab-value">{$usluga->SUM_ODN}</td>
        <td class="cab-value">{$usluga->ITOGO_NACHISL}</td>
        <td class="cab-value">{$usluga->PERERASCHET}</td>
        <td class="cab-value">{$usluga->SUBSIDII}</td>
        <td class="cab-value">{$usluga->K_OPLATE}</td>
        {assign var="ind_sum" value=$ind_sum + $usluga->SUM_TARIF|replace:',':'.'}
        {assign var="odn_sum" value=$odn_sum + $usluga->SUM_ODN|replace:',':'.'}
    </tr>
{/foreach}
    <tr>
        {assign var="itogo_sum" value=$ind_sum+$odn_sum}
        <td class="cab-header" colspan="5" style="font-weight: bold;">Итого к оплате за расчетный период</td>
        <td class="cab-value" style="font-weight: bold;">{$ind_sum|replace:'.':','}</td>
        <td class="cab-value" style="font-weight: bold;">{$odn_sum|replace:'.':','}</td>
        <td class="cab-value" style="font-weight: bold;">{$itogo_sum|replace:'.':','}</td>
        <td class="cab-value"></td>
        <td class="cab-value"></td>
        <td class="cab-value" style="font-weight: bold; color: #ff0000;">{$period.period.SUM}</td>
    </tr>
</table>
<br/>
{/foreach}