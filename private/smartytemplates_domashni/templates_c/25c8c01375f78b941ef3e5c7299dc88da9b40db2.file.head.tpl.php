<?php /* Smarty version Smarty-3.0.7, created on 2013-07-17 17:07:15
         compiled from "/home/dnevnik/private/smartytemplates_domashni/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73540774151e66cd318ff96-03862055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25c8c01375f78b941ef3e5c7299dc88da9b40db2' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_domashni/templates/share/head.tpl',
      1 => 1374055625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73540774151e66cd318ff96-03862055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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

    <?php if (isset($_smarty_tpl->getVariable('firstPage',null,true,false)->value)&&$_smarty_tpl->getVariable('firstPage')->value){?>
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    <?php }?>

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

    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<body>

<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

<div id="header">
    <div class="center">

        <div class="pasp">
            <div class="logo"><a href="/"></a></div>
            <div class="gerb"></div>
            <div class="phone"></div>
            <div class="city">г.Киселевск</div>
            <div class="account_links">
                <?php if ($_smarty_tpl->getVariable('login')->value){?>
                <span><?php echo $_smarty_tpl->getVariable('user')->value;?>
</span>
                &nbsp;
                <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>
                <?php }else{ ?>
                <a href="/login">вход</a> / 
                <?php }?>
            </div>
        </div>

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