<?php /* Smarty version Smarty-3.0.7, created on 2013-09-18 13:26:01
         compiled from "/home/dnevnik/private/smartytemplates_mycity/templates/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158371463852394779bb4999-91839522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37df8f903191f00f2c54ad4c7d814744c668819' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_mycity/templates/admin/menu.tpl',
      1 => 1377796832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158371463852394779bb4999-91839522',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="panel">
    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>

            <td width="553">
                <ul>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmM" title="Главная" href="/">Главная</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmC" title="О компании"> О компании</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmS" title="Услуги"> Услуги</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='residents'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmR" title="Жильцам"> Жильцам</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tma" title="Ваш дом"> Ваш дом</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmCON" title="Новости"> Новости</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='documentation'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmO" title="Документы"> Документы</a></li>
                </ul>
            </td>
        </tr>
    </table>
</div>
<ul class="sub">

    <?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='main'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Раскрытие информации в сфере МКД" href="?page=content_page&action=edit&id=disclosure_of_information&spage=main">Раскрытие информации в сфере МКД</a></li>
    <?php }?>


    <?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='about'){?>active<?php }else{ ?>noactive<?php }?>"><a title="О нас" href="?page=content_page&action=edit&id=about&spage=about">О нас</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='team'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Коллектив" href="?page=content_page&action=edit&id=team&spage=about">Коллектив</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='mode'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Режим работы" href="?page=content_page&action=edit&id=mode&spage=about">Режим работы</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='contact'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Контакты" href="?page=content_page&action=edit&id=contact&spage=about">Контакты</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='passport_office'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Паспортный стол" href="?page=content_page&action=edit&id=passport_office&spage=about">Паспортный стол</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='foto'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Фотогалерея" href="?page=content_page&action=edit&id=foto&spage=about">Фотогалерея</a></li>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='tarif'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Действующие тарифы" href="?page=content_page&action=edit&id=tarif&spage=service">Действующие тарифы</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='distributor'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Поставщики" href="?page=content_page&action=edit&id=distributor&spage=service">Поставщики</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='normativ'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Нормативы" href="?page=content_page&action=edit&id=normativ&spage=service">Нормативы</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='paid'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Платные услуги" href="?page=content_page&action=edit&id=paid&spage=service">Платные услуги</a></li>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('spage')->value=='residents'){?>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='helpful_information'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Полезная информация" href="?page=content_page&action=edit&id=helpful_information&spage=residents">Полезная информация</a></li>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>
        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='house'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Обслуживаемые дома" href="?page=content_page&action=edit&id=house&spage=house">Обслуживаемые дома</a></li>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>
        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='1'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='2'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отключения" href="?page=news&category=2&spage=news">Отключения</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='3'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Подключения" href="?page=news&category=3&spage=news">Подключения</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='4'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Согласования" href="?page=news&category=4&spage=news">Согласования</a></li>
        <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='5'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Законодательство" href="?page=news&category=5&spage=news">Законодательство</a></li>
    <?php }?>

    <?php if ($_smarty_tpl->getVariable('spage')->value=='documentation'){?>
        <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='documentation'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Документы" href="?page=content_page&action=edit&id=documentation&spage=documentation">Документы</a></li>
    <?php }?>
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