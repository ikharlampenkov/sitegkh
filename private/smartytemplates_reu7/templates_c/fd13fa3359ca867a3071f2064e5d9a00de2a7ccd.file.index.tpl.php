<?php /* Smarty version Smarty-3.0.7, created on 2012-04-09 15:16:27
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10096948744f829adb63eb53-36145361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd13fa3359ca867a3071f2064e5d9a00de2a7ccd' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/admin/index.tpl',
      1 => 1333959031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10096948744f829adb63eb53-36145361',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"></meta>
        <meta name="DESCRIPTION" content="<?php echo $_smarty_tpl->getVariable('description')->value;?>
"></meta>
        <meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
"></meta>
        <meta name="author-corporate" content=""></meta>
        <meta name="publisher-email" content=""></meta>

        <link title="Screen" rel="stylesheet" type="text/css" href="/css/css.css" media="all"</link>

        <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/js/main.js" ></script>
        <script type="text/javascript" language="javascript" src="/js/common.js"></script>

        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 Административный раздел</title>

        <style type="text/css">
            table {
    width: 100%;
}

            tr {
   vertical-align: top;
}

            input {
    width: 100%;
}

            textarea {
    width: 100%;
    height: 200px;
}

            #save {
    width: 100px;
}

        </style>

    </head>
    <body>
<?php $_template = new Smarty_Internal_Template("error_msg.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

        <table width="100%" height="100%" cellpadding="5" cellspacing="0" border="0">
            <tr>
                <td style="border:#999999 1px solid;font-size:14px;" align="center">SMS-сервисы: <a href="?page=messaging">SMS-рассылка сообщений</a> <br>Телефонные автоинформаторы:</b> <a href="#" style="color:#aaaaaa">Задолженности</a> / <a href="#" style="color:#aaaaaa">Передача показаний счетчиков</a> <br>Телефонная обзвонка: <a href="#" style="color:#aaaaaa">Счет-фактура по телефону</a> / <a href="#" style="color:#aaaaaa">Информация о задолженности</a> / <a href="#" style="color:#aaaaaa">Опрос жильцов</a>
            <br>Разделы Интернет-сайта:<a href="?page=content_page">Контентная страница</a> / <a href="?page=news">Новости</a> / <a href="?page=meters">Счетчики</a> / <a href="?page=house">Дома</a> / <a href="?page=license">Достижения</a> / <a href="?page=personal">Персонал</a> / <a href="?page=vacancy">Вакансии</a> / <a href="?page=document">Документы</a> / <a href="?page=faq">Вопросы и ответы</a> / <a href="?page=personal_account">Лицевые счета</a> / <a href="?page=support&category=request_master">Заявка на вызов мастера</a> / <a href="?page=support&category=question">Задать вопрос</a>  </td>
            </tr>
            <tr>
                <td height="200" background="/img/bgshapka.jpg">

                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="466">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td height="30" class="topmenu">
                                            &nbsp;<img src="/img/karta.gif" align="absmiddle" /><img src="/img/mail.gif" align="absmiddle" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="?page=faq">Вопрос-ответ</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="?page=content_page&action=edit&id=helpful_information">Полезная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="?page=document">Документы</a>
                                        </td>
                                    </tr>
                                    <tr><td height="170" width="466"><img src="/img/podlogo.jpg" /></td></tr>
                                </table>
                            </td>
                            <td width="195" background="/img/podlogo2.jpg" style="padding-left:60px;" valign="top">
                                <br/>
                                <span style="font-size: 14px">Диспетчерская служба</span><br/>
                                <span style="font-size: 20px; color: #51828e;">36-54-61</span><br/><br/>
                                <span style="font-size: 14px">Аварийная служб</span><br/>
                                <span style="font-size: 20px; color: #51828e;">36-66-83</span><br/>
                            </td>
                            <td width="159" background="img/vhod.jpg" valign="top" style="padding-left: 15px;" align="right">
                                <br/><br/><br/>

                                <div><?php echo $_smarty_tpl->getVariable('user')->value;?>
</div> <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>

                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td>

                    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="bgmenu" height="82">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="885" valign="top">

                                <?php $_template = new Smarty_Internal_Template("admin/menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

                                </div>

                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td height="30px">&nbsp;</td>
            </tr>
            <tr>
                <td height="400px" style="border-bottom: 1px solid #d3d4ba" valign="top">

                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="885" valign="top">

                            <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
                                <?php $_template = new Smarty_Internal_Template("admin/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                            <?php }else{ ?>

                                 <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" style="font-size: 12px;">
                                    <tr>

                                        <td width="32%" valign="top">
                                            <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Личный кабинет жильца</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
                                            <table cellpadding="5" border="0" width="100%">
                                            <tr><td><img src="/img/1.gif"></td><td class="pem">Посмотреть распечатку платежей</td></tr>
                                            <tr><td><img src="/img/2.gif"></td><td class="pom">Посмотреть баланс платежей</td></tr>
                                            <tr><td><img src="/img/4.gif"></td><td class="pem">Передать показания счетчиков</td></tr>
                                            <tr><td><img src="/img/5.gif"></td><td class="pom">Подать заявку на вызов мастера</td></tr>
                                            <tr><td><img src="/img/6.gif"></td><td class="pem">Задать вопрос управлению</td></tr>
                                            <tr><td><img src="/img/3.gif"></td><td class="pom">Оплатить услуги</td></tr>
                                            <tr><td><img src="/img/6.gif"></td><td class="pem">Посмотреть текущие работы по дому</td></tr>
                                            </table>
                                            <br>
                                            <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Как получить доступ?</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
                                            <div style="font-weight: bold; text-align:center">Три простых шага:</div>
                                            <table cellpadding="5" border="0" width="100%">
                                            <tr><td>1</td><td class="pem">Прийти в РЭУ с паспортом<br><span style="color:#aaaaaa">(можно при оплате)</td></tr>
                                            <tr><td>2<td class="pom">Подписать согласие на доступ к личному кабинету (3 мин.). Получить пароль.</td></tr>
                                            <tr><td>3<td class="pem">Войти в личный кабинет.</td></tr>
                                            </table><br>
                                            <div style="text-align:center">Все справки по работе с личным кабинетом по телефону: 764-999</div>
                                        </td>
                                        <td width="200">&nbsp;</td>

                                        <td width="32%" valign="top">
                                            <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Раскрытие информации</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

                                            <table cellpadding="5" border="0">
                                                <tr><td class="pem"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></td>

                                                <tr><td style="color:#aaaaaa">Финансово-хозяйственная деятельность</td></tr>
                                                <tr><td class="pem"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports">Бухгалтерская отчетность</a></td></tr>
                                                <tr><td class="pem"><a title="Доходы" href="?page=content_page&title=income&spage=reports">Отчет о прибылях и убытках</a></td></tr>

                                                <tr><td style="color:#aaaaaa">Информация об услугах, работах по содержанию и ремонту</li>
                                                <tr><td class="pem"><a title="По содержанию дома" href="?page=content_page&title=basic&spage=about">Базовые услуги</a></td></tr>
                                                <tr><td class="pem"><a title="Электротехнические" href="?page=content_page&title=platnie&spage=about">Платные</a></td></tr>

                                                <tr><td style="color:#aaaaaa">Порядок и условия оказания услуг по содержание и ремонт</li>
                                                <tr><td class="pem"><a title="Договор" href="?page=content_page&title=dogovor&spage=about">Договор управления МКД</a></td></tr>
                                                <tr><td class="pem"><a title="План работ по содержанию и ремонту" href="?page=content_page&title=plan_rabot&spage=about">План работ по содержанию и ремонту</a></td></tr>
                                                <tr><td class="pem"><a title="Меры по снижению расходов на работу" href="?page=content_page&title=meri_rashod&spage=about">Меры по снижению расходов на работу</a></td></tr>
                                                <tr><td class="pem"><a title="Нарушения" href="?page=content_page&title=narusheni&spage=about">Нарушения</td></tr>
                                                <tr><td class="pem"><a title="Соответствие качеству" href="?page=content_page&title=kachthestvo&spage=about">Соответствие качеству</td></tr>

                                                <tr><td style="color:#aaaaaa">Содержание, периодичность, результат, стоимость работ по содержанию и ремонту</td></tr>
                                                <tr><td class="pem"><a title="Тарифы на коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Тарифы на коммунальные ресурсы</a></td></tr>

                                                <tr><td class="pem"><a title="Случаи привлечения к ответственности" href="?page=content_page&title=otvetstv&spage=about">Случаи привлечения к ответственности</a></td></tr>

                                            </table>
                                        </td>
                                        <td width="200">&nbsp;</td>

                                        <td width="32%" valign="top">
                                            <div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Важная информация</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

                                            <table cellpadding="5" border="0">


                                            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
                                            <tr><td style="color:#aaaaaa"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
 &nbsp;</tr></td>
                                            <tr><td class="pem"><b><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</b><br><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>

                                            <?php if ($_smarty_tpl->tpl_vars['news']->value['full_text']){?><br><a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_category_id'];?>
">подробнее...</a><?php }?></tr></td>



                                           <?php }} ?>
                                           </table>

                                        </td>
                                    </tr>
                                </table>

                            <?php }?>

                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td style="background-color: #89b4be; height: 300px; border-top: 1px solid white">

                    <table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td>&nbsp;</td>
                            <td width="604" valign="top">
                                <br/>
                                <div style="color: #fff; font-size: 21px;">Жизненные ситуации</div>

                                <br/>
                                <?php  $_smarty_tpl->tpl_vars['faq_t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('faq_title_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['faq_t']->key => $_smarty_tpl->tpl_vars['faq_t']->value){
?>

                                <div><a href="?page=faq&is_situation=1#<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['id'];?>
" style="color: #fff; font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['faq_t']->value['question'];?>
</a></div>
                                <br/>
                                <?php }} ?>
                            </td>
                            <td width="281" valign="bottom"><img src="/img/banner.gif" /></td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td style="height: 100px">&nbsp;</td>
            </tr>
        </table>
    </body>
</html>