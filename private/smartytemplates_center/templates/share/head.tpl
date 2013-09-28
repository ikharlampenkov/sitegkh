<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>{$title}</title>

    <script src="js/scripts.js" type="text/javascript"></script>

    <link href="/css/center.css" rel="stylesheet" type="text/css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

{if isset($firstPage) && $firstPage}
    <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
{/if}

    <!--[if lte IE 6]>
    <script src="/js/png.js"></script>
    <script>DD_belatedPNG.fix('div, a, img, span');</script>
    <![endif]-->

    <!--[if IE]>
    <style type="text/css">
        .header_center .auth input {
            margin: 0px 10px 0 0;
        }
    </style>
    <![endif]-->
</head>
<body>

{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

<div id="header">
    <div class="header_center">
        <div class="auth">
        {if $login}

            <span style="">{$user}</span>&nbsp; <a href="{$siteurl}?logout">Выйти</a>

            {else}
            <form action="/" method="post">
                <input type="text" name="personal_account" value="Лицевой счет" onClick="this.value=''" onFocusOut="if(this.value==''){ this.value='Лицевой счет'; }">
                <input type="password" name="psw" value="Пароль" onClick="this.value=''" onFocusOut="if(this.value==''){ this.value='Пароль'; }">
                <input type="submit" name="submit_auth" class="auth_button" value="вход"/>
            </form>
        {/if}
        </div>
        <div class="search">
            <form>
                <input type="text" name="query" class="search_field" value="поиск" onClick="this.value=''" onFocusOut="if(this.value==''){ this.value='поиск'; }"/>
                <input type="submit" name="submit_search" class="search_button" value=""/>
            </form>
        </div>
        <div class="menu_icons">
            <ul class="icons">
                <li class="item1"><a href="/"></a></li>
                <li class="item2"><a href="/"></a></li>
                <li class="item3"><a href="/"></a></li>
                <li class="item4"><a href="/"></a></li>

            </ul>
        </div>
        <div class="header_logo">
            <div class="contacts">тел./факс 8(38474) 2-04-33</div>
            <div class="sitename">
                <p class="big">Управляющая компания</p>

                <p class="big">“Центр”</p>

                <p>город Мыски</p>
            </div>
            <div class="logo"><a href="/"></a></div>
            <div class="shadow"></div>
        </div>

        <div id="mainmenu">
        {if $razdel_type=='admin'}{include file="admin/menu.tpl"}{else}{include file="menu.tpl"}{/if}
        </div>
    </div>
</div>

<div id="center">
