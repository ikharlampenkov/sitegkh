<?php /* Smarty version Smarty-3.0.7, created on 2011-10-19 02:05:19
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:831890544e9dcdef9628f5-12236313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cc209bb994e7045125295d49233b78faee4893d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/menu.tpl',
      1 => 1318963711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '831890544e9dcdef9628f5-12236313',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="panel">
    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"  background="/img/bgleft.jpg" >
        <tr>
            <td><img src="/img/left.jpg" /></td>
            <td width="750">
                <ul>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmM" title="Главная" href="/">Главная</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmC" title="О нас" href="?page=content_page&title=about&spage=about">О нас</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmS" title="Услуги" href="?page=content_page&title=service&spage=service">Услуги</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='rates'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmL" title="Тарифы" href="?page=content_page&title=rates&spage=rates">Тарифы</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmCON" title="Новости" href="?page=news&spage=news">Новости</a</li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tma" title="Ваш дом" href="?page=house&spage=house">Ваш дом</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmO" title="Отчеты" href="?page=content_page&title=reports&spage=reports">Отчеты</a></li>
                </ul>
            </td>
            <td align="right"><img src="img/right.jpg" /></td>
        </tr>
    </table>
</div>

<div style="text-align:center">
    <ul class="sub">
        <?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='disclosure_of_information'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Раскрытие информации" href="?page=content_page&title=disclosure_of_information">Раскрытие информации</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='cabinet'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Личный кабинет" href="?page=content_page&title=cabinet">Личный кабинет</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='faq'&&isset($_smarty_tpl->getVariable('is_situation',null,true,false)->value)&&$_smarty_tpl->getVariable('is_situation')->value==1){?>active<?php }else{ ?>noactive<?php }?>"><a title="Жизненные ситуации" href="?page=faq&is_situation=1">Жизненные ситуации</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='news'&&isset($_smarty_tpl->getVariable('is_important',null,true,false)->value)&&$_smarty_tpl->getVariable('is_important')->value==1){?>active<?php }else{ ?>noactive<?php }?>"><a title="Важная информация" href="?page=news&is_important=1">Важная информация</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='general_information'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='leaders'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Коллектив" href="?page=content_page&title=leaders&spage=about">Коллектив</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='passport_office'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Паспортный стол" href="?page=content_page&title=passport_office&spage=about">Паспортный стол</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='vacancy'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Вакансии" href="?page=vacancy&spage=about">Вакансии</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='contact'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Контакты" href="?page=content_page&title=contact&spage=about">Контакты</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='eltechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Электротехнические" href="?page=content_page&title=eltechrab&spage=service">Электротехнические</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='santechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Сантехнические" href="?page=content_page&title=santechrab&spage=service">Сантехнические</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='plotnitskie_rab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Плотницкие" href="?page=content_page&title=plotnitskie_rab&spage=service">Плотницкие</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='pechnie_rab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Печные" href="?page=content_page&title=pechnie_rab&spage=service">Печные</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='otdelochnie_rab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отделочные" href="?page=content_page&title=otdelochnie_rab&spage=service">Отделочные</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='service_other'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Прочие" href="?page=content_page&title=service_other&spage=service">Прочие</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='keep_the_house'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Содержание дома" href="?page=content_page&title=keep_the_house&spage=service">Содержание дома</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='rates'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='gkh'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Жилищно-коммунальные услуги" href="?page=content_page&title=gkh&spage=rates">Жилищно-коммунальные услуги</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='communal_resources'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Коммунальные ресурсы</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='distributor'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Поставщики" href="?page=content_page&title=distributor&spage=rates">Поставщики</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='1'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='2'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отключения" href="?page=news&category=2&spage=news" >Отключения</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='3'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Подключения" href="?page=news&category=3&spage=news" >Подключения</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='4'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Согласования" href="?page=news&category=4&spage=news" >Согласования</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='5'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Законодательство" href="?page=news&category=5&spage=news" >Законодательство</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Обслуживаемые дома" href="?page=house&category=all&spage=house">Обслуживаемые дома</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='financial_statements'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports">Бухгалтерская отчетность</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='income'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отчет о прибылях и убытках" href="?page=content_page&title=income&spage=reports">Отчет о прибылях и убытках</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='reports_kap_remont'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Капитальный ремонт" href="?page=content_page&title=reports_kap_remont&spage=reports">Капитальный ремонт</a></li>
        <?php }?>
    </ul>
</div>

<script type="text/javascript">
                                var submenus = [ { id:"tmM",subs:[ { "t":"Раскрытие информации","u":"?page=content_page&title=disclosure_of_information" } , { "t":"Личный кабинет","u":"?page=content_page&title=cabinet" } , { "t":"Жизненные ситуации","u":"?page=faq&is_situation=1" } , { "t":"Важная информация","u":"?page=content_page&title=important_information" } ] } ,
    { id:"tmC",subs:[ { "t":"Общая информация","u":"?page=content_page&title=general_information&spage=about" } , { "t":"Коллектив","u":"?page=content_page&title=leaders&spage=about" } , { "t":"Паспортный стол","u":"?page=content_page&title=passport_office&spage=about" } , { "t":"Вакансии","u":"?page=vacancy&spage=about" } , { "t":"Контакты","u":"?page=content_page&title=contact&spage=about" } ] } ,
    { id:"tmS",subs:[ { "t":"Электротехнические","u":"?page=content_page&title=eltechrab&spage=service" } , { "t":"Сантехнические","u":"?page=content_page&title=santechrab&spage=service" } , { "t":"Плотницкие","u":"?page=content_page&title=plotnitskie_rab&spage=service" } , { "t":"Печные","u":"?page=content_page&title=pechnie_rab&spage=service" } , { "t":"Отделочные","u":"?page=content_page&title=otdelochnie_rab&spage=service" } , { "t":"Прочие","u":"?page=content_page&title=service_other&spage=service" } , { "t":"Содержание дома","u":"?page=content_page&title=keep_the_house&spage=service" } ] } , 
    { id:"tmL",subs:[ { "t":"Жилищно-коммунальные услуги","u":"?page=content_page&title=gkh&spage=rates" } , { "t":"Коммунальные ресурсы","u":"?page=content_page&title=communal_resources&spage=rates" } , { "t":"Поставщики","u":"?page=content_page&title=distributor&spage=rates" } ] } ,
    { id:"tmCON",subs:[ { "t":"Объявления","u":"?page=news&category=1&spage=news" } , { "t":"Отключения","u":"?page=news&category=2&spage=news" } , { "t":"Подключения","u":"?page=news&category=3&spage=news" } , { "t":"Согласования","u":"?page=news&category=4&spage=news" } , { "t":"Законодательство","u":"?page=news&category=5&spage=news" } ] } ,
    { id:"tma",subs:[ { "t":"Обслуживаемые дома","u":"?page=house&category=all&spage=house" } ] } ,
    { id:"tmO",subs:[ { "t":"Бухгалтерская отчетность","u":"?page=content_page&title=financial_statements&spage=reports" } , { "t":"Отчет о прибылях и убытка","u":"?page=content_page&title=income&spage=reports" } , { "t":"Капитальный ремонт","u":"?page=content_page&title=reports_kap_remont&spage=reports" } ] } ];
</script>