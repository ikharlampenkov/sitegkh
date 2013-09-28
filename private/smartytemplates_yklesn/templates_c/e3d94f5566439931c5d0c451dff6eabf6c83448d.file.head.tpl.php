<?php /* Smarty version Smarty-3.0.7, created on 2012-11-12 19:04:34
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115444868750a0f3e2707b46-88727516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3d94f5566439931c5d0c451dff6eabf6c83448d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/share/head.tpl',
      1 => 1343808598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115444868750a0f3e2707b46-88727516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link title="Screen" rel="stylesheet" type="text/css" href="/css/yklesn.css" media="all" />
        <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/south-street/jquery-ui.css" />

        <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/main.js"></script>
        <script type="text/javascript" language="javascript" src="/js/common.js"></script>

        <?php if (isset($_smarty_tpl->getVariable('firstPage',null,true,false)->value)&&$_smarty_tpl->getVariable('firstPage')->value){?>
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
        <?php }?>

        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
    </head>
    <body style="width: 100%; height: 100%;">

    <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

    <table>
        <tr>
            <td class="border_left"></td>
            <td class="mainblock">

                <table border="0">
                    <tr>
                        <td style="height: 80px; padding: 0px;">

                            <table style="height: 80px;">
                                <tr>
                                    <td style="text-align: left; vertical-align: middle; padding: 0px;">
                                        <a href="/"><img src="/i_yklesn/logo.jpg" alt="Логотип" style="padding: 0px 0px 0px 50px;" border="0" /></a>
                                    </td>
                                    <td style="text-align: left; vertical-align: middle; padding: 0px;">

                                        <?php if ($_smarty_tpl->getVariable('login')->value){?>

                                            <span style="font-weight: bold;"><?php echo $_smarty_tpl->getVariable('user')->value;?>
</span>&nbsp; <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>

                                        <?php }else{ ?>

                                            <form action="/" method="post" style="margin: 0px; padding: 0px;">
                                                <input type="text" name="personal_account" placeholder="Лицевой счет" class="loginfield" />
                                                <input type="text" name="psw" placeholder="Пароль" class="loginfield" />
                                                <input type="image" src="/i_yklesn/button.jpg" name="" style="width: 77px; height: 26px;" />
                                            </form>
                                        <?php }?>
                                        
                                        
                                    </td>
                                    <td style="vertical-align: middle;">
                                    <b><span style="font-size: 13pt; color: #616161;"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y %H:%M");?>
</span></b>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td style="height: 36px; padding: 0px; margin: 0 auto; text-align: center;">

                    <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }else{ ?><?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

                </td>
            </tr>
            <tr>
                <td style="height: 258px; background-image: url(/i_yklesn/top_banner.jpg); background-repeat: no-repeat;"></td>
            </tr>
            <tr>
                <td style="padding: 0px; ">