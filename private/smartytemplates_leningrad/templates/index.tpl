{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
<div style="padding: 20px;">
{include file="$page.tpl"}
</div>
    {else}

    {*if $domen=='xn--19-kmcm3c.xn--p1ai'}
                    <p> </p>
                    <center><img src="/i/otkritka.jpg" /></center>
                    {/if*}

<table>
    <tr>
        <td style="width: 60%; padding: 0px;"> {* 404px; *}
            <div style="padding: 20px;">

                <div class="rzdtitle">Раскрытие информации</div>
                <br/>
                
                {if $domen=='xn----7sbmzidj6b1b.xn--p1ai' || $domen=='xn----8sbifcsdibgfzb7bru.xn--p1ai'}
                {$conpage_first.content}

                {elseif $domen=='xn----htbdepbihnfb8cyg.xn--p1ai' || $domen=='xn----2-fddihw2arbyke.xn--p1ai' || $domen=='xn----btbaoazc2alocedz3kqc.xn--p1ai'}

                    <div id="accordion">
                        <h3><a href="#">Общая информация об управляющей организации</a></h3>

                        <div>
                            <a title="Общая информация" href="?page=content_page&title=about&spage=about" class="rascr_text">Общая информация</a><br/>
                            <a href="?page=content_page&title=rekvizit" class="rascr_text">Реквизиты</a><br/>
                            <a href="?page=content_page&title=perechen_domov" class="rascr_text">Перечень домов, находящихся в управлении</a><br/>
                            <a href="?page=content_page&title=perechen_domov_rastorgnutie" class="rascr_text">Перечень домов, в отношении которых договора были расторгнуты</a><br/>

                        </div>
                        <h3><a href="#">Основные показатели финансово-хозяйственной деятельности управляющей организации</a>
                        </h3>

                        <div>
                            <a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports" class="rascr_text">Бухгалтерская отчетность</a><br/>
                            <a title="Доходы" href="?page=content_page&title=income&spage=reports" class="rascr_text">Отчет о прибылях и убытках</a>
                        </div>

                        <h3><a href="#">Сведения о выполняемых работах по содержанию и ремонту общего имущества в многоквартирном доме</a></h3>

                        <div>
                            <a title="Услуги по содержанию и ремонту общего имущества" href="?page=content_page&title=uslugi_obshie" class="rascr_text">Услуги по содержанию и ремонту общего имущества</a><br/>
                            <a title="Услуги, связанные с достижением целей управления" href="?page=content_page&title=uslugi_tceli" class="rascr_text">Услуги, связанные с достижением целей управления</a><br/>
                            <a title="Перечень договоров" href="?page=content_page&title=perechen_dogovorov" class="rascr_text">Перечень договоров</a><br/>
                        </div>
                        <h3><a href="#">Порядок и условия оказания услуг по содержанию и ремонту общего имущества</a></h3>

                        <div>
                            <a title="Договор" href="?page=content_page&title=dogovor&spage=about" class="rascr_text">Договор управления МКД</a><br/>
                            <a title="Приложение к договору управления многоквартирным домом" href="?page=content_page&title=pril_k_dog&spage=about" class="rascr_text">Приложение к договору управления многоквартирным домом</a><br/>
                            <a title="Сведения о снижении платы" href="?page=content_page&title=snizenie_plati" class="rascr_text">Сведения о снижении платы</a>
                        </div>

                        <h3><a href="#">Сведения о стоимости работ (услуг) по содержанию и ремонту общего имущества в многоквартирном доме</a></h3>

                        <div>
                            <a title="Перечень услуг и работ по содержанию общего имущества на 2011год" href="#" class="rascr_text">Перечень услуг и работ по содержанию общего имущества на 2011год</a>
                        </div>

                        <h3><a href="#">Сведения о ценах (тарифах) на коммунальные ресурсы</a></h3>

                        <div>
                            <a href="?page=content_page&title=gkh&spage=rates" class="rascr_text">Действующие тарифы</a>
                        </div>
                    </div>
                    {else}

                    <table cellpadding="5" border="0">
                        <tr>
                            <td class="rascr_img"><img src="/i/i_about.png" alt=""/></td>
                            <td class="rascr_text"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></td>
                        </tr>

                        <tr>
                            <td class="rascr_img"><img src="/i/i_money.png" alt=""/></td>
                            <td style="color:#aaaaaa">Финансово-хозяйственная деятельность</td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports">Бухгалтерская отчетность</a></td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Доходы" href="?page=content_page&title=income&spage=reports">Отчет о прибылях и убытках</a></td>
                        </tr>

                        <tr>
                            <td class="rascr_img"><img src="/i/i_bservice.png" alt=""/></td>
                            <td style="color:#aaaaaa">Информация об услугах, работах по содержанию и ремонту</td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="По содержанию дома" href="?page=content_page&title=basic&spage=about">Базовые услуги</a></td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Электротехнические" href="?page=content_page&title=platnie&spage=about">Платные</a></td>
                        </tr>

                        <tr>
                            <td class="rascr_img"><img src="/i/i_service.png" alt=""/></td>
                            <td style="color:#aaaaaa">Порядок и условия оказания услуг по содержание и ремонт</td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Договор" href="?page=content_page&title=dogovor&spage=about">Договор управления МКД</a></td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="План работ по содержанию и ремонту" href="?page=content_page&title=plan_rabot&spage=about">План работ по содержанию и ремонту</a></td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Меры по снижению расходов на работу" href="?page=content_page&title=meri_rashod&spage=about">Меры по снижению расходов на работу</a></td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Нарушения" href="?page=content_page&title=narusheni&spage=about">Нарушения</td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Соответствие качеству" href="?page=content_page&title=kachthestvo&spage=about">Соответствие качеству</td>
                        </tr>

                        <tr>
                            <td class="rascr_img"><img src="/i/i_report.png" alt=""/></td>
                            <td style="color:#aaaaaa">Содержание, периодичность, результат, стоимость работ по содержанию и ремонту</td>
                        </tr>
                        <tr>
                            <td class="rascr_img"></td>
                            <td class="rascr_text"><a title="Тарифы на коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Тарифы на коммунальные ресурсы</a></td>
                        </tr>

                        <tr>
                            <td class="rascr_img"><img src="/i/i_violation.png" alt=""/></td>
                            <td class="rascr_text"><a title="Случаи привлечения к ответственности" href="?page=content_page&title=otvetstv&spage=about">Случаи привлечения к ответственности</a></td>
                        </tr>

                    </table>
                {/if}


            {*
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
            *}
            </div>
        </td>
        <td style="width: 40%;">
            <div style="padding: 20px;">
                <div class="rzdtitle">Новости</div>
                <br/>
                <table>
                    <tr>
                        <td>
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
                        </td>
                    </tr>
                </table>

            </div>
        </td>
    </tr>
    <tr>
        <td style="height: 380px; background-image: url(i/derevoleft.jpg); background-repeat: no-repeat; background-position: left bottom; padding: 0px;">
            <div style="padding: 20px;">

                <div class="rzdtitle">Жизненные ситуации</div>
                <br/>

                {foreach from=$faq_title_list item=faq_t}
                    <div>
                        <img src="/i/{$faq_t.img}" alt="{$faq_t.question}" class="faq_t_img"/>
                        <a href="?page=faq&action=view&id={$faq_t.id}{if $faq_t.is_situation==1}&is_situation=1{/if}" class="faq_t">{$faq_t.question}</a>
                    </div>
                    <br/>
                {/foreach}

            </div>
        </td>
        <td style="height: 380px; width: 50%; padding: 0px;">
            <div style="padding: 20px;">


            </div>
        </td>
    {*
    <td style="height: 515px; width: 288px; background-image: url(i/derevoright.jpg); background-repeat: no-repeat; background-position: right bottom; padding: 0px;">
        <div style="padding: 20px;">{* <div class="rzdtitle">Оплата</div> </div>
    </td>
    *}
    </tr>
</table>
{/if}

{include file="share/foot.tpl"}