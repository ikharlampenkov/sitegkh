{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
{include file="admin/$page.tpl"}
    {else}

<div class="pathway">
    <a href="/">Общая информация</a> <span class="separator">&gt;&gt;</span> О нас
</div>
<div class="phone"></div>

<div id="block" class="about">
    <h2>О нас</h2>
    <img src="/i_zles/img.jpg"/>

    <p>{*$conpage_first.content*}</p>

    <div class="shadow"></div>
</div>

<div id="block" class="services">
    <h2>Услуги</h2>

    <p>В этом разделе речь пойдёт о многообразии услуг, предоставляемых управляющей компанией конечному потребителю.
        Можно в кратце пояснить на каких условиях и в какие сроки могут быть рпедоставлены эти самые услуги.</p>

    <p>Ну и конечно же следует вспомнить о том что, смысл жизни профанирует принцип восприятия, отрицая очевидное.
        Жизнь философски ассоциирует напряженный постмодернизм. Объект деятельности означает </p>
    <a href="/" class="further"></a>

    <div class="shadow"></div>
</div>

<div id="block" class="educational">
    <h2>Ликбез</h2>

    <p>В этом разжеле, можно открыть клиенту глаза на необходимые нюансы , для юолее эффективного взаимодейсвия с
        управляющей компанией.
        Данный раздел призван устранить ряд недопониманий, возникающих в процессе работы с управляющей
        компанией. </p>

    <p>Опять же можно напомнить о том что, Смысл жизни профанирует принцип восприятия, отрицая очевидное. Жизнь
        философски ассоциирует напряженный постмодернизм.
        Объект деятельности означает </p>
    <a href="/" class="further"></a>

    <div class="shadow"></div>
</div>
<div class="clear"></div>

<div id="block" class="news">
    <h2>Новости</h2>

    {foreach from=$news_list item=news}
        <div class="item">
            <div class="date">{$news.date|date_format:"%d.%m.%Y"}</div>
            <div class="title">{$news.title}</div>
            <div class="description">{$news.short_text}</div>
            {if $news.full_text}
                <a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}"
                   class="further"></a>
            {/if}
        </div>
    {/foreach}

    <div class="shadow"></div>
</div>

{/if}

{include file="share/foot.tpl"}