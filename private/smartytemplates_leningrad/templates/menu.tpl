<div class="panel">
    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"  >
        <tr>

            <td width="553">
                <ul>
                    <li class="{if $spage=='main'}active{else}noactive{/if}"><a id="tmM" title="Главная" href="/">Главная</a></li>
                    <li class="{if $spage=='about'}active{else}noactive{/if}"><a id="tmC" title="О нас" href="?page=content_page&title=about&spage=about">О нас</a></li>
                    <li class="{if $spage=='service'}active{else}noactive{/if}"><a id="tmS" title="Услуги" href="?page=content_page&title=service&spage=service">Услуги</a></li>
                    <li class="{if $spage=='rates'}active{else}noactive{/if}"><a id="tmL" title="Тарифы" href="?page=content_page&title=rates&spage=rates">Тарифы</a></li>
                    <li class="{if $spage=='news'}active{else}noactive{/if}"><a id="tmCON" title="Новости" href="?page=news&spage=news">Новости</a></li>
                    <li class="{if $spage=='house'}active{else}noactive{/if}"><a id="tma" title="Ваш дом" href="?page=content_page&title=perechen_domov">Ваш дом</a></li>
                    <li class="{if $spage=='reports'}active{else}noactive{/if}"><a id="tmO" title="Отчеты" href="?page=content_page&title=reports&spage=reports">Отчеты</a></li>
                </ul>
            </td>

        </tr>
    </table>
</div>
    <ul class="sub">
        {if $spage=='main'}
            <li class="{if $conpage_title=='disclosure_of_information'}active{else}noactive{/if}"><a title="Раскрытие информации" href="?page=content_page&title=disclosure_of_information">Раскрытие информации</a></li>
            {*<li class="{if $conpage_title=='cabinet'}active{else}noactive{/if}"><a title="Личный кабинет" href="?page=content_page&title=cabinet">Личный кабинет</a></li>*}
            <li class="{if $page=='faq' && isset($is_situation) && $is_situation==1}active{else}noactive{/if}"><a title="Жизненные ситуации" href="?page=faq&is_situation=1">Жизненные ситуации</a></li>
            <li class="{if $page=='news' && isset($is_important) && $is_important==1}active{else}noactive{/if}"><a title="Важная информация" href="?page=news&is_important=1">Важная информация</a></li>
        {/if}
        {if $spage=='about'}
            <li class="{if $conpage_title=='general_information'}active{else}noactive{/if}"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></li>
            <li class="{if $page=='license'}active{else}noactive{/if}"><a title="Свидетельство" href="?page=license&spage=about">Достижения</a></li>
            {*<li class="{if $page=='personal' && $is_leaders==1}active{else}noactive{/if}"><a title="Руководство" href="?page=personal&is_leaders=1&spage=about">Руководство</a></li>*}
            {*<li class="{if $page=='personal' && $is_leaders==0}active{else}noactive{/if}"><a title="Персонал" href="?page=personal&is_leaders=0&spage=about">Персонал</a></li>*}
            <li class="{if $conpage_title=='leaders'}active{else}noactive{/if}"><a title="Коллектив" href="?page=content_page&title=leaders&spage=about">Коллектив</a></li>
            <li class="{if $conpage_title=='passport_office'}active{else}noactive{/if}"><a title="Паспортный стол" href="?page=content_page&title=passport_office&spage=about">Паспортный стол</a></li>
            <li class="{if $page=='vacancy'}active{else}noactive{/if}"><a title="Вакансии" href="?page=vacancy&spage=about">Вакансии</a></li>
            {*<li class="{if $conpage_title=='contact'}active{else}noactive{/if}"><a title="Поставщики" href="?page=content_page&title=distributor&spage=about">Поставщики</a></li>*}
            <li class="{if $conpage_title=='contact'}active{else}noactive{/if}"><a title="Контакты" href="?page=content_page&title=contact&spage=about">Контакты</a></li>
        {/if}
        {if $spage=='service'}
            <li class="{if $conpage_title=='eltechrab'}active{else}noactive{/if}"><a title="Электротех.раб." href="?page=content_page&title=eltechrab&spage=service">Электротех.раб.</a></li>
            <li class="{if $conpage_title=='santechrab'}active{else}noactive{/if}"><a title="Сантех.раб." href="?page=content_page&title=santechrab&spage=service">Сантех.раб.</a></li>
            <li class="{if $conpage_title=='santechrab'}active{else}noactive{/if}"><a title="Отдел.раб" href="?page=content_page&title=otdelrab">Отдел.раб.</a></li>
            <li class="{if $conpage_title=='santechrab'}active{else}noactive{/if}"><a title="Плот.раб." href="?page=content_page&title=plotrab">Плот.раб.</a></li>
            <li class="{if $conpage_title=='keep_the_house'}active{else}noactive{/if}"><a title="Содержание дома" href="?page=content_page&title=keep_the_house&spage=service">Содержание дома</a></li>
            {*<li class="{if $conpage_title=='home_repair'}active{else}noactive{/if}"><a title="Ремонт дома" href="?page=content_page&title=home_repair&spage=service">Ремонт дома</a></li>*}
            <li class="{if $conpage_title=='where_to_pay'}active{else}noactive{/if}"><a title="Где оплатить?" href="?page=content_page&title=where_to_pay&spage=service">Где оплатить?</a></li>
        {/if}
        {if $spage=='rates'}
            <li class="{if $conpage_title=='gkh'}active{else}noactive{/if}"><a title="Тарифы" href="?page=content_page&title=gkh&spage=rates">Тарифы</a></li>
            {*<li class="{if $conpage_title=='communal_resources'}active{else}noactive{/if}"><a title="Коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Коммунальные ресурсы</a></li>*}
            <li class="{if $conpage_title=='distributor'}active{else}noactive{/if}"><a title="Поставщики" href="?page=content_page&title=distributor&spage=rates">Поставщики</a></li>
            <li class="{if $conpage_title=='where_to_pay'}active{else}noactive{/if}"><a title="Где оплатить?" href="?page=content_page&title=where_to_pay&spage=rates">Где оплатить?</a></li>
        {/if}
        {if $spage=='news'}
            <li class="{if $category=='1'}active{else}noactive{/if}"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
            <li class="{if $category=='2'}active{else}noactive{/if}"><a title="Отключения" href="?page=news&category=2&spage=news" >Отключения</a></li>
            <li class="{if $category=='3'}active{else}noactive{/if}"><a title="Подключения" href="?page=news&category=3&spage=news" >Подключения</a></li>
            <li class="{if $category=='4'}active{else}noactive{/if}"><a title="Согласования" href="?page=news&category=4&spage=news" >Согласования</a></li>
            <li class="{if $category=='5'}active{else}noactive{/if}"><a title="Законодательство" href="?page=news&category=5&spage=news" >Законодательство</a></li>
        {/if}
        {if $spage=='house'}
            <li class="{if $category=='all'}active{else}noactive{/if}"><a title="Обслуживаемые дома" href="?page=content_page&title=perechen_domov">Обслуживаемые дома</a></li>
            <li class="{if $category=='all'}active{else}noactive{/if}"><a title="Констр.особенности" href="?page=content_page&title=constr">Констр.особенности</a></li>
            <li class="{if $category=='all'}active{else}noactive{/if}"><a title="ОДН согл. ППР 307" href="?page=content_page&title=odn307">ОДН согл. ППР 307</a></li>
            <li class="{if $category=='all'}active{else}noactive{/if}"><a title="ОДН согл. ППР 354" href="?page=content_page&title=odn354">ОДН согл. ППР 354</a></li>
        {/if}
        {if $spage=='reports'}
            <li class="{if $conpage_title=='financial_statements'}active{else}noactive{/if}"><a title="Бухгалтерская отчетность" href="?page=content_page&title=balans2011">Бухгалтерская отчетность </a></li>
            <li class="{if $conpage_title=='income'}active{else}noactive{/if}"><a title="Отчет о прибылях и убытках" href="?page=content_page&title=ot2011">Отчет о прибылях и убытках</a></li>
            <li class="{if $conpage_title=='income'}active{else}noactive{/if}"><a title="Отч" href="/ckfinder/userfiles/files/ot2011(1).xls">Отчёт о выполненных обязательствах</a></li>
        {/if}
    </ul>


<script type="text/javascript">
                                var submenus = [ { id:"tmM",subs:[ { "t":"Раскрытие информации","u":"?page=content_page&title=disclosure_of_information" } , { "t":"Жизненные ситуации","u":"?page=faq&is_situation=1" } , { "t":"Важная информация","u":"?page=content_page&title=important_information" } ] } ,
    { id:"tmC",subs:[ { "t":"Общая информация","u":"?page=content_page&title=general_information&spage=about" } , { "t":"Достижения","u":"?page=license&spage=about" } , { "t":"Коллектив","u":"?page=content_page&title=leaders&spage=about" } , { "t":"Паспортный стол","u":"?page=content_page&title=passport_office&spage=about" } , { "t":"Вакансии","u":"?page=vacancy&spage=about" } , { "t":"Контакты","u":"?page=content_page&title=contact&spage=about" } ] } ,
    { id:"tmS",subs:[ { "t":"Электротех.раб.","u":"?page=content_page&title=eltechrab&spage=service" } , { "t":"Сантех. раб.","u":"?page=content_page&title=santechrab&spage=service" } , { "t":"Отдел.раб.","u":"?page=content_page&title=otdelrab" } , { "t":"Плот. раб.","u":"?page=content_page&title=plotrab" } ,{ "t":"Содержание дома","u":"?page=content_page&title=keep_the_house&spage=service" } ] } ,
    { id:"tmL",subs:[ { "t":"Тарифы","u":"?page=content_page&title=gkh&spage=rates" } , { "t":"Поставщики","u":"?page=content_page&title=distributor&spage=rates" } , { "t":"Где оплатить?","u":"?page=content_page&title=where_to_pay&spage=rates" } ] } ,
    { id:"tmCON",subs:[ { "t":"Объявления","u":"?page=news&category=1&spage=news" } , { "t":"Отключения","u":"?page=news&category=2&spage=news" } , { "t":"Подключения","u":"?page=news&category=3&spage=news" } , { "t":"Согласования","u":"?page=news&category=4&spage=news" } , { "t":"Законодательство","u":"?page=news&category=5&spage=news" } ] } ,
    { id:"tma",subs:[ { "t":"Обслуживаемые дома","u":"?page=content_page&title=perechen_domov" } , { "t":"Констр.особенности","u":"?page=content_page&title=constr" } , { "t":"ОДН согл. ППР 307","u":"?page=content_page&title=odn307" } , { "t":"ОДН согл. ППР 354","u":"?page=content_page&title=odn354" } ] } ,
    { id:"tmO",subs:[ { "t":"Бухгалтерская отчетность","u":"?page=content_page&title=balans2011" } , { "t":"Отчет о прибылях и убытках","u":"?page=content_page&title=ot2011" } , { "t":"Отчёт о выполненных обязательствах","u":"/ckfinder/userfiles/files/ot2011(1).xls" }] } ];
</script>