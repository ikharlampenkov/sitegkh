<ul>
    <li class="first {if $spage=='main'}selected{/if}">
        <a title="Главная" href="/">Главная</a>
        <ul>
            <li class="first {if $conpage_title=='main'}selected{/if}"><a title="Раскрытие информации в сфере МКД" href="?page=content_page&action=edit&id=disclosure_of_information&spage=main">Раскрытие информации в сфере МКД</a></li>
        </ul>
    </li>
    <li class="{if $spage=='about'}selected{/if}">
        <a title="О компании">О компании</a>
        <ul>
            <li class="first {if $conpage_title=='about'}selected{/if}"><a title="О нас" href="?page=content_page&action=edit&id=about&spage=about">О нас</a></li>
            <li class="{if $conpage_title=='team'}selected{/if}"><a title="Коллектив" href="?page=content_page&action=edit&id=team&spage=about">Коллектив</a></li>
            <li class="{if $conpage_title=='mode'}selected{/if}"><a title="Режим работы" href="?page=content_page&action=edit&id=mode&spage=about">Режим работы</a></li>
            <li class="{if $conpage_title=='contact'}selected{/if}"><a title="Контакты" href="?page=content_page&action=edit&id=contact&spage=about">Контакты</a></li>
            <li class="{if $conpage_title=='passport_office'}selected{/if}"><a title="Паспортный стол" href="?page=content_page&action=edit&id=passport_office&spage=about">Паспортный стол</a></li>
            <li class="{if $conpage_title=='foto'}selected{/if}"><a title="Фотогалерея" href="?page=content_page&action=edit&id=foto&spage=about">Фотогалерея</a></li>
        </ul>
    </li>
    <li class="{if $spage=='service'}selected{/if}">
        <a title="Услуги">Услуги</a>
        <ul>
            <li class="first {if $conpage_title=='tarif'}selected{/if}"><a title="Действующие тарифы" href="?page=content_page&action=edit&id=tarif&spage=service">Действующие тарифы</a></li>
            <li class="{if $conpage_title=='distributor'}selected{/if}"><a title="Поставщики" href="?page=content_page&action=edit&id=distributor&spage=service">Поставщики</a></li>
            <li class="{if $conpage_title=='normativ'}selected{/if}"><a title="Нормативы" href="?page=content_page&action=edit&id=normativ&spage=service">Нормативы</a></li>
            <li class="{if $conpage_title=='paid'}selected{/if}"><a title="Платные услуги" href="?page=content_page&action=edit&id=paid&spage=service">Платные услуги</a></li>
        </ul>
    </li>
    <li class="{if $spage=='residents'}selected{/if}">
        <a title="Жильцам">Жильцам</a>
        <ul>
            <li class="first {if $conpage_title=='helpful_information'}selected{/if}"><a title="Полезная информация" href="?page=content_page&action=edit&id=helpful_information&spage=residents">Полезная информация</a></li>
        </ul>
    </li>
    <li class="{if $spage=='house'}selected{/if}">
        <a title="Ваш дом">Ваш дом</a>
        <ul>
            <li class="first {if $category=='house'}selected{/if}"><a title="Обслуживаемые дома" href="?page=content_page&action=edit&id=house&spage=house">Обслуживаемые дома</a></li>
        </ul>
    </li>
    <li class="{if $spage=='news'}selected{/if}">
        <a title="Новости">Новости</a>
        <ul>
            <li class="first {if $category=='1'}selected{/if}"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
            <li class="{if $category=='2'}selected{/if}"><a title="Отключения" href="?page=news&category=2&spage=news">Отключения</a></li>
            <li class="{if $category=='3'}selected{/if}"><a title="Подключения" href="?page=news&category=3&spage=news">Подключения</a></li>
            <li class="{if $category=='4'}selected{/if}"><a title="Согласования" href="?page=news&category=4&spage=news">Согласования</a></li>
            <li class="{if $category=='5'}selected{/if}"><a title="Законодательство" href="?page=news&category=5&spage=news">Законодательство</a></li>
        </ul>
    </li>
    <li class="{if $spage=='documentation'}selected{/if}">
        <a title="Документы">Документы</a>
        <ul>
            <li class="first {if $conpage_title=='documentation'}selected{/if}"><a title="Документы" href="?page=content_page&action=edit&id=documentation&spage=documentation">Документы</a></li>
        </ul>
    </li>
</ul>