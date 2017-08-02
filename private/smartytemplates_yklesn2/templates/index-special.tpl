<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/yklesn-special.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/south-street/jquery-ui.css"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/css/blind.css" media="all"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/blind.js"></script>
    <script type="text/javascript" language="javascript" src="/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

    {if isset($firstPage) && $firstPage}
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    {/if}

    <title>{$title}</title>
</head>
<body class="{$currentSiteFontSize} {$currentSiteColor}" style="width: 100%; height: 100%;">

<table>
    <tr>
        <td class="border_left"></td>
        <td class="mainblock">

            <div class="site-mode-panel">
                <div class="site-color-change">Цвет сайта:
                    <a href="#" class="white">A</a>
                    <a href="#" class="black">A</a>
                </div>

                <div class="site-font-resize">Размер шрифта:
                    <a href="#" class="small">A</a>
                    <a href="#" class="medium">A</a>
                    <a href="#" class="large">A</a>
                </div>

                <div class="site-mode-change">
                    <a href="?mode={if $currentSiteMode == 'normal'}special{else}normal{/if}">{if $currentSiteMode == 'normal'}Версия для слабовидящих{else}Обычная версия{/if}</a>
                </div>
            </div>

            <table border="0">
                <tr>
                    <td style="height: 80px; padding: 0px;">

                        <table style="height: 80px;">
                            <tr>
                                <td style="text-align: left; vertical-align: middle; padding: 0px;">
                                    <a href="/"><img src="/i_yklesn/logo-ooo-lesnay.jpg" alt="Логотип" style="padding: 0px 0px 0px 50px;" border="0"/></a>
                                </td>
                                <td style="text-align: left; vertical-align: middle; padding: 0px;">

                                    {if $login}
                                        <span style="font-weight: bold;">{$user}</span>
                                        &nbsp;
                                        <a href="{$siteurl}?logout">Выйти</a>
                                    {else}
                                        <form action="/" method="post" style="margin: 0; padding: 0;">
                                            <input type="text" name="personal_account" placeholder="Лицевой счет" class="loginfield"/>
                                            <input type="text" name="psw" placeholder="Пароль" class="loginfield"/>
                                            <input type="submit" name="" value="Войти" style="width: 77px; height: 26px;"/>
                                        </form>
                                    {/if}


                                </td>
                                <td style="vertical-align: middle;">
                                    <b><span>{$smarty.now|date_format:"%d.%m.%Y %H:%M"}</span></b>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td style="height: 36px; padding: 0; margin: 0 auto; text-align: center;">

                        {if $razdel_type=='admin'}{include file="admin/menu.tpl"}{else}{include file="menu.tpl"}{/if}

                    </td>
                </tr>
                <tr>
                    <td style="padding: 0; ">

                        {if isset($page) && !empty($page)}
                        <div style="padding: 20px 50px 0 50px; width:900px; height: 100%; min-height: 500px; margin: 0 auto;">
                            {include file="$page.tpl"}
                        </div>
                        {else}

                        <table style="width: 900px; height: 100%; margin: 0 auto;">
                            <tr>
                                <td style="width: 40%">
                                    <div class="inner_block">

                                        <div class="rzdtitle">Новости</div>
                                        <br/>
                                        <table>
                                            <tr>
                                                <td>
                                                    {foreach from=$news_list item=news}
                                                        <div class="news_date">{$news.date|date_format:"%d.%m.%Y"} </div>
                                                        <div class="news_title">{$news.title}</div>
                                                        {if $news.full_text}
                                                            <a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}"
                                                               class="news_text_link">{$news.short_text}</a>
                                                        {else}
                                                            <div class="news_text_link">{$news.short_text}</div>
                                                        {/if}
                                                        <br/>
                                                    {/foreach}
                                                </td>
                                            </tr>
                                        </table>
                                        <br/>

                                        <div class="rzdtitle">Полезные ссылки</div>

                                        <table cellspacing="4" border="0">
                                            <tr>
                                                <td><img src="/i_yklesn/ako.jpg" boreder="0" width="60" height="60"/></td>
                                                <td valign="middle"><a href="http://www.ako.ru/default.asp" style="font-size: 14px;">Администрация&nbsp;Кемеровской области</span></span></a></p></td>
                                            </tr>
                                            <tr>
                                                <td><img src="/i_yklesn/kem.jpg" boreder="0" width="60" height="60"/></td>
                                                <td style="vertical-align: middle;"><a href="http://www.kemerovo.ru/" class="lk_text" style="font-size: 14px;">Администрация города Кемерово</a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="/i_yklesn/ref_gkh.gif" boreder="0" width="60" height="60"/></td>
                                                <td style="vertical-align: middle;"><a href="http://www.reformagkh.ru/mymanager/company?nid=7050429&tid=2382789" class="lk_text" style="font-size: 14px;">Реформа ЖКХ</a></td>
                                            </tr>
                                        </table>

                                    </div>
                                </td>

                                <td style="width: 60%">
                                    <div class="inner_block">

                                        <div class="rzdtitle">Об организации</div>

                                        <div class="rascr_text" style="text-align: justify;">
                                            <img src="/i_yklesn/Untitled-2.jpg" align="right" style="padding-left: 10px; padding-bottom: 10px;"/>
                                            <p><b>ООО «Управляющая компания «Лесная поляна»</b> осуществляет эксплуатацию жилищного фонда на территории жилого района Лесная поляна г.Кемерово с октября 2008года.<br/><br/>
                                            <p>В ноябре 2011 года включена в Реестр энергоснабжающих организаций Кемеровской области, в отношении которых осуществляется государственное регулирование по поставке, передаче и распределению тепловой энергии.</p>
                                            <p>Управляющая компания «Лесная поляна» – молодая, перспективная компания. Мы располагаем штатом высоквалифицированных специалистов, имеющих большой опыт в сфере управления, обслуживания и эксплуатации объектов жилищного фонда.
                                                В настоящий момент в управлении находятся <b>19</b> жилых многоквартирных домов общей площадью <b>107,5 тыс. кв.м.</b>
                                            <p/>

                                            <p><b>Основные функции Управляющей компании:</b>
                                            <p/>
                                            <ul>
                                                <li>обеспечение бесперебойного функционирования инженерных систем и оборудования дома;</li>
                                                <li>комплексная уборка мест общего пользования дома и придомовой территории;</li>
                                                <li>вывоз бытового и крупногабаритного мусора;</li>
                                                <li>проведение работ по дезинсекции, дератизации;</li>
                                                <li>организация круглосуточного аварийного - диспетчерского обслуживания;</li>
                                                <li>предоставление коммунальных услуг (тепло-, водо-, электроснабжение);</li>
                                                <li>осуществление регистрационного учета граждан.</li>
                                            </ul>
                                            <b>Наша цель –</b> создавать и поддерживать качественную систему эксплуатации жилищного фонда, максимально комфортные условия проживания граждан и рациональный расход денежных средств собственников жилья.
                                            <p>Мы стараемся найти индивидуальный подход к каждому и надеемся на эффективное и продолжительное сотрудничество!
                                            <p/>

                                            <br/>

                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </table>

                        {/if}
                    </td>
                </tr>
                <tr>
                    <td style="height: 340px; padding: 0; border-top: 1px solid #000000;">

                        <table>
                            <tr>
                                <td style="width: 536px; padding: 0;">

                                    <div class="inner_block_4">
                                        <div>Наши контакты</div>
                                        <div style="padding: 25px 0 0 0;">
                                            8 (3842) 34-58-45<br/>
                                            Аварийная служба: 8-961-701-0013<br/><br/>
                                            650071, Кемеровская область, г. Кемерово,<br/>
                                            ж/р Лесная поляна, ул. Молодежная, дом №1
                                        </div>
                                    </div>

                                </td>
                                <td style="width: 464px; padding: 0;">

                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td style="height: 36px; padding: 0;">

                        <table>
                            <tr>
                                <td style="width: 536px; padding: 0;">
                                    <div style="padding-left: 49px; padding-top: 6px;">&copy; {$smarty.now|date_format:"%Y"} {$title}</div>
                                </td>
                                <td style="width: 464px; padding: 0; text-align: right;">

                                    <!--LiveInternet counter-->
                                    <script type="text/javascript"><!--
                                        document.write("<a href='http://www.liveinternet.ru/click' " +
                                            "target=_blank><img src='//counter.yadro.ru/hit?t14.15;r" +
                                            escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
                                                ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                                                screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                                            ";h" + escape(document.title.substring(0, 80)) + ";" + Math.random() +
                                            "' alt='' title='LiveInternet: показано число просмотров за 24" +
                                            " часа, посетителей за 24 часа и за сегодня' " +
                                            "border='0' width='88' height='31'><\/a>")
                                        //--></script><!--/LiveInternet-->

                                    <img src="/i_yklesn/invoice.jpg" alt="invoice" style="padding-right: 49px;"/>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>

        </td>
        <td class="border_right"></td>
    </tr>
</table>

</body>
</html>
