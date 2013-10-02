<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="DEscriptION" content="{$description}" />
    <meta name="keywords" content="{$keywords}" />
    <meta name="author-corporate" content="" />
    <meta name="publisher-email" content="" />

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/css.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/humanity/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

{if isset($firstPage) && $firstPage}
    <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
{/if}


    <title>{$title}</title>

</head>
<body>
{include file="error_msg.tpl"}

<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td height="200" background="/i_reu7/bgshapka.jpg">

        <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>&nbsp;</td>
                <td width="466">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td height="30" class="topmenu">
                                &nbsp;<img src="/i_reu7/karta.gif" align="absmiddle"/><img src="/i_reu7/mail.gif"
                                                                                        align="absmiddle"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="?page=faq">Вопрос-ответ</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="?page=content_page&title=helpful_information">Полезная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="?page=document">Документы</a>
                            </td>
                        </tr>
                        <tr>
                            <td height="170" width="466" background="/i_reu7/podlogo.jpg">
                                <a href="/"><img src="/i_reu7/logo.png" border="0"/></a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="195" background="/i_reu7/podlogo2.jpg" style="padding-left:60px;" valign="top">
                    <br/>
                    <span style="font-size: 14px">Диспетчерская служба</span><br/>
                    <span style="font-size: 20px; color: #51828e;">36-54-61</span><br/><br/>
                    <span style="font-size: 14px">Аварийная служба</span><br/>
                    <span style="font-size: 20px; color: #51828e;">67-46-40</span><br/>
                    {*<span style="font-size: 12px; color: #51828e;">круглосуточно</span>*}
                </td>
                <td width="159" background="i_reu7/vhod.jpg" valign="top" style="padding-left: 15px;" align="right">
                    <br/><br/><br/>
                {if isset($login_fail)}
                    <div style="color:red; font-weight:bold; font-size:12px;">Вы ввели неправильный логин и пароль!
                    </div>{/if}
{*
                    <form method="post" style="margin:0px; padding:0px;">
                    {*<span style="width:70px">Лицевой счет: </span>
                        <input type="text" name="personal_account" value="Лицевой счет"
                               style="font-size: 16px; width: 150px; color:#999999;"
                               onfocus="if (this.value == this.defaultValue) this.value = '';"
                               onmouseout="if (this.value == '') this.value = 'Лицевой счет';"/>
                        <br/><br/>
                    {*<span style="width:70px">Пароль: </span>
                        <input type="password" name="psw" value="Пароль"
                               style="font-size: 16px; width: 150px; color:#999999;"
                               onfocus="if (this.value == this.defaultValue) this.value = '';"
                               onmouseout="if (this.value == '') this.value = 'Пароль';"/>

                        <div><input type="submit" value="Войти" style="width:70px;"></div>
                    </form>
                    *}

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

                {include file="menu.tpl"}

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

                {if isset($page) && !empty($page)}
                {include file="$page.tpl"}
                    {else}

                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>

                            <td width="67%" valign="top">
                                {$conpage_first.content}
                            </td>

                        {*

                                    <td width="32%" valign="top">
                                        <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Личный кабинет жильца</div>
                                        <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
                                        <table cellpadding="5" border="0" width="100%">
                                        <tr><td><i_reu7 src="/i_reu7/1.gif"></td><td class="pem">Посмотреть распечатку платежей</td></tr>
                                        <tr><td><i_reu7 src="/i_reu7/2.gif"></td><td class="pom">Посмотреть баланс платежей</td></tr>
                                        <tr><td><img src="/i_reu7/4.gif"></td><td class="pem">Передать показания счетчиков</td></tr>
                                        <tr><td><img src="/i_reu7/5.gif"></td><td class="pom">Подать заявку на вызов мастера</td></tr>
                                        <tr><td><img src="/i_reu7/6.gif"></td><td class="pem">Задать вопрос управлению</td></tr>
                                        <tr><td><img src="/i_reu7/3.gif"></td><td class="pom">Оплатить услуги</td></tr>
                                        <tr><td><img src="/i_reu7/6.gif"></td><td class="pem">Посмотреть текущие работы по дому</td></tr>
                                        </table>
                                        <br>
                                        <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Как получить доступ?</div>
                                        <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
                                        <div style="font-weight: bold; text-align:center">Три простых шага:</div>
                                        <table cellpadding="5" border="0" width="100%">
                                        <tr><td>1</td><td class="pem">Прийти в РЭУ с паспортом<br><span style="color:#aaaaaa">(можно при оплате)</td></tr>
                                        <tr><td>2<td class="pom">Подписать согласие на доступ к личному кабинету (3 мин.). Получить пароль.</td></tr>
                                        <tr><td>3<td class="pem">Войти в личный кабинет.</td></tr>
                                        </table><br>
                                        <div style="text-align:center">Все справки по работе с личным кабинетом по телефону: 67-07-37</div>
                                    </td>
                                    <td width="200">&nbsp;</td>

                                    <td width="32%" valign="top">
                                        <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Раскрытие информации</div>
                                        <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

                                        <table cellpadding="5" border="0">
                                            <tr><td class="pem"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></td>

                                            <tr><td style="color:#aaaaaa">Финансово-хозяйственная деятельность</td></tr>
                                            <tr><td class="pem"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports">Бухгалтерская отчетность</a></td></tr>
                                            <tr><td class="pem"><a title="Доходы" href="?page=content_page&title=income&spage=reports">Отчет о прибылях и убытках</a></td></tr>

                                            <tr><td style="color:#aaaaaa">Информация об услугах, работах по содержанию и ремонту</li>
                                            <tr><td class="pem"><a title="По содержанию дома" href="?page=content_page&title=keep_the_house&spage=service">Базовые услуги</a></td></tr>
                                            <tr><td class="pem"><a title="Электротехнические" href="?page=content_page&title=platnie&spage=about">Платные</a></td></tr>

                                            <tr><td style="color:#aaaaaa">Порядок и условия оказания услуг по содержание и ремонт</li>
                                            <tr><td class="pem"><a title="Договор" href="?page=content_page&title=dogovor&spage=about">Договор управления МКД</a></td></tr>
                                            <tr><td class="pem"><a title="План работ по содержанию и ремонту" href="?page=content_page&title=reports_kap_remont&spage=reports">План работ по содержанию и ремонту</a></td></tr>
                                            <tr><td class="pem"><a title="Меры по снижению расходов на работу" href="?page=content_page&title=meri_rashod&spage=about">Меры по снижению расходов на работу</a></td></tr>
                                            <tr><td class="pem"><a title="Нарушения" href="?page=content_page&title=narusheni&spage=about">Нарушения</td></tr>
                                            <tr><td class="pem"><a title="Соответствие качеству" href="?page=content_page&title=kachthestvo&spage=about">Соответствие качеству</td></tr>

                                            <tr><td style="color:#aaaaaa">Содержание, периодичность, результат, стоимость работ по содержанию и ремонту</td></tr>
                                            <tr><td class="pem"><a title="Тарифы на коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Тарифы на коммунальные ресурсы</a></td></tr>

                                            <tr><td class="pem"><a title="Случаи привлечения к ответственности" href="?page=content_page&title=otvetstv&spage=about">Случаи привлечения к ответственности</a></td></tr>

                                        </table>
                                    </td>
                        *}
                            <td width="200">&nbsp;</td>

                            <td width="32%" valign="top">
                                <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">
                                    Важная информация
                                </div>
                                <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">
                                    &nbsp;</div>

                                <table cellpadding="5" border="0">


                                    {foreach from=$news_list item=news}
                                        <tr>
                                            <td style="color:#aaaaaa">{$news.date|date_format:"%d.%m.%Y"} &nbsp;
                                        </tr>
                                        </td>
                                        <tr>
                                        <td class="pem"><b>{$news.title}</b><br>{$news.short_text}
                                            {if $news.full_text}<br><a
                                                    href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}">подробнее...</a>{/if}
                                        </tr>
                                        </td>



                                    {/foreach}
                                </table>

                            </td>
                        </tr>
                    </table>

                {/if}

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
                {foreach from=$faq_title_list item=faq_t}

                    <div><a href="?page=faq&action=view&id={$faq_t.id}{if $faq_t.is_situation==1}&is_situation=1{/if}"
                            style="color: #fff; font-size: 16px;">{$faq_t.question}</a></div>
                    <br/>
                {/foreach}

                </td>
                <td valign="bottom" style="width: 281px; height: 289px; background-image: url(/i_reu7/banner.png); background-repeat: no-repeat; background-position: bottom; font-size: 1px;">
                    <img src="/i_reu7/banner_bootom_inner.gif" />
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
                {literal}
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
                {/literal}

                </td>
                <td>&nbsp;</td>
            </tr>
        </table>

    </td>
</tr>
</table>

</body>
</html>