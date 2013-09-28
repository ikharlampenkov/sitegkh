<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name='yandex-verification' content='7d827555348cbe14'/>

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/reu10.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/smoothness/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/highslide/highslide.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/reu10.js"></script>

    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

    {if isset($firstPage) && $firstPage}
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    {/if}

    <title>{$title}</title>
</head>


<body>
{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

<div id="mainLayout">
    <table id="mainTable">
        <tr>
            <td class="leftShadow"></td>
            <td id="topRow">
                <div id="header">
                    <div id="logo">
                        <a href="/"></a>
                    </div>
                    <div id="headImage"></div>
                    <div class="clear"></div>
                </div>
                <div id="topMenu">
                    <div id="clock">
                        {$smarty.now|date_format:"%d.%m, %a"} <span>{$smarty.now|date_format:"%H:%M:%S"}</span>
                    </div>
                    <div id="topMenuItems">
                        <div>
                            {if $razdel_type=='admin'}
                                {include file="admin/menu.tpl"}
                            {else}
                                {include file="menu.tpl"}
                            {/if}
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </td>
            <td class="rightShadow"></td>
        </tr>