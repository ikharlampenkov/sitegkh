{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
    <div class="page center">
        <div style="padding: 10px; min-height: 500px;">
            {include file="$page.tpl"}
        </div>
    </div>
{else}
    <div class="page center">
        <div class="page_head">
            {*<div class="breadcrumbs"><a href="/">Главная</a> > <a href="/">Внутренняя</a></div>*}
            {*<div class="search">
                <form>
                    <input type="text" name="query" class="search_field" value=""/>
                    <input type="submit" name="submit_search" class="search_button" value=""/>
                </form>
            </div>
            *}
        </div>

        <div id="block_infos">
            <div id="block" class="about">
                {*<h2>О нас</h2> *}
                <p>{$conpage_first.content}</p>
                {*<a href="/" class="further"></a>*}
            </div>

            {*
            <div id="block" class="services">
                <h2>Услуги</h2>

                <p>{$conpage_service.content}</p>
               {*<a href="/" class="further"></a>
            </div>

           <div id="block" class="educational">
                <h2>Ликбез</h2>

                <p>{$conpage_educational.content}</p>
                {*<a href="/" class="further"></a>
            </div> *}
        </div>

        <div class="sidebar">
            <div class="news">
                <h2>Новости</h2>

                {foreach from=$news_list item=news}
                    <div class="item">

                        <img src="/i_domashni/news.jpg"/>

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

                <div class="clear"></div>
            </div>
        </div>
    </div>
{/if}

<div class="clear"></div>
<div class="pad"></div>

{include file="share/foot.tpl"}