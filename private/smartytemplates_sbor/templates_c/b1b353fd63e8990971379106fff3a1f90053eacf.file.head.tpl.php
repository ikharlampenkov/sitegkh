<?php /* Smarty version Smarty-3.0.7, created on 2013-04-22 21:03:48
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89880249851754344a15fa6-87355517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1b353fd63e8990971379106fff3a1f90053eacf' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/share/head.tpl',
      1 => 1343808705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89880249851754344a15fa6-87355517',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
	
		<link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css" />

        <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/main.js"></script>
        <script type="text/javascript" language="javascript" src="/js/common.js"></script>

        <?php if (isset($_smarty_tpl->getVariable('firstPage',null,true,false)->value)&&$_smarty_tpl->getVariable('firstPage')->value){?>
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
        <?php }?>

	<title>Серебряный Бор</title>
</head>

<body>

<div id="overlay">
<div class="container" id="page">

	<div id="header">
	<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

 <?php if ($_smarty_tpl->getVariable('login')->value){?>

<span><?php echo $_smarty_tpl->getVariable('user')->value;?>
</span>&nbsp; <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>
<?php }else{ ?>

<form action="/" method="post" style="width: 50%; text-align: center; margin: 0px auto !important; padding: 5px !important; line-height: 26px ; vertical-align: bottom;">
<input class="inline-block" type="text" name="personal_account" placeholder="Лицевой счет" class="loginfield" />
<input class="inline-block" type="text" name="psw" value="Пароль" placeholder="Пароль" class="loginfield" />
<input class="inline-block" type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px; vertical-align: bottom;" />
</form>
<?php }?>
	<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }else{ ?><?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
	<h1 id="logo"><a href="/">Серебряный бор.</a></h1>
	</div><!-- header -->
	
	<!--
	<div id="mainmenu">
	</div>
	-->
	
			<!-- breadcrumbs -->
	
	<div class="container">


<DIV id="content">
    

   