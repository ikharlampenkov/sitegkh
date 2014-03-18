<div class="page_title">Информацию о приборах учета</div>
<div class="page_title_und">&nbsp;</div>

<div style="padding:  10px 0 10px 0; text-align: justify;">Уважаемые жильцы, передавайте показания счетчиков c 20 по 25 число текущего месяца!</div>

{if $meters}
    <form action="?page={$page}" method="post">
    <table class="cab-table">
        <tr>
            <td class="cab-header">Наименование счетчика</td>
            <td class="cab-header">Характеристика счетчика</td>
            <td class="cab-header">Номер счетчика</td>
            <td class="cab-header">Предыдущее показание</td>
            <td class="cab-header">Текущее показание</td>
            <td class="cab-header">Разница</td>
        </tr>
        {foreach from=$meters item=jilci name=_jilci}
            <tr>
                <td class="cab-value">{$jilci->NAIM}</td>
                <td class="cab-value">{$jilci->TYPE}</td>
                <td class="cab-value">{$jilci->NOMER}</td>
                <td class="cab-value">
                    <div id="meter_prev_{$jilci->ID|replace:'.':'_'}">{$pa_meters[{$jilci->ID}].prev_value.value}</div>
                </td>
                <td class="cab-value">
                    <input type="text" name="data[{$jilci->ID}][value]" id="meter_value_{$jilci->ID|replace:'.':'_'}" value="{$pa_meters[{$jilci->ID}].cur_value.value}" style="width: 60px;" onkeyup="calcMeterDiff('{$jilci->ID|replace:'.':'_'}')" {if !$active}disabled="disabled" {/if}/>
                    <input type="hidden" name="data[{$jilci->ID}][date]" value="{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}"/>
                </td>
                <td class="cab-value">
                    <div id="meter_diff_{$jilci->ID|replace:'.':'_'}">{if $pa_meters[{$jilci->ID}].cur_value.value!=0}{$pa_meters[{$jilci->ID}].cur_value.value - $pa_meters[{$jilci->ID}].prev_value.value}{else}0{/if}</div>
                </td>
            </tr>
        {/foreach}
    </table>

    <br/>

    <div align="center">
        <input id="save" name="save" type="submit" value="Сохранить" style="font-size: 14px;" {if $active==false}disabled="disabled"{/if}/>
    </div>
</form>
{/if}