<div class="panel">
    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>

            <td width="553">
                <ul>
                    <li class="{if $spage=='main'}active{else}noactive{/if}"><a id="tmM" title="Главная" href="/">Главная</a></li>
                    <li class="{if $spage=='about'}active{else}noactive{/if}"><a id="tmC" title="О компании"> О компании</a></li>
                    <li class="{if $spage=='service'}active{else}noactive{/if}"><a id="tmS" title="Услуги"> Услуги</a></li>
                    <li class="{if $spage=='residents'}active{else}noactive{/if}"><a id="tmR" title="Жильцам"> Жильцам</a></li>
                    <li class="{if $spage=='house'}active{else}noactive{/if}"><a id="tma" title="Ваш дом"> Ваш дом</a></li>
                    <li class="{if $spage=='news'}active{else}noactive{/if}"><a id="tmCON" title="Новости"> Новости</a></li>
                    <li class="{if $spage=='documentation'}active{else}noactive{/if}"><a id="tmO" title="Документы"> Документы</a></li>
                </ul>
            </td>
        </tr>
    </table>
</div>
<ul class="sub">

    {if $spage=='main'}
        <li class="{if $conpage_title=='main'}active{else}noactive{/if}"><a title="Раскрытие информации в сфере МКД" href="?page=content_page&action=edit&id=disclosure_of_information&spage=main">Раскрытие информации в сфере МКД</a></li>
    {/if}


    {if $spage=='about'}
        <li class="{if $conpage_title=='about'}active{else}noactive{/if}"><a title="О нас" href="?page=content_page&action=edit&id=about&spage=about">О нас</a></li>
        <li class="{if $conpage_title=='team'}active{else}noactive{/if}"><a title="Коллектив" href="?page=content_page&action=edit&id=team&spage=about">Коллектив</a></li>
        <li class="{if $conpage_title=='mode'}active{else}noactive{/if}"><a title="Режим работы" href="?page=content_page&action=edit&id=mode&spage=about">Режим работы</a></li>
        <li class="{if $conpage_title=='contact'}active{else}noactive{/if}"><a title="Контакты" href="?page=content_page&action=edit&id=contact&spage=about">Контакты</a></li>
        <li class="{if $conpage_title=='passport_office'}active{else}noactive{/if}"><a title="Паспортный стол" href="?page=content_page&action=edit&id=passport_office&spage=about">Паспортный стол</a></li>
        <li class="{if $conpage_title=='foto'}active{else}noactive{/if}"><a title="Фотогалерея" href="?page=content_page&action=edit&id=foto&spage=about">Фотогалерея</a></li>
    {/if}

    {if $spage=='service'}
        <li class="{if $conpage_title=='tarif'}active{else}noactive{/if}"><a title="Действующие тарифы" href="?page=content_page&action=edit&id=tarif&spage=service">Действующие тарифы</a></li>
        <li class="{if $conpage_title=='distributor'}active{else}noactive{/if}"><a title="Поставщики" href="?page=content_page&action=edit&id=distributor&spage=service">Поставщики</a></li>
        <li class="{if $conpage_title=='normativ'}active{else}noactive{/if}"><a title="Нормативы" href="?page=content_page&action=edit&id=normativ&spage=service">Нормативы</a></li>
        <li class="{if $conpage_title=='paid'}active{else}noactive{/if}"><a title="Платные услуги" href="?page=content_page&action=edit&id=paid&spage=service">Платные услуги</a></li>
    {/if}

    {if $spage=='residents'}
        <li class="{if $conpage_title=='helpful_information'}active{else}noactive{/if}"><a title="Полезная информация" href="?page=content_page&action=edit&id=helpful_information&spage=residents">Полезная информация</a></li>
    {/if}

    {if $spage=='house'}
        <li class="{if $category=='house'}active{else}noactive{/if}"><a title="Обслуживаемые дома" href="?page=content_page&action=edit&id=house&spage=house">Обслуживаемые дома</a></li>
    {/if}

    {if $spage=='news'}
        <li class="{if $category=='1'}active{else}noactive{/if}"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
        <li class="{if $category=='2'}active{else}noactive{/if}"><a title="Отключения" href="?page=news&category=2&spage=news">Отключения</a></li>
        <li class="{if $category=='3'}active{else}noactive{/if}"><a title="Подключения" href="?page=news&category=3&spage=news">Подключения</a></li>
        <li class="{if $category=='4'}active{else}noactive{/if}"><a title="Согласования" href="?page=news&category=4&spage=news">Согласования</a></li>
        <li class="{if $category=='5'}active{else}noactive{/if}"><a title="Законодательство" href="?page=news&category=5&spage=news">Законодательство</a></li>
    {/if}

    {if $spage=='documentation'}
        <li class="{if $conpage_title=='documentation'}active{else}noactive{/if}"><a title="Документы" href="?page=content_page&action=edit&id=documentation&spage=documentation">Документы</a></li>
    {/if}
</ul>


<script type="text/javascript">
    var submenus = [
        { id: "tmM", subs: [
            { "t": "Раскрытие информации в сфере МКД", "u": "?page=content_page&action=edit&id=disclosure_of_information&spage=main" }
        ] } ,
        { id: "tmC", subs: [
            { "t": "О нас", "u": "?page=content_page&action=edit&id=about&spage=about" } ,
            { "t": "Коллектив", "u": "?page=content_page&action=edit&id=team&spage=about" } ,
            { "t": "Режим работы", "u": "?page=content_page&action=edit&id=mode&spage=about" } ,
            { "t": "Контакты", "u": "?page=content_page&action=edit&id=contact&spage=about" },
            { "t": "Паспортный стол", "u": "?page=content_page&action=edit&id=passport_office&spage=about" } ,
            { "t": "Фотогалерея", "u": "?page=content_page&action=edit&id=foto&spage=about" }
        ] } ,
        { id: "tmS", subs: [
            { "t": "Действующие тарифы", "u": "?page=content_page&action=edit&id=tarif&spage=service" } ,
            { "t": "Поставщики", "u": "?page=content_page&action=edit&id=distributor&spage=service" } ,
            { "t": "Нормативы", "u": "?page=content_page&action=edit&id=normativ&spage=service" } ,
            { "t": "Платные услуги", "u": "?page=content_page&action=edit&id=paid&spage=service" }
        ] } ,
        { id: "tmR", subs: [
            { "t": "Полезная информация", "u": "?page=content_page&action=edit&id=helpful_information&spage=residents" }
        ] } ,
        { id: "tma", subs: [
            { "t": "Ваш дом", "u": "?page=content_page&action=edit&id=house&spage=house" }
        ] } ,
        { id: "tmCON", subs: [
            { "t": "Объявления", "u": "?page=news&category=1&spage=news" } ,
            { "t": "Отключения", "u": "?page=news&category=2&spage=news" } ,
            { "t": "Подключения", "u": "?page=news&category=3&spage=news" } ,
            { "t": "Согласования", "u": "?page=news&category=4&spage=news" } ,
            { "t": "Законодательство", "u": "?page=news&category=5&spage=news" }
        ] } ,
        { id: "tmO", subs: [
            { "t": "Документы", "u": "?page=content_page&action=edit&id=documentation&spage=documentation" }
        ] }
    ];
</script>