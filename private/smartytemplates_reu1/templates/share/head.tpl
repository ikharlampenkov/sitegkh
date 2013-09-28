<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/plus.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/coin-slider-styles.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/coin-slider.min.js"></script>

    <script type="text/javascript" language="javascript" src="/js/plus.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

    {if isset($firstPage) && $firstPage}
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    {/if}

    <title>{$title}</title>

    <!--[if lte IE 6]>
    <script src="/js/png.js"></script>
    <script>DD_belatedPNG.fix('div, a, img, span');</script>
    <![endif]-->
    <!--[if !IE 7]>
    <style type="text/css">
        #wrap {
            display: table;
            height: 100%
        }
    </style>
    <![endif]-->

<body>

{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

<div class="header_top">
    <div class="center">
        <div class="account_links">
            {if $login}
                <span>{$user}</span>
                &nbsp;
                <a href="{$siteurl}?logout">Выйти</a>
            {else}
                <a href="/login">вход</a>
            {* / <a href="/">регистрация</a>*}
            {/if}
        </div>

        <div class="search">
            <form>
                <input type="text" name="query" class="search_field" value=""/>
                <input type="submit" name="submit_search" class="search_button" value=""/>
            </form>
        </div>


    </div>
</div>

<div id="{if isset($page) && !empty($page)}header{else}header_main{/if}">
    <div class="center">
        <div id="mainmenu">

            <div class="menu">
                {if $razdel_type=='admin'}
                    {include file="admin/menu.tpl"}
                {else}
                    {include file="menu.tpl"}
                {/if}
            </div>

        </div>
        <div class="pasp">
            <div class="logo"><a href="/" style="background-image: url(/i_plus/reu1.png);"></a></div>
            <div class="gerb"></div>
            <div class="phone"></div>
            <div class="city">г.Киселевск</div>
        </div>

        {if isset($page) && !empty($page)}
            <div class="pathway">
                <a href="/" class="main"></a>
                {* <a href="/">Услуги</a> *}
            </div>
        {else}
            <div class="slider">
                <div id="slider">

                    <a href="/"> <img src="/i_plus/header_img1.png" data-thumb="/i_plus/header_img1.png" alt=""/></a>
                    <a href="/"> <img src="/i_plus/header_img2.png" data-thumb="/i_plus/header_img2.png" alt=""/></a>
                    <a href="/"> <img src="/i_plus/header_img3.png" data-thumb="/i_plus/header_img3.png" alt=""/></a>


                </div>
                {*<div class="shadow"></div>*}
            </div>
        {*
        <div id="block_infos">
            <div id="block" class="about">
                <h2>О нас</h2>

                <p>{$conpage_about.content}</p>
                {* <a href="/" class="further"></a>

    </div>

    <div id="block" class="services">
        <h2>Услуги</h2>

        <p>{$conpage_service.content}</p>

        {* <a href="/" class="further"></a>
    </div>

    <div id="block" class="educational">
        <h2>Ликбез</h2>

        <p>{$conpage_educational.content}</p>

        {* <a href="/" class="further"></a>
    </div>
</div>
    *}
        {/if}

        <div class="shadow_header"></div>
    </div>
</div>