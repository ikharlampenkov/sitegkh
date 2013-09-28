<?php /* Smarty version Smarty-3.0.7, created on 2013-01-19 17:08:19
         compiled from "/home/dnevnik/private/smartytemplates_zles/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60605297450fa7ea3dc3ec7-75630544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ea79cac83719a65482ab1df9e557ad52c474b4' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_zles/templates/share/head.tpl',
      1 => 1358593695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60605297450fa7ea3dc3ec7-75630544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
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

<?php if (isset($_smarty_tpl->getVariable('firstPage',null,true,false)->value)&&$_smarty_tpl->getVariable('firstPage')->value){?>
    <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
<?php }?>

    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

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
            <span class="date"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
</span>
        </div>

        <div id="login">
        <?php if ($_smarty_tpl->getVariable('login')->value){?>
            <div class="title"><?php echo $_smarty_tpl->getVariable('user')->value;?>
 <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout" style="color: #ffffff;">Выйти</a></div>
            <?php }else{ ?>
            <form action="/" method="post">
                <div class="title">Личный кабинет</div>
                <input type="text" name="personal_account" class="login_field" id="login_fields" placeholder="Лицевой счет"/>
                <input type="password" name="psw" class="pass_field" id="login_fields" placeholder="Пароль"/>
                <input type="submit" name="submit_login" class="login_button" value="ВХОД"/>
                <span class="reg_link"><a href="/">Регистрация</a></span>
            </form>
        <?php }?>
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

    <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?>
        <?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <?php }else{ ?>
        <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <?php }?>

    </div>
</div>

<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?>
<div style="margin: 0 auto;"><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></div>
<?php }?>

<div class="content">
