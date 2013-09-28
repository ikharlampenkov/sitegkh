<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/zles/jquery-ui.css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/coin-slider-styles.css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/zles.css" media="all"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/coin-slider.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/zles.js"></script>
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

</head>
<body>

<div id="header">
    <div id="header_top">

        <div class="name"></div>
        <div class="date_time">
            <span class="time"></span>
            <span class="date">{$smarty.now|date_format:"%d.%m.%Y"}</span>
        </div>

        <div id="login">
        {if $login}
            <div class="title">{$user} <a href="{$siteurl}?logout" style="color: #ffffff;">Выйти</a></div>
            {else}
            <form action="/" method="post">
                <div class="title">Личный кабинет</div>
                <input type="text" name="personal_account" class="login_field" id="login_fields" placeholder="Лицевой счет"/>
                <input type="password" name="psw" class="pass_field" id="login_fields" placeholder="Пароль"/>
                <input type="submit" name="submit_login" class="login_button" value="ВХОД"/>
                <span class="reg_link"><a href="/">Регистрация</a></span>
            </form>
        {/if}
        </div>

        <div class="search">
            <form>
                <input type="text" name="query" class="search_field" placeholder="ПОИСК"/>
                <input type="submit" name="submit_search" class="search_button" value=""/>
            </form>
        </div>
    </div>

    <div class="logo"><a href="/"></a></div>

    <div id="slider">
        <a href="/"> <img src="/i_zles/header_img1.png" data-thumb="/i_zles/header_img1.png" alt=""/></a>
        <a href="/"> <img src="/i_zles/header_img2.png" data-thumb="/i_zles/header_img2.png" alt=""/></a>
        <a href="/"> <img src="/i_zles/header_img3.png" data-thumb="/i_zles/header_img3.png" alt=""/></a>


    </div>

    <div id="mainmenu">

    {if $razdel_type=='admin'}
        {include file="admin/menu.tpl"}
    {else}
        {include file="menu.tpl"}
    {/if}

    </div>
</div>

{if $razdel_type=='admin'}
<div style="margin: 0 auto;">{include file="admin/top_menu.tpl"}</div>
{/if}

<div class="content">
