{include file="share/head.tpl"}

{if isset($page) && !empty($page)}
<div style="padding: 20px 50px 0px 50px; width:900px; height: 100%; min-height: 500px; margin: 0 auto;">
{include file="$page.tpl"}
</div>
    {else}
       
<table style="width: 900px; height: 100%; margin: 0 auto;">
    <tr>
        <td style="width: 40%">
            <div class="inner_block">

            {*

            <div class="rzdtitle"><img src="/i_yklesn/cab.jpg" />&nbsp;Кабинет жильца</div>

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

                
<div class="rzdtitle"><img src="/i_yklesn/news.jpg"/>&nbsp;Новости</div>
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
                         <td valign="middle"><a href="http://www.ako.ru/default.asp"  style="font-size: 14px; color: black">Администрация&nbsp;Кемеровской области</span></span></a></p></td>
                    </tr>
                    <tr>
                        <td><img src="/i_yklesn/kem.jpg" boreder="0" width="60" height="60"/></td>
                        <td style="vertical-align: middle;"><a href="http://www.kemerovo.ru/" class="lk_text" style="font-size: 14px; color: black">Администрация города Кемерово</a></td>
                    </tr>
					<tr>
                        <td><img src="/i_yklesn/ref_gkh.gif" boreder="0" width="60" height="60"/></td>
                        <td style="vertical-align: middle;"><a href="http://www.reformagkh.ru/mymanager/company?nid=7050429&tid=2382789" class="lk_text" style="font-size: 14px; color: black">Реформа ЖКХ</a></td>
                    </tr>
                </table>
               

            {*
            <div id="accordion">
                {*
                <h3><a href="#">Общая информация об управляющей организации</a></h3>

                <div>
                    <a title="Общая информация" href="?page=content_page&title=general_information&spage=about" class="rascr_text">Общая информация</a><br/>
                    <a href="?page=content_page&title=rekvizit" class="rascr_text">Реквизиты</a><br/>
                    <a href="?page=content_page&title=perechen_domov" class="rascr_text">Перечень домов, находящихся в управлении</a><br/>
                    <a href="?page=content_page&title=perechen_domov_rastorgnutie" class="rascr_text">Перечень домов, в отношении которых договора были расторгнуты</a><br/>
                </div>
                <h3><a href="#">Основные показатели финансово-хозяйственной деятельности управляющей организации</a>
                </h3>

                <div>
                    <a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports" class="rascr_text">Бухгалтерский баланс</a><br/>
                    <a title="Доходы" href="?page=content_page&title=income&spage=reports" class="rascr_text">Отчет о прибылях и убытках</a>
                </div>

                <h3><a href="#">Сведения о выполняемых работах по содержанию и ремонту общего имущества в многоквартирном доме</a></h3>

                <div>
                    <a title="Услуги по содержанию и ремонту общего имущества" href="?page=content_page&title=uslugi_obshie&spage=about" class="rascr_text">Услуги по содержанию и ремонту общего имущества</a><br/>
                    <a title="Услуги, связанные с достижением целей управления" href="?page=content_page&title=uslugi_tceli&spage=about" class="rascr_text">Услуги, связанные с достижением целей управления</a><br/>
                    <a href="?page=content_page&amp;title=distributor&amp;spage=rates" class="rascr_text">Перечень договоров</a><br/>
                </div>
                <h3><a href="#">Порядок и условия оказания услуг по содержанию и ремонту общего имущества</a></h3>

                <div>
                    <a title="Договор" href="?page=content_page&title=dogovor&spage=about" class="rascr_text">Договор управления МКД</a><br/>
                    <a title="Приложение к договору управления многоквартирным домом" href="?page=content_page&title=pril_k_dog&spage=about" class="rascr_text">Приложение к договору управления многоквартирным домом</a>
                </div>

                <h3><a href="#">Сведения о стоимости работ (услуг) по содержанию и ремонту общего имущества в многоквартирном доме</a></h3>

                <div>
                    <a title="Перечень услуг и работ по содержанию общего имущества на 2011год" href="?page=content_page&title=stoimost_soderjania&spage=rates" class="rascr_text">Перечень услуг и работ по содержанию общего имущества на 2011год</a>
                </div>

                <h3><a href="#">Сведения о ценах (тарифах) на коммунальные ресурсы</a></h3>

                <div>
                    <a href="?page=content_page&title=communal_resources" class="rascr_text">Тарифы на коммунальные ресурсы</a>
                </div>
            </div>
            *}

            {*

            <table cellpadding="5" border="0" style="padding: 15px 0px 0px 20px;">
                <tr><td style="color:#000000; background-color: #6bcd3b; font-weight: bold; text-align: center;">Общая информация об управляющей организации</td></tr>
                <tr><td class="rascr_text"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about" class="rascr_text">Общая информация</a></td></tr>

                <tr><td style="color:#000000; background-color: #6bcd3b; font-weight: bold; text-align: center;">Основные показатели финансово-хозяйственной деятельности управляющей организации</td></tr>
                <tr><td class="rascr_text"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports" class="rascr_text">Бухгалтерская отчетность</a></td></tr>
                <tr><td class="rascr_text"><a title="Доходы" href="?page=content_page&title=income&spage=reports" class="rascr_text">Отчет о прибылях и убытках</a></td></tr>

                <tr><td style="color:#000000; background-color: #6bcd3b; font-weight: bold; text-align: center;">Сведения о выполняемых работах по содержанию и ремонту общего имущества в многоквартирном доме</td></tr>
                <tr><td class="rascr_text"><a title="Услуги по содержанию и ремонту общего имущества" href="?page=content_page&title=uslugi_obshie&spage=about" class="rascr_text">Услуги по содержанию и ремонту общего имущества</a></td></tr>
                <tr><td class="rascr_text"><a title="Услуги, связанные с достижением целей управления" href="?page=content_page&title=uslugi_tceli&spage=about" class="rascr_text">Услуги, связанные с достижением целей управления</a></td></tr>
                <tr><td class="rascr_text"><a href="?page=content_page&amp;title=distributor&amp;spage=rates" class="rascr_text">Перечень договоров</a></td></tr>

                <tr><td style="color:#000000; background-color: #6bcd3b; font-weight: bold; text-align: center;" class="rascr_text">Порядок и условия оказания услуг по содержанию и ремонту общего имущества</td></tr>
                <tr><td class="rascr_text"><a title="Договор" href="?page=content_page&title=dogovor&spage=about" class="rascr_text">Договор управления МКД</a></td></tr>
                <tr><td class="rascr_text"><a title="Приложение к договору управления многоквартирным домом" href="?page=content_page&title=pril_k_dog&spage=about" class="rascr_text">Приложение к договору управления многоквартирным домом</a></td></tr>


                <tr><td style="color:#000000; background-color: #6bcd3b; font-weight: bold; text-align: center;">Сведения о стоимости работ (услуг) по содержанию и ремонту общего имущества в многоквартирном доме </td></tr>
                <tr><td class="rascr_text"><a title="Перечень услуг и работ по содержанию общего имущества на 2011год" href="?page=content_page&title=stoimost_soderjania&spage=rates" class="rascr_text">Перечень услуг и работ по содержанию общего имущества на 2011год</a></td></tr>

                <tr><td style="color:#000000; background-color: #6bcd3b; font-weight: bold; text-align: center;">Сведения о ценах (тарифах) на коммунальные ресурсы</td></tr>
                <tr><td class="rascr_text"><a href="?page=content_page&title=communal_resources" class="rascr_text">Тарифы на коммунальные ресурсы</a></td></tr>

            </table>
            *}


            </div>
        </td>
    {*
    <td style="width: 34%">
        <div class="inner_block">

    </td>
    *}
        <td style="width: 60%">
            <div class="inner_block">

                <div class="rzdtitle"><img src="/i_yklesn/info.png"/>&nbsp;Об организации</div>
             		
 					<div class="rascr_text" style="text-align: justify;">
 					<img src="/i_yklesn/Untitled-2.jpg" align="right" style="padding-left: 10px; padding-bottom: 10px;"/>
                    <p><b>ООО «Управляющая компания «Лесная поляна»</b> осуществляет эксплуатацию жилищного фонда на территории жилого района Лесная поляна г.Кемерово с октября 2008года.<br/><br/>
                    <p>В ноябре 2011 года включена в Реестр энергоснабжающих организаций Кемеровской области, в отношении которых осуществляется государственное регулирование  по поставке, передаче и распределению тепловой энергии.</p>
                    <p>Управляющая компания «Лесная поляна» – молодая, перспективная компания. Мы располагаем штатом высоквалифицированных специалистов,  имеющих большой опыт в сфере управления, обслуживания и эксплуатации  объектов жилищного фонда. 
В настоящий момент в управлении находятся <b>19</b> жилых многоквартирных домов общей площадью <b>107,5 тыс. кв.м.</b></p>
                    
                    <p><b>Основные функции Управляющей компании:</b></p>
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
                    <p>Мы стараемся найти индивидуальный подход к каждому и надеемся на эффективное и продолжительное сотрудничество!</p>
                    
               		<br/>

        </div>

            {*
                                <div class="rzdtitle"><img src="/i_yklesn/pay.jpg" />&nbsp;Оплата услуг</div>
            *}
            </div>
        </td>
    </tr>
</table>


</td>
</tr>
<tr>
<td style="height: 60px; padding: 0px;">

    <table style="width: 900px; margin: 0 auto;">
        <tr>
            <td style="width: 50%; height: 54px; background-image: url(/i_yklesn/center_fon_left_1.jpg); background-repeat: no-repeat; padding: 0px;"></td>
            <td style="width: 50%; height: 54px; background-image: url(/i_yklesn/center_fon_right_1.jpg); background-repeat: no-repeat; padding: 0px;"></td>
        </tr>
        <tr>
            <td style="width: 50%; background-image: url(/i_yklesn/center_fon_left_2.jpg); background-color: #feeaab; background-repeat: no-repeat; padding: 0px;">

                <div class="inner_block_2">
                    &nbsp;
                </div>

            </td>
            <td style="width: 50%; background-image: url(/i_yklesn/center_fon_right_2.jpg); background-color: #feeaab; background-repeat: no-repeat; padding: 0px;">

                <div class="inner_block_3">
                {*
                        <div class="rzdtitle"><img src="/i_yklesn/faq.jpg" />&nbsp;Жизненные ситуации</div><br/>

                        {foreach from=$faq_title_list item=faq_t}
                            <div>
                                <a  href="?page=faq&action=view&id={$faq_t.id}{if $faq_t.is_situation==1}&is_situation=1{/if}" class="faq_t" >{$faq_t.question}</a>
                            </div><br/>
                        {/foreach}
                        *}
                </div>

            </td>
        </tr>
    </table>

{/if}

{include file="share/foot.tpl"}
