<?php /* Smarty version Smarty-3.0.7, created on 2012-08-28 21:32:16
         compiled from "/home/dnevnik/private/smartytemplates_center/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:483332798503cd67032f935-35926841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5914b0fe93ca9e5ddde6e6ba3ea3cfcd16234dc4' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_center/templates/share/head.tpl',
      1 => 1346164206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '483332798503cd67032f935-35926841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

    <script src="js/scripts.js" type="text/javascript"></script>

    <link href="/css/center.css" rel="stylesheet" type="text/css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

<?php if (isset($_smarty_tpl->getVariable('firstPage',null,true,false)->value)&&$_smarty_tpl->getVariable('firstPage')->value){?>
    <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
<?php }?>

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

<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

<div id="header">
    <div class="header_center">
        <div class="auth">
        <?php if ($_smarty_tpl->getVariable('login')->value){?>

            <span style=""><?php echo $_smarty_tpl->getVariable('user')->value;?>
</span>&nbsp; <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>

            <?php }else{ ?>
            <form action="/" method="post">
                <input type="text" name="personal_account" value="Лицевой счет" onClick="this.value=''" onFocusOut="if(this.value==''){ this.value='Лицевой счет'; }">
                <input type="password" name="psw" value="Пароль" onClick="this.value=''" onFocusOut="if(this.value==''){ this.value='Пароль'; }">
                <input type="submit" name="submit_auth" class="auth_button" value="вход"/>
            </form>
        <?php }?>
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
        <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }else{ ?><?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>
        </div>
    </div>
</div>

<div id="center">
