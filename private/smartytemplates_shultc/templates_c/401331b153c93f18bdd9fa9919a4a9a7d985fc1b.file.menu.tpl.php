<?php /* Smarty version Smarty-3.0.7, created on 2012-04-10 11:35:52
         compiled from "/home/dnevnik/private/smartytemplates_shultc/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19253750244f83aa98e84973-58362887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '401331b153c93f18bdd9fa9919a4a9a7d985fc1b' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_shultc/templates/menu.tpl',
      1 => 1334026177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19253750244f83aa98e84973-58362887',
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
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='about'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmC" title="О нас" href="?page=content_page&title=about">О нас</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmS" title="Услуги" href="?page=content_page&title=service&spage=service">Услуги</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='rates'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmL" title="Тарифы" href="?page=content_page&title=rates&spage=rates">Тарифы</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='news'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmCON" title="Новости" href="?page=news&spage=news">Новости</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='house'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tma" title="Ваш дом" href="?page=content_page&title=perechen_domov">Ваш дом</a></li>
                    <li class="<?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>active<?php }else{ ?>noactive<?php }?>"><a id="tmO" title="Отчеты" href="?page=content_page&title=reports">Отчеты</a></li>
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
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='license'){?>active<?php }else{ ?>noactive<?php }?>"><a title="О нас" href="?page=license&spage=about">О нас</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='leaders'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Коллектив" href="?page=content_page&title=leaders&spage=about">Коллектив</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='passport_office'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Паспортный стол" href="?page=content_page&title=passport_office&spage=about">Паспортный стол</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('page')->value=='vacancy'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Вакансии" href="?page=vacancy&spage=about">Вакансии</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='contact'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Контакты" href="?page=content_page&title=contact&spage=about">Контакты</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='service'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='eltechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Электротехнические работы" href="?page=content_page&title=eltechrab&spage=service">Электротехнические работы</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='santechrab'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Сантехнические работы" href="?page=content_page&title=santechrab&spage=service">Сантехнические работы</a></li>
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
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Обслуживаемые дома" href="?page==content_page&title=perechen_domov">Обслуживаемые дома</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('category')->value=='plan'){?>active<?php }else{ ?>noactive<?php }?>"><a title="План проводимых работ" href="?page=content_page&title=plan_prov_rabot&spage=house">План проводимых работ</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('spage')->value=='reports'){?>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='financial_statements'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Книга доходов и расходов" href="?page=content_page&title=book">Книга доходов и расходов</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='financial_statements'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Фин. отчёт 2010" href="?page=content_page&title=ot.2010">Фин. отчёт 2010</a></li>
            <li class="<?php if ($_smarty_tpl->getVariable('conpage_title')->value=='income'){?>active<?php }else{ ?>noactive<?php }?>"><a title="Фин. отчёт 2011" href="?page=content_page&title=ot.2011">Фин. отчёт 2011</a></li>
        <?php }?>
    </ul>


<script type="text/javascript">
                                var submenus = [ { id:"tmM",subs:[ { "t":"Раскрытие информации","u":"?page=content_page&title=disclosure_of_information" } , { "t":"Жизненные ситуации","u":"?page=faq&is_situation=1" } , { "t":"Важная информация","u":"?page=content_page&title=important_information" } ] } ,
    { id:"tmC",subs:[ { "t":"Общая информация","u":"?page=content_page&title=general_information&spage=about" } , { "t":"О нас","u":"?page=content_page&title=about" } , { "t":"Коллектив","u":"?page=content_page&title=leaders&spage=about" } , { "t":"Паспортный стол","u":"?page=content_page&title=passport_office&spage=about" } , { "t":"Вакансии","u":"?page=vacancy&spage=about" } , { "t":"Контакты","u":"?page=content_page&title=contact&spage=about" } ] } ,
    { id:"tmS",subs:[ { "t":"Электротехнические работы","u":"?page=content_page&title=eltechrab&spage=service" } , { "t":"Сантехнические работы","u":"?page=content_page&title=santechrab&spage=service" } , { "t":"Содержание дома","u":"?page=content_page&title=keep_the_house&spage=service" } , { "t":"Где оплатить?","u":"?page=content_page&title=where_to_pay&spage=service" } ] } ,
    { id:"tmL",subs:[ { "t":"Тарифы","u":"?page=content_page&title=gkh&spage=rates" } , { "t":"Поставщики","u":"?page=content_page&title=distributor&spage=rates" } , { "t":"Где оплатить?","u":"?page=content_page&title=where_to_pay&spage=rates" } ] } ,
    { id:"tmCON",subs:[ { "t":"Объявления","u":"?page=news&category=1&spage=news" } , { "t":"Отключения","u":"?page=news&category=2&spage=news" } , { "t":"Подключения","u":"?page=news&category=3&spage=news" } , { "t":"Согласования","u":"?page=news&category=4&spage=news" } , { "t":"Законодательство","u":"?page=news&category=5&spage=news" } ] } ,
    { id:"tma",subs:[ { "t":"Обслуживаемые дома","u":"?page=content_page&title=perechen_domov" } , { "t":"План проводимых работ","u":"?page=content_page&title=plan_prov_rabot&spage=house" } ] } ,
    { id:"tmO",subs:[ { "t":"Книга доходов и расходов","u":"?page=content_page&title=book" } , { "t":"Фин.отчёт 2010","u":"?page=content_page&title=ot.2010" } , { "t":"Фин.отчёт 2011","u":"?page=content_page&title=ot.2011" }] } ];
</script>