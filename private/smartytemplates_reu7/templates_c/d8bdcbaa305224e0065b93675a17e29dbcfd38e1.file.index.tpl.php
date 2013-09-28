<?php /* Smarty version Smarty-3.0.7, created on 2013-04-24 15:06:37
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6411957915177928d098aa0-67996993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8bdcbaa305224e0065b93675a17e29dbcfd38e1' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/index.tpl',
      1 => 1366790795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6411957915177928d098aa0-67996993',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="DEscriptION" content="<?php echo $_smarty_tpl->getVariable('description')->value;?>
" />
    <meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
" />
    <meta name="author-corporate" content="" />
    <meta name="publisher-email" content="" />

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/css.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/humanity/jquery-ui.css"/>

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
<body>
<?php $_template = new Smarty_Internal_Template("error_msg.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td height="200" background="/img/bgshapka.jpg">

        <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>&nbsp;</td>
                <td width="466">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td height="30" class="topmenu">
                                &nbsp;<img src="/img/karta.gif" align="absmiddle"/><img src="/img/mail.gif"
                                                                                        align="absmiddle"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="?page=faq">Вопрос-ответ</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="?page=content_page&title=helpful_information">Полезная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="?page=document">Документы</a>
                            </td>
                        </tr>
                        <tr>
                            <td height="170" width="466" background="/img/podlogo.jpg">
                                <a href="/"><img src="/img/logo.png" border="0"/></a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="195" background="/img/podlogo2.jpg" style="padding-left:60px;" valign="top">
                    <br/>
                    <span style="font-size: 14px">Диспетчерская служба</span><br/>
                    <span style="font-size: 20px; color: #51828e;">36-54-61</span><br/><br/>
                    <span style="font-size: 14px">Аварийная служба</span><br/>
                    <span style="font-size: 20px; color: #51828e;">67-46-40</span><br/>
                </td>
                <td width="159" background="img/vhod.jpg" valign="top" style="padding-left: 15px;" align="right">
                    <br/><br/><br/>
                <?php if (isset($_smarty_tpl->getVariable('login_fail',null,true,false)->value)){?>
                    <div style="color:red; font-weight:bold; font-size:12px;">Вы ввели неправильный логин и пароль!
                    </div><?php }?>

                    <a href="https://www.gkh-kemerovo.ru/portal/ " target="_blank" style="font-size: 14px;">Вход в личный кабинет</a>

                </td>
                <td>&nbsp;</td>
            </tr>
        </table>

    </td>
</tr>
<tr>
    <td>

        <table width="100%" cellpadding="0" cellspacing="0" border="0" class="bgmenu" height="82">
            <tr>
                <td>&nbsp;</td>
                <td width="885" valign="top">

                <?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

                </td>
                <td>&nbsp;</td>
            </tr>
        </table>

    </td>
</tr>
<tr>
    <td height="30px">&nbsp;</td>
</tr>
<tr>
    <td height="400px" style="border-bottom: 1px solid #d3d4ba" valign="top">

        <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>&nbsp;</td>
                <td width="885" valign="top" style="font-size:13px;">

                <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
                <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <?php }else{ ?>

                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>

                            <td width="67%" valign="top">
                                <?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>

                            </td>
                            <td width="200">&nbsp;</td>

                            <td width="32%" valign="top">
                                <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">
                                    Важная информация
                                </div>
                                <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">
                                    &nbsp;</div>

                                <table cellpadding="5" border="0">


                                    <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
                                        <tr>
                                            <td style="color:#aaaaaa"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
 &nbsp;
                                        </tr>
                                        </td>
                                        <tr>
                                        <td class="pem"><b><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</b><br><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>

                                            <?php if ($_smarty_tpl->tpl_vars['news']->value['full_text']){?><br><a
                                                    href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_category_id'];?>
">подробнее...</a><?php }?>
                                        </tr>
                                        </td>



                                    <?php }} ?>
                                </table>

                            </td>
                        </tr>
                    </table>

                <?php }?>

                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <br><br>
    </td>
</tr>
<tr>
    <td style="background-color: #89b4be; height: 289px; border-top: 1px solid white">

        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="height: 289px;">
            <tr>
                <td>&nbsp;</td>
                <td width="604" valign="top">
                    <br/>

                    <div style="color: #fff; font-size: 21px;">Жизненные ситуации</div>

                    <br/>
                <?php  $_smarty_tpl->tpl_vars['faq_t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('faq_title_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['faq_t']->key => $_smarty_tpl->tpl_vars['faq_t']->value){
?>

                    <div><a href="?page=faq&action=view&id=<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['faq_t']->value['is_situation']==1){?>&is_situation=1<?php }?>"
                            style="color: #fff; font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['faq_t']->value['question'];?>
</a></div>
                    <br/>
                <?php }} ?>

                </td>
                <td valign="bottom" style="width: 281px; height: 289px; background-image: url(/img/banner.png); background-repeat: no-repeat; background-position: bottom; font-size: 1px;">
                    <img src="/img/banner_bootom_inner.gif" />
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>

    </td>
</tr>
<tr>
    <td style="height: 100px">

        <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>&nbsp;</td>
                <td width="881" valign="top">
                    <br/>
                    <!--LiveInternet counter-->
                    <script type="text/javascript"><!--
                    document.write("<a href='http://www.liveinternet.ru/click' " +
                            "target=_blank><img src='//counter.yadro.ru/hit?t14.12;r" +
                            escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
                            ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                                    screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                            ";h" + escape(document.title.substring(0, 80)) + ";" + Math.random() +
                            "' alt='' title='LiveInternet: показано число просмотров за 24" +
                            " часа, посетителей за 24 часа и за сегодня' " +
                            "border='0' width='88' height='31'><\/a>")
                    //--></script>
                    <!--/LiveInternet-->
                
                    <!-- Yandex.Metrika informer -->
                    <a href="http://metrika.yandex.ru/stat/?id=9753463&amp;from=informer"
                       target="_blank" rel="nofollow"><img
                            src="//bs.yandex.ru/informer/9753463/3_0_A9D4DEFF_89B4BEFF_0_pageviews"
                            style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                            title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                            onclick="try{Ya.Metrika.informer({i:this,id:9753463,type:0,lang:'ru'});return false}catch(e){}"/></a>
                    <!-- /Yandex.Metrika informer -->

                    <!-- Yandex.Metrika counter -->
                    <div style="display:none;">
                        <script type="text/javascript">
                            (function (w, c) {
                                (w[c] = w[c] || []).push(function () {
                                    try {
                                        w.yaCounter9753463 = new Ya.Metrika({id:9753463, enableAll:true});
                                    }
                                    catch (e) {
                                    }
                                });
                            })(window, "yandex_metrika_callbacks");
                        </script>
                    </div>
                    <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
                    <noscript>
                        <div><img src="//mc.yandex.ru/watch/9753463" style="position:absolute; left:-9999px;" alt=""/>
                        </div>
                    </noscript>
                    <!-- /Yandex.Metrika counter -->
                

                </td>
                <td>&nbsp;</td>
            </tr>
        </table>

    </td>
</tr>
</table>

</body>
</html>