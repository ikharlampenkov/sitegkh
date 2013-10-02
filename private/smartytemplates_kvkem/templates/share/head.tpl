<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/kvkem.css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    {*<script type="text/javascript" language="javascript" src="/js/main.js"></script>*}
    <script type="text/javascript" language="javascript" src="/js/kvkem.js"></script>
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
<div id="wrapper">

{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

    <div id="header">
        <div id="header_top">
            <div class="sitename">
                <a href="/"></a>
            </div>
            <div class="contacts">
                <p>Наши контакты:</p>

                <p>Приемная <b>38-88-80</b></p>
            </div>
            <div class="user_menu">
               {* <a href="/" class="reg">Регистрация</a>
                <a href="/" class="account">Личный кабинет</a>*}

            {if $login}
                <span style="font-weight: bold;">{$user}</span>&nbsp; <a href="{$siteurl}?logout">Выйти</a>
                {else}
{*
                <form action="/" method="post" style="margin: 0px; padding: 0px;">
                    <input type="text" name="personal_account" placeholder="Лицевой счет" class="loginfield"/>
                    <input type="text" name="psw" placeholder="Пароль" class="loginfield"/>
                    <input type="image" src="/i_yklesn/button.jpg" name="" style="width: 77px; height: 26px;"/>
                </form>
            *}
            {/if}

            </div>

        </div>

    {if $razdel_type=='admin'}{include file="admin/menu.tpl"}{else}{include file="menu.tpl"}{/if}



        <div class="clear"></div>
        <div id="head">
            <div class="date_now">{$smarty.now|date_format:"%e %B, %A, %H:%M"}</div>
            <div class="h1">
                {*<h1>На повестке дня</h1> *}
            </div>
            <div class="search">
                <form>
                    <input type="text" name="query" class="search_field" value="Что ищем?" onclick="if(this.value=='Что ищем?'){ this.value=''; }" onfocusout="if(this.value==''){ this.value='Что ищем?'; }"/>
                    <input type="submit" name="submit_search" class="search_button" value="ПОИСК"/>
                </form>

            </div>
        </div>


    </div>


    <div id="content">