<?php /* Smarty version Smarty-3.0.7, created on 2013-04-25 16:07:07
         compiled from "/home/dnevnik/private/smartytemplates_leningrad/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17651968045178f23b21a286-73837333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5a46b3dac85605ac94ca9b68650172436761088' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_leningrad/templates/menu.tpl',
      1 => 1366880822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17651968045178f23b21a286-73837333',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="panel">
    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0"  >
        <tr>

            <td width="553">
                <ul>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmM" title="Главная" href="/">Главная</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmC" title="О нас" href="?page=content_page&title=about&spage=about">О нас</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmS" title="Услуги" href="?page=content_page&title=service&spage=service">Услуги</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='rates'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmL" title="Тарифы" href="?page=content_page&title=rates&spage=rates">Тарифы</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmCON" title="Новости" href="?page=news&spage=news">Новости</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tma" title="Ваш дом" href="?page=content_page&title=perechen_domov">Ваш дом</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmO" title="Отчеты" href="?page=content_page&title=reports&spage=reports">Отчеты</a></li>
                </ul>
            </td>

        </tr>
    </table>
</div>
    <ul class="sub">
        <?php if ($_smarty_tpl->getVariable('spage')->value=='main'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='disclosure_of_information'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Раскрытие информации" href="?page=content_page&title=disclosure_of_information">Раскрытие информации</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='faq'&&isset($_smarty_tpl->getVariable('is_situation',null,true,false)->value)&&$_smarty_tpl->getVariable('is_situation')->value==1){?>active<?php }else{ ?>noactive<?php }?>"><a title="Жизненные ситуации" href="?page=faq&is_situation=1">Жизненные ситуации</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='news'&&isset($_smarty_tpl->getVariable('is_important',null,true,false)->value)&&$_smarty_tpl->getVariable('is_important')->value==1){?>active<?php }else{ ?>noactive<?php }?>"><a title="Важная информация" href="?page=news&is_important=1">Важная информация</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='general_information'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='license'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Свидетельство" href="?page=license&spage=about">Достижения</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='leaders'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Коллектив" href="?page=content_page&title=leaders&spage=about">Коллектив</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='passport_office'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Паспортный стол" href="?page=content_page&title=passport_office&spage=about">Паспортный стол</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='vacancy'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Вакансии" href="?page=vacancy&spage=about">Вакансии</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='contact'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Контакты" href="?page=content_page&title=contact&spage=about">Контакты</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='eltechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Электротех.раб." href="?page=content_page&title=eltechrab&spage=service">Электротех.раб.</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='santechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Сантех.раб." href="?page=content_page&title=santechrab&spage=service">Сантех.раб.</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='santechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отдел.раб" href="?page=content_page&title=otdelrab">Отдел.раб.</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='santechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Плот.раб." href="?page=content_page&title=plotrab">Плот.раб.</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='keep_the_house'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Содержание дома" href="?page=content_page&title=keep_the_house&spage=service">Содержание дома</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='where_to_pay'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Где оплатить?" href="?page=content_page&title=where_to_pay&spage=service">Где оплатить?</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='rates'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='gkh'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Тарифы" href="?page=content_page&title=gkh&spage=rates">Тарифы</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='distributor'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Поставщики" href="?page=content_page&title=distributor&spage=rates">Поставщики</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='where_to_pay'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Где оплатить?" href="?page=content_page&title=where_to_pay&spage=rates">Где оплатить?</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='1'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Объявления" href="?page=news&category=1&spage=news">Объявления</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='2'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отключения" href="?page=news&category=2&spage=news" >Отключения</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='3'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Подключения" href="?page=news&category=3&spage=news" >Подключения</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='4'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Согласования" href="?page=news&category=4&spage=news" >Согласования</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='5'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Законодательство" href="?page=news&category=5&spage=news" >Законодательство</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Обслуживаемые дома" href="?page=content_page&title=perechen_domov">Обслуживаемые дома</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Констр.особенности" href="?page=content_page&title=constr">Констр.особенности</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>active<?php }else{ ?>noactive<?php }?>"><a title="ОДН согл. ППР 307" href="?page=content_page&title=odn307">ОДН согл. ППР 307</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>active<?php }else{ ?>noactive<?php }?>"><a title="ОДН согл. ППР 354" href="?page=content_page&title=odn354">ОДН согл. ППР 354</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='financial_statements'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Бухгалтерская отчетность" href="?page=content_page&title=balans2011">Бухгалтерская отчетность </a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='income'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отчет о прибылях и убытках" href="?page=content_page&title=ot2011">Отчет о прибылях и убытках</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='income'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Отч" href="/ckfinder/userfiles/files/ot2011(1).xls">Отчёт о выполненных обязательствах</a></li>
        <?php }?>
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