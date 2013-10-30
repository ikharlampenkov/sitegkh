{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
<div style="padding: 20px 50px 0px 50px; width:900px; height: 100%; min-height: 500px; margin: 0 auto;">
{include file="admin/$page.tpl"}
</div>
    {else}

<img src="/ckfinder/userfiles/images/indexfoto.jpg" width="100%"/>
<table style="width: 100%; height: 100%; margin: 0 auto;">
    <tr>
        <td style="width: 70%; vertical-align: top;">
            <div class="inner_block">
                <div class="rascr_text" style="text-align: justify;">
                    {$conpage_first.content}
                </div>

        </td>
        <td style="width: 30%; vertical-align: top;">
            <img src="/ckfinder/userfiles/images/tel2.jpg" width="80%" style="float:right"/>

            <p>&nbsp;</p>

            <div class="rzdtitle inline-block" style="margin: 0 auto; font-weight: bold; width: 80px; line-height: 40px; background: url('/i_yklesn/news.jpg') left no-repeat; padding-left: 50px; vertical-align: middle;">
                Новости
            </div>

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
                    <table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 100%; margin: 0 auto;">
                        <tbody>
                        <tr>
                            <td colspan="3" style="text-align: center;">
                                <span style="color:rgb(0,160,191);"><strong><span style="font-size: 16px;"><span style="font-family: arial,helvetica,sans-serif;">Наши партнёры:</span></span></strong></span></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <strong><span style="font-size:14px;"><span style="font-family: arial,helvetica,sans-serif;">Администрация<br/>
				г. Кемерово.</span></span></strong></td>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <strong><span style="font-size:14px;"><span style="font-family: arial,helvetica,sans-serif;">ОАО &quot;СКЭК&quot;</span></span></strong></td>
                            <td style="text-align: center; width: 150px;">
                                <span style="font-size:14px;"><span style="font-family: arial,helvetica,sans-serif;"><strong>ООО ХК &quot;СДС-Энерго&quot;</strong></span></span></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <a href="http://www.kemerovo.ru"><img alt="" src="/ckfinder/userfiles/images/adm1.jpg" style="width: 100px; height: 136px;"/></a></td>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <a href="http://skek.ru/"><img alt="" src="/ckfinder/userfiles/images/eskk1.jpg" style="width: 100px; height: 100px;"/></a></td>
                            <td style="text-align: center; width: 150px;">
                                <a href="http://www.sdsenergo.ru"><img alt="" src="/ckfinder/userfiles/images/cds1.jpg" style="width: 100px; height: 75px;"/></a></td>
                        </tr>
                        </tbody>
                    </table>
                </tr>
            </table>
            <br/>
            </div>
        </td>
    </tr>
</table>

{/if}

{include file="share/foot.tpl"}