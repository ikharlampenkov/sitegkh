<div class="panel">
    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"  background="/img/bgleft.jpg" >
        <tr>
            <td><img src="/img/left.jpg" /></td>
            <td width="750">
                <ul>
                    <li class="{if $spage=='main'}active{else}noactive{/if}"><a id="tmM" title="Главная" href="/">Главная</a></li>
                    <li class="{if $spage=='about'}active{else}noactive{/if}"><a id="tmC" title="О нас" href="?page=content_page&action=edit&id=about&spage=about">О нас</a></li>
                    <li class="{if $spage=='service'}active{else}noactive{/if}"><a id="tmS" title="Услуги" href="?page=content_page&action=edit&id=service&spage=service">Услуги</a></li>
                    <li class="{if $spage=='rates'}active{else}noactive{/if}"><a id="tmL" title="Тарифы" href="?page=content_page&action=edit&id=rates&spage=rates">Тарифы</a></li>
                    <li class="{if $spage=='news'}active{else}noactive{/if}"><a id="tmCON" title="Новости" href="?page=news&spage=news">Новости</a</li>
                    <li class="{if $spage=='house'}active{else}noactive{/if}"><a id="tma" title="Ваш дом" href="?page=house&spage=house">Ваш дом</a></li>
                    <li class="{if $spage=='reports'}active{else}noactive{/if}"><a id="tmO" title="Отчеты" href="?page=content_page&action=edit&id=reports&spage=reports">Отчеты</a></li>
                </ul>
            </td>
            <td align="right"><img src="img/right.jpg" /></td>
        </tr>
    </table>
</div>

<div style="text-align:center">
    <ul class="sub">
        {if $spage=='main'}
            <li class="{if $conpage_title=='disclosure_of_information'}active{else}noactive{/if}"><a title="Раскрытие информации" href="?page=content_page&action=edit&id=disclosure_of_information">Раскрытие информации</a></li>
            <li class="{if $conpage_title=='cabinet'}active{else}noactive{/if}"><a title="Личный кабинет" href="?page=content_page&action=edit&id=cabinet">Личный кабинет</a></li>
            <li class="{if $page=='faq' && isset($is_situation) && $is_situation==1}active{else}noactive{/if}"><a title="Жизненные ситуации" href="?page=faq&is_situation=1">Жизненные ситуации</a></li>
            <li class="{if $page=='news' && isset($is_important) && $is_important==1}active{else}noactive{/if}"><a title="Важная информация" href="?page=news&is_important=1">Важная информация</a></li>
        {/if}
        {if $spage=='about'}
            <li class="{if $conpage_title=='general_information'}active{else}noactive{/if}"><a title="Общая информация" href="?page=content_page&action=edit&id=general_information&spage=about">Общая информация</a></li>
            {*<li class="{if $page=='license'}active{else}noactive{/if}"><a title="Свидетельство" href="?page=license&spage=about">Достижения</a></li>*}
            {*<li class="{if $page=='personal' && $is_leaders==1}active{else}noactive{/if}"><a title="Руководство" href="?page=personal&is_leaders=1&spage=about">Руководство</a></li>*}
            {*<li class="{if $page=='personal' && $is_leaders==0}active{else}noactive{/if}"><a title="Персонал" href="?page=personal&is_leaders=0&spage=about">Персонал</a></li>*}
            <li class="{if $conpage_title=='leaders'}active{else}noactive{/if}"><a title="Коллектив" href="?page=content_page&action=edit&id=leaders&spage=about">Коллектив</a></li>
            <li class="{if $conpage_title=='passport_office'}active{else}noactive{/if}"><a title="Паспортный стол" href="?page=content_page&action=edit&id=passport_office&spage=about">Паспортный стол</a></li>
            <li class="{if $page=='vacancy'}active{else}noactive{/if}"><a title="Вакансии" href="?page=vacancy&spage=about">Вакансии</a></li>
            {*<li class="{if $conpage_title=='contact'}active{else}noactive{/if}"><a title="Поставщики" href="?page=content_page&action=edit&id=distributor&spage=about">Поставщики</a></li>*}
            <li class="{if $conpage_title=='contact'}active{else}noactive{/if}"><a title="Контакты" href="?page=content_page&action=edit&id=contact&spage=about">Контакты</a></li>
        {/if}
        {if $spage=='service'}
            <li class="{if $conpage_title=='eltechrab'}active{else}noactive{/if}"><a title="Электротехнические" href="?page=content_page&action=edit&id=eltechrab&spage=service">Электротехнические</a></li>
            <li class="{if $conpage_title=='santechrab'}active{else}noactive{/if}"><a title="Сантехнические" href="?page=content_page&action=edit&id=santechrab&spage=service">Сантехнические</a></li>
            <li class="{if $conpage_title=='plotnitskie_rab'}active{else}noactive{/if}"><a title="Плотницкие" href="?page=content_page&action=edit&id=plotnitskie_rab&spage=service">Плотницкие</a></li>
            <li class="{if $conpage_title=='pechnie_rab'}active{else}noactive{/if}"><a title="Печные" href="?page=content_page&action=edit&id=pechnie_rab&spage=service">Печные</a></li>
            <li class="{if $conpage_title=='otdelochnie_rab'}active{else}noactive{/if}"><a title="Отделочные" href="?page=content_page&action=edit&id=otdelochnie_rab&spage=service">Отделочные</a></li>
            <li class="{if $conpage_title=='service_other'}active{else}noactive{/if}"><a title="Прочие" href="?page=content_page&action=edit&id=service_other&spage=service">Прочие</a></li>
            <li class="{if $conpage_title=='keep_the_house'}active{else}noactive{/if}"><a title="Содержание дома" href="?page=content_page&action=edit&id=keep_the_house&spage=service">Содержание дома</a></li>
            {*<li class="{if $conpage_title=='home_repair'}active{else}noactive{/if}"><a title="Ремонт дома" href="?page=content_page&action=edit&id=home_repair&spage=service">Ремонт дома</a></li>*}
            {*<li class="{if $conpage_title=='where_to_pay'}active{else}noactive{/if}"><a title="Где оплатить?" href="?page=content_page&action=edit&id=where_to_pay&spage=service">Где оплатить?</a></li>*}
        {/if}
        {if $spage=='rates'}
            <li class="{if $conpage_title=='gkh'}active{else}noactive{/if}"><a title="Жилищно-коммунальные услуги" href="?page=content_page&action=edit&id=gkh&spage=rates">Жилищно-коммунальные услуги</a></li>
            <li class="{if $conpage_title=='communal_resources'}active{else}noactive{/if}"><a title="Коммунальные ресурсы" href="?page=content_page&action=edit&id=communal_resources&spage=rates">Коммунальные ресурсы</a></li>
            <li class="{if $conpage_title=='distributor'}active{else}noactive{/if}"><a title="Поставщики" href="?page=content_page&action=edit&id=distributor&spage=rates">Поставщики</a></li>
            {*<li class="{if $conpage_title=='where_to_pay'}active{else}noactive{/if}"><a title="Где оплатить?" href="?page=content_page&action=edit&id=where_to_pay&spage=rates">Где оплатить?</a></li>*}
        {/if}
        {if $spage=='news'}
            <li class="{if $category=='1'}active{else}noactive{/if}"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
            <li class="{if $category=='2'}active{else}noactive{/if}"><a title="Отключения" href="?page=news&category=2&spage=news" >Отключения</a></li>
            <li class="{if $category=='3'}active{else}noactive{/if}"><a title="Подключения" href="?page=news&category=3&spage=news" >Подключения</a></li>
            <li class="{if $category=='4'}active{else}noactive{/if}"><a title="Согласования" href="?page=news&category=4&spage=news" >Согласования</a></li>
            <li class="{if $category=='5'}active{else}noactive{/if}"><a title="Законодательство" href="?page=news&category=5&spage=news" >Законодательство</a></li>
        {/if}
        {if $spage=='house'}
            <li class="{if $category=='all'}active{else}noactive{/if}"><a title="Обслуживаемые дома" href="?page=house&category=all&spage=house">Обслуживаемые дома</a></li>
            {*<li class="{if $category=='plan'}active{else}noactive{/if}"><a title="План проводимых работ" href="?page=content_page&action=edit&id=plan_prov_rabot&spage=house">План проводимых работ</a></li>*}
            {*<li class="{if $category=='reports'}active{else}noactive{/if}"><a title="Отчет по капитальном ремонту" href="?page=house&category=reports&spage=house">Отчет по капитальном ремонту</a></li>*}
        {/if}
        {if $spage=='reports'}
            <li class="{if $conpage_title=='financial_statements'}active{else}noactive{/if}"><a title="Бухгалтерская отчетность" href="?page=content_page&action=edit&id=financial_statements&spage=reports">Бухгалтерская отчетность</a></li>
            <li class="{if $conpage_title=='income'}active{else}noactive{/if}"><a title="Отчет о прибылях и убытках" href="?page=content_page&action=edit&id=income&spage=reports">Отчет о прибылях и убытках</a></li>
            <li class="{if $conpage_title=='reports_kap_remont'}active{else}noactive{/if}"><a title="Капитальный ремонт" href="?page=content_page&action=edit&id=reports_kap_remont&spage=reports">Капитальный ремонт</a></li>
        {/if}
    </ul>
</div>

<script type="text/javascript">
                                var submenus = [ { id:"tmM",subs:[ { "t":"Раскрытие информации","u":"?page=content_page&action=edit&id=disclosure_of_information" } , { "t":"Личный кабинет","u":"?page=content_page&action=edit&id=cabinet" } , { "t":"Жизненные ситуации","u":"?page=faq&is_situation=1" } , { "t":"Важная информация","u":"?page=content_page&action=edit&id=important_information" } ] } ,
    { id:"tmC",subs:[ { "t":"Общая информация","u":"?page=content_page&action=edit&id=general_information&spage=about" } , { "t":"Коллектив","u":"?page=content_page&action=edit&id=leaders&spage=about" } , { "t":"Паспортный стол","u":"?page=content_page&action=edit&id=passport_office&spage=about" } , { "t":"Вакансии","u":"?page=vacancy&spage=about" } , { "t":"Контакты","u":"?page=content_page&action=edit&id=contact&spage=about" } ] } ,
    { id:"tmS",subs:[ { "t":"Электротехнические","u":"?page=content_page&action=edit&id=eltechrab&spage=service" } , { "t":"Сантехнические","u":"?page=content_page&action=edit&id=santechrab&spage=service" } , { "t":"Плотницкие","u":"?page=content_page&action=edit&id=plotnitskie_rab&spage=service" } , { "t":"Печные","u":"?page=content_page&action=edit&id=pechnie_rab&spage=service" } , { "t":"Отделочные","u":"?page=content_page&action=edit&id=otdelochnie_rab&spage=service" } , { "t":"Прочие","u":"?page=content_page&action=edit&id=service_other&spage=service" } , { "t":"Содержание дома","u":"?page=content_page&action=edit&id=keep_the_house&spage=service" } ] } , 
    { id:"tmL",subs:[ { "t":"Жилищно-коммунальные услуги","u":"?page=content_page&action=edit&id=gkh&spage=rates" } , { "t":"Коммунальные ресурсы","u":"?page=content_page&action=edit&id=communal_resources&spage=rates" } , { "t":"Поставщики","u":"?page=content_page&action=edit&id=distributor&spage=rates" } ] } ,
    { id:"tmCON",subs:[ { "t":"Объявления","u":"?page=news&category=1&spage=news" } , { "t":"Отключения","u":"?page=news&category=2&spage=news" } , { "t":"Подключения","u":"?page=news&category=3&spage=news" } , { "t":"Согласования","u":"?page=news&category=4&spage=news" } , { "t":"Законодательство","u":"?page=news&category=5&spage=news" } ] } ,
    { id:"tma",subs:[ { "t":"Обслуживаемые дома","u":"?page=house&category=all&spage=house" } ] } ,
    { id:"tmO",subs:[ { "t":"Бухгалтерская отчетность","u":"?page=content_page&action=edit&id=financial_statements&spage=reports" } , { "t":"Отчет о прибылях и убытка","u":"?page=content_page&action=edit&id=income&spage=reports" } , { "t":"Капитальный ремонт","u":"?page=content_page&action=edit&id=reports_kap_remont&spage=reports" } ] } ];
</script>