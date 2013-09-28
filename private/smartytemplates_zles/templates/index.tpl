{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
<div style="background-color: #ffffff; min-height: 500px;">
{include file="$page.tpl"}
</div>
    {else}
{*
<div class="pathway">
    {*<a href="/">Общая информация</a> <span class="separator">&gt;&gt;</span> О нас
</div>
<div class="phone"></div>
*}

<div id="block" class="about" style="overflow-y: scroll;">
{*<h2>О нас</h2>
<img src="/i_zles/img.jpg"/>
*}

    <p>{$conpage_first.content}</p>

    <div class="shadow"></div>
</div>

<div id="block" class="services">
    <h2 class="h2">Услуги</h2>

    <p>{$conpage_service.content} </p>
    {*<a href="/?page=content_page&title=service" class="further"></a>*}
</div>

<div id="block" class="educational">
    <h2 class="h2">Ликбез</h2>

    <p>{$conpage_educational.content}</p>
    {*<a href="/?page=content_page&title=bezopasnost" class="further">&nbsp;</a>*}
</div>



<div class="clear"></div>
<div class="news">

    <h2>Новости</h2>

    {foreach from=$news_list item=news}
        <div class="item">
            <div class="date">{$news.date|date_format:"%d.%m.%Y"}</div>
            <div class="title">{$news.title}</div>
            <div class="description">{$news.short_text}</div>
            {if $news.full_text}
                <a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}" class="further"></a>
            {/if}
        </div>
    {/foreach}

    <div class="shadow"></div>
</div>

{/if}

{include file="share/foot.tpl"}