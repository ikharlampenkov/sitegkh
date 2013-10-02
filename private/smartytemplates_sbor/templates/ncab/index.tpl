{include file="share/head.tpl"}
<div style="padding: 20px;">

    <table border="0" width="100">
        <tr>
            <td width="230" style="font-size: 16px; vertical-align: top;">
                <a href="?page=about" style="font-size: 14px;">Общие сведения</a><br/><br/>
                <a href="?page=debt" style="font-size: 14px;">Задолженность</a><br/><br/>
                <a href="?page=accruals" style="font-size: 14px;">Начисления</a><br/><br/>
                {*<a href="?page=meters" style="font-size: 14px;">Показания счетчиков</a><br/><br/>*}
                <a href="?page=pmeters" style="font-size: 14px;">Приборы учета</a><br/><br/>

            {*
                            <a href="?page=support&category=request_master" style="font-size: 14px;">Заявка на вызов мастера</a><br /><br />
                            <a href="?page=support&category=question" style="font-size: 14px;">Задать вопрос</a><br /><br />
            *}
            </td>
            <td style="font-size: 14px;">

            {if isset($cab_exception)}
                <div>{$cab_exception}</div>
            {/if}

            {if isset($page) && !empty($page)}
            {if $page_ncab=='0'}
            {include file="$page.tpl"}
                {else}
            {include file="ncab/$page.tpl"}
            {/if}
            {/if}

            </td>
        </tr>
    </table>
</div>

{include file="share/foot.tpl"}