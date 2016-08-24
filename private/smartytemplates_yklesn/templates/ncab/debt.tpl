<div class="page_title">Информация о задолженности</div>
<div class="page_title_und">&nbsp;</div>

<div style="padding: 10px 0 10px 0; text-align: justify;">Если в графе "Сумма задолженности" указан минус, то это переплата.</div>

<table class="cab-table">
    <tr>
        <td class="cab-header">Период</td>
        <td class="cab-header">Сумма задолженности</td>
        <td class="cab-header">Сумма пени</td>
    </tr>
{foreach from=$debts item=debt name=_debt}
    <tr>
        <td class="cab-value">{$debt->PERIOD}</td>
        <td class="cab-value">{$debt->DOLG}</td>
        <td class="cab-value">{$debt->PENYA}</td>
    </tr>
{/foreach}
</table>


<br/><br/>
<div class="page_title">Информация о задолженности по капетальному ремонту</div>
<div class="page_title_und">&nbsp;</div>

<div style="padding: 10px 0 10px 0; text-align: justify;">Если в графе "Сумма задолженности" указан минус, то это переплата.</div>

<table class="cab-table">
    <tr>
        <td class="cab-header">Период</td>
        <td class="cab-header">Сумма задолженности</td>
        <td class="cab-header">Сумма пени</td>
    </tr>
{foreach from=$debt_kapremonts item=debt name=_debt_kapremont}
    <tr>
        <td class="cab-value">{$debt->PERIOD}</td>
        <td class="cab-value">{$debt->DOLG}</td>
        <td class="cab-value">{$debt->PENYA}</td>
    </tr>
{/foreach}
</table>