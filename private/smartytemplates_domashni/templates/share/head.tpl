<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/domashni.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/domashni.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

    {if isset($firstPage) && $firstPage}
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    {/if}

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

    <title>{$title}</title>
<body>

{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

<div id="header">
    <div class="center">

        <div class="pasp">
            <div class="logo"><a href="/"></a></div>
            <div class="gerb"></div>
            <div class="phone"></div>
            <div class="city">г.Киселевск</div>
            <div class="account_links">
                {if $login}
                <span>{$user}</span>
                &nbsp;
                <a href="{$siteurl}?logout">Выйти</a>
                {else}
                <a href="/login">вход</a> / {*<a href="/">регистрация</a>*}
                {/if}
            </div>
        </div>

        <div id="mainmenu">

            <div class="menu">
                {if $razdel_type=='admin'}
                    {include file="admin/menu.tpl"}
                {else}
                    {include file="menu.tpl"}
                {/if}
            </div>

        </div>


        <div class="slider">
            <div class="arrl"></div>
            <div class="arrr"></div>
            <div id="cont">
                <ul class="items">
                    <li>
                        <div class="sliderim" style="background:url(/i_domashni/img1.jpg)"></div>
                    </li>
                    <li>
                        <div class="sliderim" style="background:url(/i_domashni/img1.jpg)"></div>
                    </li>
                    <li>
                        <div class="sliderim" style="background:url(/i_domashni/img1.jpg)"></div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>