<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/yklesn.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/south-street/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

    {if isset($firstPage) && $firstPage}
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    {/if}

    <title>{$title}</title>
</head>
<body style="width: 100%; height: 100%;">

{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

<table>
    <tr>
        <td class="border_left"></td>
        <td class="mainblock">

            <table border="0">
                <tr>
                    <td style="height: 80px; padding: 0;">

                        <table style="height: 80px;">
                            <tr>
                                <td style="text-align: left; vertical-align: middle; padding: 0;">
                                    <a href="/"><img src="/i_yklesn/logo.jpg" alt="Логотип" style="padding: 0 0 0 50px;" border="0"/></a>
                                </td>
                                <td style="text-align: left; vertical-align: middle; padding: 0;">

                                    {if $login}
                                        <span style="font-weight: bold;">{$user}</span>
                                        &nbsp;
                                        <a href="{$siteurl}?logout">Выйти</a>
                                    {else}
                                        <form action="/" method="post" style="margin: 0; padding: 0;">
                                            <input type="text" name="personal_account" placeholder="Лицевой счет" class="loginfield"/>
                                            <input type="text" name="psw" placeholder="Пароль" class="loginfield"/>
                                            <input type="image" src="/i_yklesn/button.jpg" name="" style="width: 77px; height: 26px;"/>
                                        </form>
                                    {/if}


                                </td>
                                <td style="vertical-align: middle;">
                                    <b><span style="font-size: 13pt; color: #616161;">{$smarty.now|date_format:"%d.%m.%Y %H:%M"}</span></b>
                                    <div class="site-mode">
                                        <a href="?mode={if $currentSiteMode == 'normal'}special{else}normal{/if}">{if $currentSiteMode == 'normal'}Версия для слабовидящих{else}Обычная версия{/if}</a>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td style="height: 36px; padding: 0; margin: 0 auto; text-align: center;">

                        {if $razdel_type=='admin'}{include file="admin/menu.tpl"}{else}{include file="menu.tpl"}{/if}

                    </td>
                </tr>
                <tr>
                    <td style="height: 258px; background-image: url(/i_yklesn/top_banner.jpg); background-repeat: no-repeat;"></td>
                </tr>
                <tr>
                    <td style="padding: 0; ">