<?php /* Smarty version Smarty-3.0.7, created on 2013-09-03 16:37:22
         compiled from "/home/dnevnik/private/smartytemplates_reu10/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9162882385225add210bd03-96010027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b516d963a837fa2b344e90d8d8c62adec4fc3b88' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu10/templates/share/head.tpl',
      1 => 1378201036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9162882385225add210bd03-96010027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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

    <?php if (isset($_smarty_tpl->getVariable('firstPage',null,true,false)->value)&&$_smarty_tpl->getVariable('firstPage')->value){?>
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    <?php }?>

    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
</head>


<body>
<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

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
                        <?php echo smarty_modifier_date_format(time(),"%d.%m, %a");?>
 <span><?php echo smarty_modifier_date_format(time(),"%H:%M:%S");?>
</span>
                    </div>
                    <div id="topMenuItems">
                        <div>
                            <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?>
                                <?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }else{ ?>
                                <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }?>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </td>
            <td class="rightShadow"></td>
        </tr>