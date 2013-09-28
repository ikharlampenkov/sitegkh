<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link title="Screen" rel="stylesheet" type="text/css" href="css/main.css" media="all" />

        <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="js/main.js" ></script>
        <script type="text/javascript" language="javascript" src="js/common.js"></script>


        <title>{$title}</title>
    </head>
    <body>

        <table>
            <tr>
                <td style="padding: 0px;">
                    {include file="border.tpl"}
                </td>
                <td class="mainblock">

                    <table>
                        <tr>
                            <td style="height: 51px; text-align: center; vertical-align: middle;">

                                <form action="/" method="post" style="margin:0px; padding:0px;">
                                    <input type="text" name="personal_account" value="Лицевой счет" onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Лицевой счет';" class="loginfield" />
                                    <input type="text" name="psw" value="Пароль"  onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Пароль';" class="loginfield" />
                                    <input type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px;" />
                                </form>

                            </td>
                        </tr>
                        <tr>
                            <td style="height: 138px; padding: 0px;">

                                <table>
                                    <tr>
                                        <td></td>
                                        <td style="width: 553px;">{include file="menu.tpl"}</td>
                                        <td style="width: 226px; text-align: center; vertical-align: top;"><img src="i/gerbko.jpg" alt="" /></td>
                                    </tr>
                                </table>


                            </td>
                        </tr>
                        <tr>
                            <td style="height: 346px; padding: 0px;">

                                <table>
                                    <tr>
                                        <td class="imgl">
                                            <div class="imgl_block">
                                                <div class="rzdtitle_mini">На заметку</div>
                                                <div class="imgl_link_block">
                                                    <a href="?page=faq" class="imgl">Вопрос-ответ</a><br/>
                                                    <a href="?page=content_page&title=helpful_information" class="imgl">Полезная информация</a><br/>
                                                    <a href="?page=document" class="imgl">Документы</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="imgc">

                                            <table style="width: 368px; height: 346px;">
                                                <tr>
                                                    <td colspan="3" style="width: 368px; height: 15px; background-image: url(/i/verh.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 14px; height: 261px; background-image: url(/i/left.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                    <td style="width: 340px; height: 261px; padding: 0px;"></td>
                                                    <td style="width: 14px; height: 261px; background-image: url(/i/right.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="width: 368px; height: 69px; background-image: url(/i/niz.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="imgr">
                                            <div class="imgr_block">
                                                <div class="rzdtitle_mini">Звоните</div>
                                                <div class="imgr_link_block">
                                                    <span class="imgr_title" >Справочная служба</span><br/>
                                                    <span class="imgr_text">(3842) 36-54-61</span><br/><br/>
                                                    <span class="imgr_title">Аварийная служба</span><br/>
                                                    <span class="imgr_text">(3842) 67-46-40</span><br/>
                                                    <span class="imgr_text">круглосуточно</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px;">

                                {if isset($page) && !empty($page)}
                                    <div style="padding: 20px;">
                                        {include file="$page.tpl"}
                                    </div>
                                {else}

                                    <table>
                                        <tr>
                                            <td style="width: 404px; padding: 0px;">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Личный кабинет жильца</div>

                                                    <div class="lk_block">
                                                        <div class="lk_text">Посмотреть распечатку платежей</div>
                                                        <div class="lk_text">Посмотреть баланс платежей</div>
                                                        <div class="lk_text">Передать показания счетчиков</div>
                                                        <div class="lk_text">Подать заявку на вызов мастера</div>
                                                        <div class="lk_text">Задать вопрос управлению</div>
                                                        <div class="lk_text">Оплатить услуги</div>
                                                        <div class="lk_text">Посмотреть текущие работы по дому</div>
                                                    </div>

                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Новости</div>
                                                    <br/>
                                                    <table>
                                                        <tr><td>
                                                                {foreach from=$news_list item=news}
                                                                    <div class="news_date">{$news.date|date_format:"%d.%m.%Y"} </div>
                                                                    <div class="news_title">{$news.title}</div>
                                                                    {if $news.full_text}
                                                                        <a href="{$siteurl}?page=news&action=view_news&id={$news.id}&category={$news.news_category_id}" class="news_text_link">{$news.short_text}</a>
                                                                    {else}
                                                                        <div class="news_text_link">{$news.short_text}</div>
                                                                    {/if}
                                                                    <br/> 

                                                                {/foreach}
                                                            </td></tr>
                                                    </table>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height: 515px; background-image: url(i/derevoleft.jpg); background-repeat: no-repeat; background-position: left bottom; padding: 0px;">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Раскрытие информации</div><br/>

                                                    <table cellpadding="5" border="0">
                                                        <tr><td class="rascr_img"><img src="/i/i_about.png" alt="" /></td><td class="rascr_text"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_money.png" alt="" /></td><td style="color:#aaaaaa">Финансово-хозяйственная деятельность</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports">Бухгалтерская отчетность</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Доходы" href="?page=content_page&title=income&spage=reports">Отчет о прибылях и убытках</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_bservice.png" alt="" /></td><td style="color:#aaaaaa">Информация об услугах, работах по содержанию и ремонту</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="По содержанию дома" href="?page=content_page&title=basic&spage=about">Базовые услуги</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Электротехнические" href="?page=content_page&title=platnie&spage=about">Платные</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_service.png" alt="" /></td><td style="color:#aaaaaa">Порядок и условия оказания услуг по содержание и ремонт</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Договор" href="?page=content_page&title=dogovor&spage=about">Договор управления МКД</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="План работ по содержанию и ремонту" href="?page=content_page&title=plan_rabot&spage=about">План работ по содержанию и ремонту</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Меры по снижению расходов на работу" href="?page=content_page&title=meri_rashod&spage=about">Меры по снижению расходов на работу</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Нарушения" href="?page=content_page&title=narusheni&spage=about">Нарушения</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Соответствие качеству" href="?page=content_page&title=kachthestvo&spage=about">Соответствие качеству</td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_report.png" alt="" /></td><td style="color:#aaaaaa">Содержание, периодичность, результат, стоимость работ по содержанию и ремонту</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Тарифы на коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Тарифы на коммунальные ресурсы</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_violation.png" alt="" /></td><td class="rascr_text"><a title="Случаи привлечения к ответственности" href="?page=content_page&title=otvetstv&spage=about">Случаи привлечения к ответственности</a></td></tr>

                                                    </table>

                                                </div>
                                            </td>
                                            <td style="height: 515px; width: 308px; padding: 0px;">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Жизненные ситуации</div><br/>

                                                    {foreach from=$faq_title_list item=faq_t}
                                                        <div>
                                                            <img src="/i/{$faq_t.img}" alt="{$faq_t.question}" class="faq_t_img" />
                                                            <a  href="?page=faq&action=view&id={$faq_t.id}{if $faq_t.is_situation==1}&is_situation=1{/if}" class="faq_t" >{$faq_t.question}</a>
                                                        </div><br/>
                                                    {/foreach}

                                                </div>
                                            </td>
                                            <td style="height: 515px; width: 288px; background-image: url(i/derevoright.jpg); background-repeat: no-repeat; background-position: right bottom; padding: 0px;">
                                                <div style="padding: 20px;"> <div class="rzdtitle">Оплата</div> </div>
                                            </td>
                                        </tr>
                                    </table>
                                {/if}
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 342px; background-color: #ebebeb;">

                                <table>
                                    <tr>
                                        <td style="width: 464px;">
                                            <div>
                                                <div style="color: #0e426b; padding: 10px 0px 0px 60px; font-size: 14pt;">Контакты</div>
                                                <div style="color: #2191d0; font-size: 28pt; padding: 50px 0px 0px 60px;"><span style="color: #5f5e5d; font-size: 12pt; vertical-align: text-top;">8 (3842)</span> 56 00 00</div>
                                            </div>
                                        </td>
                                        <td style="width: 536px; background-image: url(i/banner.jpg); background-repeat: no-repeat;">&nbsp;</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td class="nizfon">
                                <table>
                                    <tr>
                                        <td style="vertical-align: middle;"><div style="color: #ffffff; padding-left: 40px; font-size: 12pt;">&copy; {$smarty.now|date_format:"%Y"} "{$title}" </div></td>
                                        <td style="padding: 0px; text-align: right; vertical-align: middle; padding-right: 40px;"><img src="i/invoice.jpg" alt="invoice" /></td>
                                    </tr>
                                </table>


                            </td>
                        </tr>
                    </table>

                </td>
                <td style="padding: 0px;">
                    {include file="border.tpl"}
                </td>
            </tr>
        </table>

    </body>
</html>
