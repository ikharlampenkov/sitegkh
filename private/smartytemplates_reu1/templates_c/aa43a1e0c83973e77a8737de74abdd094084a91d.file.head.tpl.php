<?php /* Smarty version Smarty-3.0.7, created on 2013-09-27 10:41:13
         compiled from "/home/s/sibdnevnik/sitegkh/private/../private/smartytemplates_reu1/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2885273952452889c25261-82857402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa43a1e0c83973e77a8737de74abdd094084a91d' => 
    array (
      0 => '/home/s/sibdnevnik/sitegkh/private/../private/smartytemplates_reu1/templates/share/head.tpl',
      1 => 1380213831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2885273952452889c25261-82857402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/plus.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/coin-slider-styles.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/coin-slider.min.js"></script>

    <script type="text/javascript" language="javascript" src="/js/plus.js"></script>
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

<body>

<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

<div class="header_top">
    <div class="center">
        <div class="account_links">
            <?php if ($_smarty_tpl->getVariable('login')->value){?>
                <span><?php echo $_smarty_tpl->getVariable('user')->value;?>
</span>
                &nbsp;
                <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>
            <?php }else{ ?>
                <a href="/login">вход</a>
            <?php }?>
        </div>

        <div class="search">
            <form>
                <input type="text" name="query" class="search_field" value=""/>
                <input type="submit" name="submit_search" class="search_button" value=""/>
            </form>
        </div>


    </div>
</div>

<div id="<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>header<?php }else{ ?>header_main<?php }?>">
    <div class="center">
        <div id="mainmenu">

            <div class="menu">
                <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?>
                    <?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                <?php }else{ ?>
                    <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                <?php }?>
            </div>

        </div>
        <div class="pasp">
            <div class="logo"><a href="/" style="background-image: url(/i_plus/reu1.png);"></a></div>
            <div class="gerb"></div>
            <div class="phone"></div>
            <div class="city">г.Киселевск</div>
        </div>

        <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
            <div class="pathway">
                <a href="/" class="main"></a>
            </div>
        <?php }else{ ?>
            <div class="slider">
                <div id="slider">

                    <a href="/"> <img src="/i_plus/header_img1.png" data-thumb="/i_plus/header_img1.png" alt=""/></a>
                    <a href="/"> <img src="/i_plus/header_img2.png" data-thumb="/i_plus/header_img2.png" alt=""/></a>
                    <a href="/"> <img src="/i_plus/header_img3.png" data-thumb="/i_plus/header_img3.png" alt=""/></a>


                </div>
            </div>
        <?php }?>

        <div class="shadow_header"></div>
    </div>
</div>