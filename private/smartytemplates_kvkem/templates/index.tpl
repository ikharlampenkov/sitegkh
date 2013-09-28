{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
<div style="padding: 0; width:100%; height: 100%; min-height: 500px; margin: 0 auto;">
{include file="$page.tpl"}
</div>
    {else}

<div class="right_column">
    <div class="item">
        <div class="h2">Полезные ссылки</div>

        <ul>
            <li>
                <a href="/">Администрация города Кемерово</a>

                <p>Официальный сайт</p>
            </li>
            <li>
                <a href="/">Совет народных депутатов (Кемеровской области)</a>

                <p>Официальный сайт</p>
            </li>

        </ul>
    </div>

    <div class="item">
        <div class="h2">Новости</div>


        <table>
            <tr>
                <td>
                    {foreach from=$news_list item=news}
                        <div class="news_date">{$news.date|date_format:"%d.%m.%Y"} </div>
                        <div class="news_title">{$news.title}</div>
                        {if $news.full_text}
                            <a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}"
                               class="news_text_link">{$news.short_text}</a>
                            {else}
                            <div class="news_text_link">{$news.short_text}</div>
                        {/if}
                        <br/>

                    {/foreach}
                </td>
            </tr>
        </table>

    </div>
</div>
<div class="center">


    <div class="content_center">

        {$conpage_first.content}

    </div>


</div>



{/if}

{include file="share/foot.tpl"}
