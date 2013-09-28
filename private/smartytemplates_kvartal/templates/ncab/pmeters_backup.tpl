<div class="page_title">Информацию о приборах учета</div>
<div class="page_title_und">&nbsp;</div>

<br/>

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
                    {if $jilci->TYPE=='Счетчик э/э'}
                        <div id="meter_prev_0">{$pa_meters[0].prev_value.value}</div>
                        {elseif $jilci->TYPE=='Водосчетчик ХВ' && ($jilci->NAIM !='кухня ХВ' && $jilci->NAIM != 'Кухня ХВ')}
                        <div id="meter_prev_2">{$pa_meters[2].prev_value.value}</div>
                        {elseif $jilci->TYPE=='Водосчетчик ХВ' && ($jilci->NAIM=='кухня ХВ' || $jilci->NAIM == 'Кухня ХВ')}
                        <div id="meter_prev_4">{$pa_meters[4].prev_value.value}</div>
                        {elseif $jilci->TYPE=='Водосчетчик ГВ' && ($jilci->NAIM=='кухня ГВ' || $jilci->NAIM == 'Кухня ГВ' || $jilci->NAIM == 'кухняГВ')}
                        <div id="meter_prev_3">{$pa_meters[3].prev_value.value}</div>
                        {else}
                        <div id="meter_prev_1">{$pa_meters[1].prev_value.value}</div>
                    {/if}
                </td>
                <td class="cab-value">
                    {if $jilci->TYPE=='Счетчик э/э'}
                        <input type="text" name="data[{$pa_meters[0].id}][value]" id="meter_value_0" value="{$pa_meters[0].cur_value.value}" style="width: 60px;" onkeyup="calcMeterDiff(0)"/>
                        <input type="hidden" name="data[{$pa_meters[0].id}][date]" value="{$pa_meters[0].prev_value.date}"/>
                        {elseif $jilci->TYPE=='Водосчетчик ХВ' && ($jilci->NAIM !='кухня ХВ' && $jilci->NAIM != 'Кухня ХВ')}
                        <input type="text" name="data[{$pa_meters[2].id}][value]" id="meter_value_2" value="{$pa_meters[2].cur_value.value}" style="width: 60px;" onkeyup="calcMeterDiff(2)"/>
                        <input type="hidden" name="data[{$pa_meters[2].id}][date]" value="{$pa_meters[2].prev_value.date}"/>
                        {elseif $jilci->TYPE=='Водосчетчик ХВ' && ($jilci->NAIM=='кухня ХВ' || $jilci->NAIM == 'Кухня ХВ')}
                        <input type="text" name="data[{$pa_meters[4].id}][value]" id="meter_value_4" value="{$pa_meters[4].cur_value.value}" style="width: 60px;" onkeyup="calcMeterDiff(4)"/>
                        <input type="hidden" name="data[{$pa_meters[4].id}][date]" value="{$pa_meters[4].prev_value.date}"/>
                        {elseif $jilci->TYPE=='Водосчетчик ГВ' && ($jilci->NAIM=='кухня ГВ' || $jilci->NAIM == 'Кухня ГВ' || $jilci->NAIM == 'кухняГВ')}
                        <input type="text" name="data[{$pa_meters[3].id}][value]" id="meter_value_3" value="{$pa_meters[3].cur_value.value}" style="width: 60px;" onkeyup="calcMeterDiff(3)"/>
                        <input type="hidden" name="data[{$pa_meters[3].id}][date]" value="{$pa_meters[3].prev_value.date}"/>
                        {else}
                        <input type="text" name="data[{$pa_meters[1].id}][value]" id="meter_value_1" value="{$pa_meters[1].cur_value.value}" style="width: 60px;" onkeyup="calcMeterDiff(1)"/>
                        <input type="hidden" name="data[{$pa_meters[1].id}][date]" value="{$pa_meters[1].prev_value.date}"/>
                    {/if}
                </td> {* {$jilci->TEKPOKAZANIE} *}
                <td class="cab-value">
                    {if $jilci->TYPE=='Счетчик э/э'}
                        <div id="meter_diff_0">{if $pa_meters[0].cur_value.value!=0}{$pa_meters[0].cur_value.value - $pa_meters[0].prev_value.value}{else}0{/if}</div>
                        {elseif $jilci->TYPE=='Водосчетчик ХВ'}
                        <div id="meter_diff_2">{if $pa_meters[2].cur_value.value!=0}{$pa_meters[2].cur_value.value - $pa_meters[2].prev_value.value}{else}0{/if}</div>
                        {else}
                        <div id="meter_diff_1">{if $pa_meters[1].cur_value.value!=0}{$pa_meters[1].cur_value.value - $pa_meters[1].prev_value.value}{else}0{/if}</div>
                    {/if}
                </td>
            </tr>
        {/foreach}
    </table>

    <br/>

    <div align="center">

        <div id="note" style="color: #ff1717; font-weight: bold; margin: 10px; display: none;">Текущее показание счетчика должно быть больше предыдущего.</div>

        <input id="save" name="save" type="submit" value="Сохранить" style="font-size: 14px;" disabled="disabled"/>
    </div>
</form>
{/if}