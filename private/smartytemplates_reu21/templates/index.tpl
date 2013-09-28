{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
<div style="padding: 20px;">
{include file="$page.tpl"}
</div>
    {else}

<table>
    <tr>
        <td style="width: 60%; padding: 0px;"> {* 404px; *}
            <div style="padding: 20px;">

                <div class="rzdtitle">Раскрытие информации</div>
                <br/>
                
                {$conpage_first.content}

            {*
            <div class="rzdtitle">Личный кабинет жильца</div>

            <div class="lk_block">
                <div class="lk_text">Посмотреть распечатку платежей</div>
                <div class="lk_text">Посмотреть баланс платежей</div>
                <div class="lk_text">Передать показания счетчиков</div>
                <div class="lk_text">Подать заявку на вызов мастера</div>
                <div class="lk_text">Задать вопрос управлению</div>
                <div class="lk_text">Оплатить услуги</div>
                <div class="lk_text">Посмотреть текущие работы по дому</div>
            </div>
            *}
            </div>
        </td>
        <td style="width: 40%;">
            <div style="padding: 20px;">
                <div class="rzdtitle">Новости</div>
                <br/>
                <table>
                    <tr>
                        <td>
                            {foreach from=$news_list item=news}
                                <div class="news_date">{$news.date|date_format:"%d.%m.%Y"} </div>
                                <div class="news_title">{$news.title}</div>
                                {if $news.full_text}
                                    <a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}" class="news_text_link">{$news.short_text}</a>
                                    {else}
                                    <div class="news_text_link">{$news.short_text}</div>
                                {/if}
                                <br/>

                            {/foreach}
                        </td>
                    </tr>
                </table>

            </div>
        </td>
    </tr>
    <tr>
        <td style="height: 380px; background-image: url(i/derevoleft.jpg); background-repeat: no-repeat; background-position: left bottom; padding: 0px;">
            <div style="padding: 20px;">

                <div class="rzdtitle">Жизненные ситуации</div>
                <br/>

                {foreach from=$faq_title_list item=faq_t}
                    <div>
                        <img src="/i/{$faq_t.img}" alt="{$faq_t.question}" class="faq_t_img"/>
                        <a href="?page=faq&action=view&id={$faq_t.id}{if $faq_t.is_situation==1}&is_situation=1{/if}" class="faq_t">{$faq_t.question}</a>
                    </div>
                    <br/>
                {/foreach}

            </div>
        </td>
        <td style="height: 380px; width: 50%; padding: 0px;">
            <div style="padding: 20px;">


            </div>
        </td>
    {*
    <td style="height: 515px; width: 288px; background-image: url(i/derevoright.jpg); background-repeat: no-repeat; background-position: right bottom; padding: 0px;">
        <div style="padding: 20px;">{* <div class="rzdtitle">Оплата</div> </div>
    </td>
    *}
    </tr>
</table>
{/if}

{include file="share/foot.tpl"}