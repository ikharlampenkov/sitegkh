<?php /* Smarty version Smarty-3.0.7, created on 2013-09-27 10:41:40
         compiled from "/home/s/sibdnevnik/sitegkh/private/../private/smartytemplates_reu1/templates/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:568677410524528a468fbe3-45808945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b902b46c8c67354e011d9ab1c37fbc3871839eaa' => 
    array (
      0 => '/home/s/sibdnevnik/sitegkh/private/../private/smartytemplates_reu1/templates/admin/menu.tpl',
      1 => 1380213831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568677410524528a468fbe3-45808945',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul>
    <li class="first <?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>selected<?php }?>">
        <a title="Главная" href="/">Главная</a>
        <ul>
            <li class="first <?php if ($_smarty_tpl->getVariable('conpage_title')->value=='main'){?>selected<?php }?>"><a title="Раскрытие информации в сфере МКД" href="?page=content_page&action=edit&id=disclosure_of_information&spage=main">Раскрытие информации в сфере МКД</a></li>
        </ul>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>selected<?php }?>">
        <a title="О компании">О компании</a>
        <ul>
            <li class="first <?php if ($_smarty_tpl->getVariable('conpage_title')->value=='about'){?>selected<?php }?>"><a title="О нас" href="?page=content_page&action=edit&id=about&spage=about">О нас</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='team'){?>selected<?php }?>"><a title="Коллектив" href="?page=content_page&action=edit&id=team&spage=about">Коллектив</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='mode'){?>selected<?php }?>"><a title="Режим работы" href="?page=content_page&action=edit&id=mode&spage=about">Режим работы</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='contact'){?>selected<?php }?>"><a title="Контакты" href="?page=content_page&action=edit&id=contact&spage=about">Контакты</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='passport_office'){?>selected<?php }?>"><a title="Паспортный стол" href="?page=content_page&action=edit&id=passport_office&spage=about">Паспортный стол</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='foto'){?>selected<?php }?>"><a title="Фотогалерея" href="?page=content_page&action=edit&id=foto&spage=about">Фотогалерея</a></li>
        </ul>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>selected<?php }?>">
        <a title="Услуги">Услуги</a>
        <ul>
            <li class="first <?php if ($_smarty_tpl->getVariable('conpage_title')->value=='tarif'){?>selected<?php }?>"><a title="Действующие тарифы" href="?page=content_page&action=edit&id=tarif&spage=service">Действующие тарифы</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='distributor'){?>selected<?php }?>"><a title="Поставщики" href="?page=content_page&action=edit&id=distributor&spage=service">Поставщики</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='normativ'){?>selected<?php }?>"><a title="Нормативы" href="?page=content_page&action=edit&id=normativ&spage=service">Нормативы</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='paid'){?>selected<?php }?>"><a title="Платные услуги" href="?page=content_page&action=edit&id=paid&spage=service">Платные услуги</a></li>
        </ul>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='residents'){?>selected<?php }?>">
        <a title="Жильцам">Жильцам</a>
        <ul>
            <li class="first <?php if ($_smarty_tpl->getVariable('conpage_title')->value=='helpful_information'){?>selected<?php }?>"><a title="Полезная информация" href="?page=content_page&action=edit&id=helpful_information&spage=residents">Полезная информация</a></li>
        </ul>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>selected<?php }?>">
        <a title="Ваш дом">Ваш дом</a>
        <ul>
            <li class="first <?php if ($_smarty_tpl->getVariable('category')->value=='house'){?>selected<?php }?>"><a title="Обслуживаемые дома" href="?page=content_page&action=edit&id=house&spage=house">Обслуживаемые дома</a></li>
        </ul>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>selected<?php }?>">
        <a title="Новости">Новости</a>
        <ul>
            <li class="first <?php if ($_smarty_tpl->getVariable('category')->value=='1'){?>selected<?php }?>"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='2'){?>selected<?php }?>"><a title="Отключения" href="?page=news&category=2&spage=news">Отключения</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='3'){?>selected<?php }?>"><a title="Подключения" href="?page=news&category=3&spage=news">Подключения</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='4'){?>selected<?php }?>"><a title="Согласования" href="?page=news&category=4&spage=news">Согласования</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='5'){?>selected<?php }?>"><a title="Законодательство" href="?page=news&category=5&spage=news">Законодательство</a></li>
        </ul>
    </li>
    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='documentation'){?>selected<?php }?>">
        <a title="Документы">Документы</a>
        <ul>
            <li class="first <?php if ($_smarty_tpl->getVariable('conpage_title')->value=='documentation'){?>selected<?php }?>"><a title="Документы" href="?page=content_page&action=edit&id=documentation&spage=documentation">Документы</a></li>
        </ul>
    </li>
</ul>