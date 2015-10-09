<div class="page_title">Лицевые счета</div>
<div class="page_title_und">&nbsp;</div>


{if $action=="add" || $action=="edit"}

<h2>{$txt}</h2>

<form action="?page={$page}&action={$action}{if $action=="edit"}&id={$pa.id}{/if}" method="post">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pem">
            <td width="200">Лицевой счет</td>
            <td><input name="data[ls]" value="{$pa.ls}"/></td>
        </tr>
        <tr class="pem">
            <td width="200">ФИО</td>
            <td><input name="data[fio]" value="{$pa.fio}"/></td>
        </tr>
    {*
    <tr class="pem">
        <td>Дом</td>
        <td><select name="data[house_id]">
            {foreach from=$house_list item=house}
                <option value="{$house.id}" {if isset($pa.house_id) && $pa.house_id==$house.id}selected="selected"{/if}>{$house.street}, {$house.number}{$house.subnumber}</option>
            {/foreach}
            </select>
        </td>
    </tr>
    <tr class="pem">
        <td>Квартира</td>
        <td><input name="data[apartment]" value="{$pa.apartment}" /></td>
    </tr>
    *}
        <tr class="pem">
            <td>Пароль</td>
            <td><input name="data[password]" value="{$pa.password}"/></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить"/>
</form>

    {elseif $action=="meters"}

<h2>Счетчики для л/с {$pa.ls}</h2>

<form action="?page={$page}&action={$action}&id={$pa.id}" method="post">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        {foreach from=$meters_list item=meter}
            <tr class="pem">
                <td>{$meter.title}</td>
                <td><input type="checkbox" name=data[meters][{$meter.id}]
                           {if in_array($meter.id, $pa_meters)}checked="checked"{/if} /></td>
            </tr>
        {/foreach}
    </table>
    <input id="save" name="save" type="submit" value="Сохранить"/>
</form>
    {elseif $action=="cur_meters"}

<h2>Показания для л/с {$pa.ls}</h2>
    {if $cur_meters !== false}

    <table cellpadding="10">
        <tr>
            <td width="200" class="pom" align="center">Счетчик</td>
            <td class="pom" align="center">Показания (предыдущее/текущее значение)</td>
        </tr>
        {foreach from=$cur_meters item=meter}
            <tr>
                <td width="200" class="pem" align="center">{$meter.title}</td>
                <td class="pem" align="center">{$meter.prev_value.value}/&nbsp;{$meter.cur_value.value}</td>
            </tr>
        {/foreach}
    </table>

        {else}
    У Вас нет счетчиков
    {/if}

    {else}

<br/>
<a href="?page={$page}&action=add">Добавить лицевой счет</a>

<a href="?page={$page}&action=refresh">Перечитать файл с данными</a>

<a href="?page={$page}&action=unload_meters">Выгрузить показания счетчиков</a>
<br/><br/>

    {if $pa_list!==false}
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px" class="cab-table">
        <tr>
            <td class="cab-header">Счет</td>
            <td class="cab-header">ФИО</td>
            <td class="cab-header">Пароль</td>
            <td class="cab-header">&nbsp;</td>
        </tr>
        {foreach from=$pa_list item=pa}
            <tr>
                <td class="cab-value">{$pa.ls}</td>
                <td class="cab-value">{$pa.fio}</td>
                <td class="cab-value">{$pa.password}</td>
                <td class="cab-value">
                    <a href="?page={$page}&action=cur_meters&id={$pa.id}">текущие показания</a><br/>
                    <a href="?page={$page}&action=meters&id={$pa.id}">счетчики</a><br/>
                    <a href="?page={$page}&action=edit&id={$pa.id}">редактировать</a><br/>
                    <a href="?page={$page}&action=del&id={$pa.id}">удалить</a></td>
            </tr>
        {/foreach}
    </table>
    {/if}

<br/>
<a href="?page={$page}&action=add">Добавить лицевой счет</a>

<a href="?page={$page}&action=refresh">Перечитать файл с данными</a>
<br/><br/>

{/if}