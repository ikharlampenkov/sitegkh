<div class="page_title">Начисления</div>
<div class="page_title_und">&nbsp;</div>

<br/>

{foreach from=$accruals item=period name=_period}
    <b>{$period.period.PERIODSTR}</b>
    <br/>
    <br/>
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
        {assign var="odn_sum" value=0}
        {assign var="itogo_sum" value=0}
        {assign var="k_oplate" value=0}
        {foreach from=$period.razdel item=razdel name=_razdel}
            <tr>
                <td class="cab-value" style="text-align: left; font-weight: bold; padding: 5px;" colspan="11">{$razdel.name}</td>
            </tr>
            {foreach from=$razdel.usluga item=usluga name=_usluga}
                <tr>
                    <td class="cab-value">{$usluga.NAIMUSL}</td>
                    <td class="cab-value">{$usluga.ED_IZM}</td>
                    <td class="cab-value">{$usluga->KOL|replace:'|':'<br/>'}</td>
                    <td class="cab-value">{$usluga->KOL_ODN}</td>
                    <td class="cab-value">{$usluga->TARIF|replace:'|':'<br/>'}</td>
                    <td class="cab-value">{$usluga->SUM_TARIF|replace:'|':'<br/>'}</td>
                    <td class="cab-value">{$usluga->SUM_ODN}</td>
                    <td class="cab-value">{$usluga->ITOGO_NACHISL}</td>
                    <td class="cab-value">{$usluga->PERERASCHET}</td>
                    <td class="cab-value">{$usluga->SUBSIDII}</td>
                    <td class="cab-value">{$usluga->K_OPLATE}</td>
                    {assign var="odn_sum" value=$odn_sum + $usluga->SUM_ODN|replace:',':'.'}
                    {assign var="itogo_sum" value=$itogo_sum + $usluga->ITOGO_NACHISL|replace:',':'.'|replace:' ':''}
                    {assign var="k_oplate" value=$k_oplate + $usluga->K_OPLATE|replace:',':'.'|replace:' ':''}
                </tr>
            {/foreach}
        {/foreach}
        <tr>
            <td class="cab-header" colspan="5" style="font-weight: bold;">Итого к оплате за расчетный период</td>
            <td class="cab-value" style="font-weight: bold;">{$period.sum_tariff|replace:'.':','}</td>
            <td class="cab-value" style="font-weight: bold;">{$odn_sum|replace:'.':','}</td>
            <td class="cab-value" style="font-weight: bold;">{$itogo_sum|replace:'.':','}</td>
            <td class="cab-value"></td>
            <td class="cab-value"></td>
            <td class="cab-value" style="font-weight: bold;">{$k_oplate|replace:'.':','}</td>
        </tr>
        <tr>
            <td class="cab-value">{$period.capital.attribute.NAIMUSL}</td>
            <td class="cab-value">{$period.capital.attribute.ED_IZM}</td>
            <td class="cab-value">{$period.capital.attribute->KOL|replace:'|':'<br/>'}</td>
            <td class="cab-value">{$period.capital.attribute->KOL_ODN}</td>
            <td class="cab-value">{$period.capital.attribute->TARIF|replace:'|':'<br/>'}</td>
            <td class="cab-value">{$period.capital.attribute->SUM_TARIF|replace:'|':'<br/>'}</td>
            <td class="cab-value">{$period.capital.attribute->SUM_ODN}</td>
            <td class="cab-value">{$period.capital.attribute->ITOGO_NACHISL}</td>
            <td class="cab-value">{$period.capital.attribute->PERERASCHET}</td>
            <td class="cab-value">{$period.capital.attribute->SUBSIDII}</td>
            <td class="cab-value">{$period.capital.attribute->K_OPLATE}</td>
            {assign var="itogo_sum" value=$itogo_sum + $period.capital.ITOGO_NACHISL|replace:',':'.'|replace:' ':''}
            {assign var="k_oplate" value=$k_oplate + $period.capital.K_OPLATE|replace:',':'.'|replace:' ':''}
        </tr>
        <tr>
            <td class="cab-header" colspan="5" style="font-weight: bold;">Всего к оплате за расчетный период</td>
            <td class="cab-value" style="font-weight: bold;">{$period.sum_tariff|replace:'.':','}</td>
            <td class="cab-value" style="font-weight: bold;">{$odn_sum|replace:'.':','}</td>
            <td class="cab-value" style="font-weight: bold;">{$itogo_sum|replace:'.':','}</td>
            <td class="cab-value"></td>
            <td class="cab-value"></td>
            <td class="cab-value" style="font-weight: bold; color: #ff0000;">{$period.period.SUM}</td>
        </tr>
    </table>
    <br/>
{/foreach}