<?php /* Smarty version Smarty-3.0.7, created on 2012-11-15 11:32:46
         compiled from "/home/dnevnik/private/smartytemplates_kvkem/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20554062350a47e7e3dc7d5-55144710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e3ce5d18ca47f15eb9a57c320e4c83f8877fdd' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_kvkem/templates/share/head.tpl',
      1 => 1352957562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20554062350a47e7e3dc7d5-55144710',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/kvkem.css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/kvkem.js"></script>
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
<div id="wrapper">

<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

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

            <?php if ($_smarty_tpl->getVariable('login')->value){?>
                <span style="font-weight: bold;"><?php echo $_smarty_tpl->getVariable('user')->value;?>
</span>&nbsp; <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>
                <?php }else{ ?>
            <?php }?>

            </div>

        </div>

    <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }else{ ?><?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>



        <div class="clear"></div>
        <div id="head">
            <div class="date_now"><?php echo smarty_modifier_date_format(time(),"%e %B, %A, %H:%M");?>
</div>
            <div class="h1">
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