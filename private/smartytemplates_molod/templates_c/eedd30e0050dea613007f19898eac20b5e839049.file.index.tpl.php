<?php /* Smarty version Smarty-3.0.7, created on 2011-09-22 12:17:47
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/cabinet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5331690764e7ac4fb80b969-36787521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eedd30e0050dea613007f19898eac20b5e839049' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/cabinet/index.tpl',
      1 => 1315819949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5331690764e7ac4fb80b969-36787521',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"></meta>
        <meta name="DESCRIPTION" content="<?php echo $_smarty_tpl->getVariable('description')->value;?>
"></meta>
        <meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
"></meta>
        <meta name="author-corporate" content=""></meta>
        <meta name="publisher-email" content=""></meta>

        <link title="Screen" rel="stylesheet" type="text/css" href="/css/css.css" media="all"</link>

        <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/js/main.js" ></script>
        <script type="text/javascript" language="javascript" src="/js/common.js"></script>

        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 Личный кабинет</title>

        <style type="text/css">
            table {
    width: 100%;
}

            tr {
   vertical-align: top;
}

            input {
    width: 100%;
}

            textarea {
    width: 100%;
    height: 200px;
}

            #save {
    width: 100px;
}

        </style>

    </head>
    <body>
<?php $_template = new Smarty_Internal_Template("error_msg.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>


        <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td height="200" background="/img/bgshapka.jpg">

                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="466">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td height="30" class="topmenu">
                                            &nbsp;<img src="/img/karta.gif" align="absmiddle" /><img src="/img/mail.gif" align="absmiddle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="?page=faq">Вопрос-ответ</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="?page=content_page&title=helpful_information">Полезная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="?page=document">Документы</a>
                                        </td>
                                    </tr>
                                    <tr><td height="170" width="466"><img src="/img/podlogo.jpg" /></td></tr>
                                </table>
                            </td>
                            <td width="195" background="/img/podlogo2.jpg" style="padding-left:60px;" valign="top">
                                <br/>
                                <span style="font-size: 14px">Справочная служба</span><br/>
                                <span style="font-size: 20px; color: #51828e;">36-54-61</span><br/><br/>
                                <span style="font-size: 14px">Аварийная служб</span><br/>
                                <span style="font-size: 20px; color: #51828e;">36-66-8</span><br/>
                                <span style="font-size: 12px; color: #51828e;">круглосуточн</span>
                            </td>
                            <td width="159" background="img/vhod.jpg" valign="top" style="padding-left: 15px;" align="right">
                                <br/><br/><br/>

                                <div><?php echo $_smarty_tpl->getVariable('user')->value;?>
</div> <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>                             

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

                                <div class="panel">
                                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"  background="/img/bgleft.jpg" >
                                        <tr>
                                            <td><img src="/img/left.jpg" /></td>
                                            <td width="750">
                                                <ul>
                                                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmM" title="Главная" href="/">Главная</a></li>
                                                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmC" title="О нас" href="?page=content_page&title=about&spage=about">О нас</a></li>
                                                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmS" title="Услуги" href="?page=content_page&title=service&spage=service">Услуги</a></li>
                                                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='rates'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmL" title="Тарифы" href="?page=content_page&title=rates&spage=rates">Тарифы</a></li>
                                                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmCON" title="Новости" href="?page=news&spage=news">Новости</a</li>
                                                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tma" title="Ваш дом" href="?page=house&spage=house">Ваш дом</a></li>
                                                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmO" title="Отчеты" href="?page=content_page&title=reports&spage=reports">Отчеты</a></li>
                                                </ul>
                                            </td>
                                            <td align="right"><img src="img/right.jpg" /></td>
                                        </tr>
                                    </table>
                                </div>

                                <div style="text-align:center">
                                    <ul class="sub">
                                        <?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='disclosure_of_information'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Раскрытие информации" href="?page=content_page&title=disclosure_of_information">Раскрытие информации</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='cabinet'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Личный кабинет" href="?page=content_page&title=cabinet">Личный кабинет</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='faq'&&isset($_smarty_tpl->getVariable('is_situation',null,true,false)->value)&&$_smarty_tpl->getVariable('is_situation')->value==1){?>active<?php }else{ ?>noactive<?php }?>"><a title="Жизненные ситуации" href="?page=faq&is_situation=1">Жизненные ситуации</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='news'&&isset($_smarty_tpl->getVariable('is_important',null,true,false)->value)&&$_smarty_tpl->getVariable('is_important')->value==1){?>active<?php }else{ ?>noactive<?php }?>"><a title="Важная информация" href="?page=news&is_important=1">Важная информация</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='general_information'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='license'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Лицензии" href="?page=license&spage=about">Достижения</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='leaders'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Коллектив" href="?page=content_page&title=leaders&spage=about">Коллектив</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='passport_office'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Паспортный стол" href="?page=content_page&title=passport_office&spage=about">Паспортный стол</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='vacancy'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Вакансии" href="?page=vacancy&spage=about">Вакансии</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='contact'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Контакты" href="?page=content_page&title=contact&spage=about">Контакты</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='eltechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Электротехнические работы" href="?page=content_page&title=eltechrab&spage=service">Электротехнические работы</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='santechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Сантехнические работы" href="?page=content_page&title=santechrab&spage=service">Сантехнические работы</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='keep_the_house'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Содержание дома" href="?page=content_page&title=keep_the_house&spage=service">Содержание дома</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='where_to_pay'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Где оплатить?" href="?page=content_page&title=where_to_pay&spage=service">Где оплатить?</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('spage')->value=='rates'){?>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='gkh'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Жилищно-коммунальные услуги" href="?page=content_page&title=gkh&spage=rates">Жилищно-коммунальные услуги</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='communal_resources'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Коммунальные ресурсы</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='distributor'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Поставщики" href="?page=content_page&title=distributor&spage=rates">Поставщики</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='where_to_pay'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Где оплатить?" href="?page=content_page&title=where_to_pay&spage=rates">Где оплатить?</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>
                                        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='1'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='2'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отключения" href="?page=news&category=2&spage=news" >Отключения</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='3'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Подключения" href="?page=news&category=3&spage=news" >Подключения</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='4'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Согласования" href="?page=news&category=4&spage=news" >Согласования</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='5'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Законодательство" href="?page=news&category=5&spage=news" >Законодательство</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>
                                        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Обслуживаемые дома" href="?page=house&category=all&spage=house">Обслуживаемые дома</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='plan'){?>active<?php }else{ ?>noactive<?php }?>"><a title="План проводимых работ" href="?page=house&category=plan&spage=house">План проводимых работ</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='financial_statements'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports">Бухгалтерская отчетность</a></li>
                                        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='income'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отчет о прибылях и убытка" href="?page=content_page&title=income&spage=reports">Отчет о прибылях и убытка</a></li>
                                        <?php }?>
                                    </ul>
                                </div>

                                <script type="text/javascript">
                                var submenus = [ {  id:"tmM",subs:[  {  "t":"Раскрытие информации","u":"?page=content_page&title=disclosure_of_information" } , { "t":"Личный кабинет","u":"?page=content_page&title=cabinet" } , { "t":"Жизненные ситуации","u":"?page=faq&is_situation=1" } , { "t":"Важная информация","u":"?page=content_page&title=important_information" } ] } ,
                                                 { id:"tmC",subs:[ { "t":"Общая информация","u":"?page=content_page&title=general_information&spage=about" } , { "t":"Достижения","u":"?page=license&spage=about" } , { "t":"Коллектив","u":"?page=content_page&title=leaders&spage=about" } , { "t":"Паспортный стол","u":"?page=content_page&title=passport_office&spage=about" } , { "t":"Вакансии","u":"?page=vacancy&spage=about" } , { "t":"Контакты","u":"?page=content_page&title=contact&spage=about" } ] } , 
                                                 { id:"tmS",subs:[ { "t":"Электротехнические работы","u":"?page=content_page&title=eltechrab&spage=service" } , { "t":"Сантехнические работы","u":"?page=content_page&title=santechrab&spage=service" } , { "t":"Содержание дома","u":"?page=content_page&title=keep_the_house&spage=service" } , { "t":"Где оплатить?","u":"?page=content_page&title=where_to_pay&spage=service" } ] } , 
                                                 { id:"tmL",subs:[ { "t":"Жилищно-коммунальные услуги","u":"?page=content_page&title=gkh&spage=rates" } , { "t":"Коммунальные ресурсы","u":"?page=content_page&title=communal_resources&spage=rates" } , { "t":"Поставщики","u":"?page=content_page&title=distributor&spage=rates" } , { "t":"Где оплатить?","u":"?page=content_page&title=where_to_pay&spage=rates" } ] } , 
                                                 { id:"tmCON",subs:[ { "t":"Объявления","u":"?page=news&category=1&spage=news" } , { "t":"Отключения","u":"?page=news&category=2&spage=news" } , { "t":"Подключения","u":"?page=news&category=3&spage=news" } , { "t":"Согласования","u":"?page=news&category=4&spage=news" } , { "t":"Законодательство","u":"?page=news&category=5&spage=news" } ] } , 
                                                 { id:"tma",subs:[ { "t":"Обслуживаемые дома","u":"?page=house&category=all&spage=house" } , { "t":"План проводимых работ","u":"?page=house&category=plan&spage=house" } ] } , 
                                                 { id:"tmO",subs:[ { "t":"Бухгалтерская отчетность","u":"?page=content_page&title=financial_statements&spage=reports" } , { "t":"Отчет о прибылях и убытка","u":"?page=content_page&title=income&spage=reports" } ] } ];
                                </script>
                                
                                </div>

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
                            <td width="885" valign="top">

                                <table border="0" width="100">
                                    <tr>
                                        <td width="230" style="font-size: 16px;">

                                            <a href="?page=receipt">Счет-фактура</a><br /><br />
                                            <a href="?page=balance">Баланс платежей</a><br /><br />
                                            <a href="?page=meters">Показания счетчиков</a><br /><br />
                                            <a href="?page=support&category=request_master">Заявка на вызов мастера</a><br /><br />
                                            <a href="?page=support&category=question">Задать вопрос</a><br /><br />
                                            <a href="?page=payment">Оплата услуг</a><br /><br />
                                            <a href="?page=content_page&title=kap_remont">Журнал проводимых работ</a></li>
                                        </td>
                                        <td style="font-size: 14px;">

                    <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
                        <?php $_template = new Smarty_Internal_Template("cabinet/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>                        
                    <?php }?>

                                        </td>
                                    </tr>
                                </table>

                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td style="background-color: #89b4be; height: 300px; border-top: 1px solid white">

                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="604" valign="top">
                                <br/>
                                <div style="color: #fff; font-size: 21px;">Жизненные ситуации</div>
                            </td>
                            <td width="281" valign="bottom"><img src="/img/banner.gif" /></td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td style="height: 100px">&nbsp;</td>
            </tr>
        </table>

    </body>
</html>