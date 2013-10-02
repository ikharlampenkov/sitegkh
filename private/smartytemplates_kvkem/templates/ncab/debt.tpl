<div class="page_title">Информация о задолженности</div>
<div class="page_title_und">&nbsp;</div>

<div style="padding: 10px 0 10px 0; text-align: justify;">Если в графе "Сумма задолженности" указан минус, то это переплата.</div>

<table class="cab-table">
    <tr>
        <td class="cab-header">Период</td>
        <td class="cab-header">Сумма задолженности</td>
        <td class="cab-header">Сумма пени</td>
    </tr>
{foreach from=$debt item=jilci name=_jilci}
    <tr>
        <td class="cab-value">{$jilci->PERIOD}</td>
        <td class="cab-value">{$jilci->DOLG}</td>
        <td class="cab-value">{$jilci->PENYA}</td>
    </tr>
{/foreach}
</table>