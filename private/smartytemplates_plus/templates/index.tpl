{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
    <div class="page center">
        {include file="$page.tpl"}
    </div>
{else}
    <div class="page center">
        <div class="content">
            <div class="artical">
                {*<img src="/i_plus/artical.jpg"/> *}

                {* <h2>Раскрытие информации</h2> *}

                <div class="clear"></div>
                <p>{$conpage_first.content}</p>

                {* <a href="/" class="further"></a> *}
            </div>
        </div>

        <div class="sidebar">
            <div class="news">
                <h2>Новости</h2>
                {if $news_list}
                    {foreach from=$news_list item=news}
                        <div class="item">

                            <img src="/i_plus/news.jpg"/>

                            <div class="description">
                                <div class="title">{$news.title}</div>
                                <div class="date">{$news.date|date_format:"%d.%m.%Y"}</div>
                                <p>
                                    {if $news.full_text}
                                        <a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}" class="news_text_link">{$news.short_text}</a>
                                    {else}
                                        {$news.short_text}
                                    {/if}
                                </p>
                            </div>
                        </div>
                    {/foreach}
                {/if}

                <a href="{$siteurl}?page=news" class="further"></a>

                <div class="clear"></div>
            </div>
        </div>


    </div>
{/if}

<div class="clear"></div>
<div class="pad"></div>

{include file="share/foot.tpl"}