{include file="share/head.tpl"}

<tr>
    <td class="leftShadow"></td>
    <td valign="top">


        {if isset($page) && !empty($page)}
            <table id="contentTable">
                <tr>
                    <td id="content">
                        <div class="wrapper">
                            {include file="$page.tpl"}
                        </div>
                    </td>
                </tr>
            </table>
        {else}
            <table id="contentTable">
                <tr>
                    <td id="leftMenu">
                        {if !empty($news_list)}
                            <div id="news">
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
                        {/if}
                    </td>
                    <td id="content">
                        <div class="wrapper">
                            {$conpage_first.content}
                        </div>
                    </td>
                </tr>
            </table>
        {/if}


    </td>
    <td class="rightShadow"></td>
</tr>

{include file="share/foot.tpl"}