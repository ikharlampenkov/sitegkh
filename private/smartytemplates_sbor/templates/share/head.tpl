<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="/css/screen_sbor.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="/css/print_sbor.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="/css/ie_sbor.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="/css/main_sbor.css" />
	<link rel="stylesheet" type="text/css" href="/css/form_sbor.css" />
	
        {*<link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/south-street/jquery-ui.css" />*}
		<link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css" />

        <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/main.js"></script>
        <script type="text/javascript" language="javascript" src="/js/common.js"></script>

        {if isset($firstPage) && $firstPage}
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
        {/if}

	<title>Серебряный Бор</title>
</head>

<body>

<div id="overlay">
<div class="container" id="page">

	<div id="header">
	{if $razdel_type=='admin'}{include file="admin/top_menu.tpl"}{/if}

 {if $login}

<span>{$user}</span>&nbsp; <a href="{$siteurl}?logout">Выйти</a>
{else}

<form action="/" method="post" style="width: 50%; text-align: center; margin: 0px auto !important; padding: 5px !important; line-height: 26px ; vertical-align: bottom;">
<input class="inline-block" type="text" name="personal_account" placeholder="Лицевой счет" class="loginfield" />
<input class="inline-block" type="text" name="psw" value="Пароль" placeholder="Пароль" class="loginfield" />
<input class="inline-block" type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px; vertical-align: bottom;" />
</form>
{/if}
	{if $razdel_type=='admin'}{include file="admin/menu.tpl"}{else}{include file="menu.tpl"}{/if}
	<h1 id="logo"><a href="/">Серебряный бор.</a></h1>
	</div><!-- header -->
	
	<!--
	<div id="mainmenu">
	</div>
	-->
	
			<!-- breadcrumbs -->
	
	<div class="container">


<DIV id="content">
    

   