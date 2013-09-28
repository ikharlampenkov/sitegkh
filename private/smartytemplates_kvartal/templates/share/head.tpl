<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/main.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>

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
<body>

{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

<table>
    <tr>
        <td style="padding: 0px;">
            {include file="border.tpl"}
        </td>
        <td class="mainblock">

            <table>
                <tr>
                    <td style="height: 51px; text-align: center; vertical-align: middle;">
                        {if $login}
                            <span>{$user}</span>
                            &nbsp;
                            <a href="{$siteurl}?logout">Выйти</a>
                        {else}
                            <form action="/" method="post" style="margin:0px; padding:0px;">
                                <input type="text" name="personal_account" placeholder="Лицевой счет" class="loginfield"/>
                                <input type="text" name="psw" placeholder="Пароль" class="loginfield"/>
                                <input type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px;"/>
                            </form>
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td style="height: 138px; padding: 0px;">

                        <table border="0">
                            <tr>
                                <td></td>
                                <td style="width: 650px;">
                                    {if $razdel_type=='admin'}
                                        {include file="admin/menu.tpl"}
                                    {else}
                                        {include file="menu.tpl"}
                                    {/if}
                                </td>
                                <td style="width: 226px; text-align: center; vertical-align: top;">{*<img src="i/gerbko.jpg" alt="" />*}</td>
                            </tr>
                        </table>


                    </td>
                </tr>
                <tr>
                    <td style="height: 346px; padding: 0px;">

                        <table>
                            <tr>
                                <td class="imgl">
                                    <div class="imgl_block">
                                        <div class="rzdtitle_mini">На заметку</div>
                                        <div class="imgl_link_block">
                                            {*<a href="?page=faq" class="imgl">Вопрос-ответ</a><br/>
                                            <a href="?page=content_page&title=helpful_information" class="imgl">Полезная информация</a><br/>*}
                                            <a href="?page=document" class="imgl">Документы</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="imgc">

                                    <table style="width: 368px; height: 346px;">
                                        <tr>
                                            <td colspan="3" style="width: 368px; height: 15px; background-image: url(/i/verh.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 14px; height: 261px; background: url(/i/left.jpg) no-repeat bottom; padding: 0px;"></td>
                                            <td style="width: 340px; height: 261px; padding: 0px; vertical-align: middle;">
                                                {*<img src="/i/yk_molod.png" alt="{$title}"/>*}
                                            </td>
                                            <td style="width: 14px; height: 261px; background: url(/i/right.jpg) no-repeat bottom; padding: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="width: 368px; height: 69px; background: url(/i/niz.jpg) no-repeat bottom; padding: 0px;"></td>
                                        </tr>
                                    </table>

                                </td>
                                <td class="imgr">
                                    <div class="imgr_block">
                                        <div class="rzdtitle_mini">Звоните</div>
                                        <div class="imgr_link_block">
                                            {foreach from=$phones_mp_list item=phones_mp}
                                                <span class="imgr_title">{$phones_mp.title}</span>
                                                <br/>
                                                <span class="imgr_text">({$phones_mp.phone_code}) {$phones_mp.phone}</span>
                                                <br/>
                                                <span class="imgr_text">{$phones_mp.comment}</span>
                                                <br/>
                                            {/foreach}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px;">