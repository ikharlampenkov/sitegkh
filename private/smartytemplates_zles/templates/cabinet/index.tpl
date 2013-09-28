{include file="share/head.tpl"}
<div style="padding: 20px;">

    <table border="0" width="100">
        <tr>
            <td width="230" style="font-size: 16px;">

                <a href="?page=receipt">Счет-фактура</a><br /><br />
                <a href="?page=balance">Баланс платежей</a><br /><br />
                <a href="?page=meters">Показания счетчиков</a><br /><br />
                <a href="?page=support&category=request_master">Заявка на вызов мастера</a><br /><br />
                <a href="?page=support&category=question">Задать вопрос</a><br /><br />
                <a href="?page=payment">Оплата услуг</a><br /><br />
                <a href="?page=content_page&title=kap_remont">Журнал проводимых работ</a><br/>
            </td>
            <td style="font-size: 14px;">

                {if isset($page) && !empty($page)}
                    {include file="cabinet/$page.tpl"}                        
                {/if}

            </td>
        </tr>
    </table>
</div>

{include file="share/foot.tpl"}