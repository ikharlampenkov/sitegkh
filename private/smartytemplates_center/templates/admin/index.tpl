{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
    <div style="padding: 20px;">
        {include file="admin/$page.tpl"}
    </div>
{else}

<div class="content">

    <h1 class="text_heading">
        О нас
    </h1>

    <div class="cont_text">
        {$conpage_first.content}
    </div>
</div>
<div class="sidebar">
    <h1 class="text_heading">Новости</h1>

{if $news_list !== false}
    {foreach from=$news_list item=news}
        <div class="item">
            <div class="img"><img src="/i_center/news.jpg"/></div>
            <div class="descript">
                <p class="date">{$news.date|date_format:"%d.%m.%Y"}</p>

                <p class="title"><a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}">{$news.title}</a></p>
            </div>
        </div>
    {/foreach}
{/if}

</div>
<div class="clear"></div>
<div class="map">
    Карта проезда
    <div class="y_map"></div>
</div>

{/if}

{include file="share/foot.tpl"}