<?php /* Smarty version Smarty-3.0.7, created on 2011-10-09 22:12:27
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/index_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9063298244e91b9db234e09-29670381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90d1a4c2f5dbbddd00ae515da3d29be4338b6231' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/index_new.tpl',
      1 => 1318173116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9063298244e91b9db234e09-29670381',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link title="Screen" rel="stylesheet" type="text/css" href="css/main.css" media="all" />

        <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="js/main.js" ></script>
        <script type="text/javascript" language="javascript" src="js/common.js"></script>


        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
    </head>
    <body>

        <table>
            <tr>
                <td style="padding: 0px;">
                    <?php $_template = new Smarty_Internal_Template("border.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </td>
                <td class="mainblock">

                    <table>
                        <tr>
                            <td style="height: 51px; text-align: center; vertical-align: middle;">

                                <form action="/" method="post" style="margin:0px; padding:0px;">
                                    <input type="text" name="personal_account" value="Лицевой счет" onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Лицевой счет';" class="loginfield" />
                                    <input type="text" name="psw" value="Пароль"  onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Пароль';" class="loginfield" />
                                    <input type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px;" />
                                </form>

                            </td>
                        </tr>
                        <tr>
                            <td style="height: 138px; padding: 0px;">

                                <table>
                                    <tr>
                                        <td></td>
                                        <td style="width: 553px;"><?php $_template = new Smarty_Internal_Template("menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?></td>
                                        <td style="width: 226px; text-align: center; vertical-align: top;"><img src="i/gerbko.jpg" alt="" /></td>
                                    </tr>
                                </table>


                            </td>
                        </tr>
                        <tr>
                            <td style="height: 346px; padding: 0px;">

                                <table>
                                    <tr>
                                        <td class="imgl">
                                            <div class="imgl_block">
                                                <div class="rzdtitle_mini">На заметку</div>
                                                <div class="imgl_link_block">
                                                    <a href="?page=faq" class="imgl">Вопрос-ответ</a><br/>
                                                    <a href="?page=content_page&title=helpful_information" class="imgl">Полезная информация</a><br/>
                                                    <a href="?page=document" class="imgl">Документы</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="imgc">

                                            <table style="width: 368px; height: 346px;">
                                                <tr>
                                                    <td colspan="3" style="width: 368px; height: 15px; background-image: url(/i/verh.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 14px; height: 261px; background-image: url(/i/left.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                    <td style="width: 340px; height: 261px; padding: 0px;"></td>
                                                    <td style="width: 14px; height: 261px; background-image: url(/i/right.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="width: 368px; height: 69px; background-image: url(/i/niz.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                                </tr>
                                            </table>

                                        </td>
                                        <td class="imgr">
                                            <div class="imgr_block">
                                                <div class="rzdtitle_mini">Звоните</div>
                                                <div class="imgr_link_block">
                                                    <span class="imgr_title" >Справочная служба</span><br/>
                                                    <span class="imgr_text">(3842) 36-54-61</span><br/><br/>
                                                    <span class="imgr_title">Аварийная служба</span><br/>
                                                    <span class="imgr_text">(3842) 67-46-40</span><br/>
                                                    <span class="imgr_text">круглосуточно</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px;">

                                <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
                                    <div style="padding: 20px;">
                                        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                    </div>
                                <?php }else{ ?>

                                    <table>
                                        <tr>
                                            <td style="width: 404px; padding: 0px;">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Личный кабинет жильца</div>

                                                    <div class="lk_block">
                                                        <div class="lk_text">Посмотреть распечатку платежей</div>
                                                        <div class="lk_text">Посмотреть баланс платежей</div>
                                                        <div class="lk_text">Передать показания счетчиков</div>
                                                        <div class="lk_text">Подать заявку на вызов мастера</div>
                                                        <div class="lk_text">Задать вопрос управлению</div>
                                                        <div class="lk_text">Оплатить услуги</div>
                                                        <div class="lk_text">Посмотреть текущие работы по дому</div>
                                                    </div>

                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Новости</div>
                                                    <br/>
                                                    <table>
                                                        <tr><td>
                                                                <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
                                                                    <div class="news_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
 </div>
                                                                    <div class="news_title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</div>
                                                                    <?php if ($_smarty_tpl->tpl_vars['news']->value['full_text']){?>
                                                                        <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_category_id'];?>
" class="news_text_link"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</a>
                                                                    <?php }else{ ?>
                                                                        <div class="news_text_link"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</div>
                                                                    <?php }?>
                                                                    <br/> 

                                                                <?php }} ?>
                                                            </td></tr>
                                                    </table>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height: 515px; background-image: url(i/derevoleft.jpg); background-repeat: no-repeat; background-position: left bottom; padding: 0px;">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Раскрытие информации</div><br/>

                                                    <table cellpadding="5" border="0">
                                                        <tr><td class="rascr_img"><img src="/i/i_about.png" alt="" /></td><td class="rascr_text"><a title="Общая информация" href="?page=content_page&title=general_information&spage=about">Общая информация</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_money.png" alt="" /></td><td style="color:#aaaaaa">Финансово-хозяйственная деятельность</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Бухгалтерская отчетность" href="?page=content_page&title=financial_statements&spage=reports">Бухгалтерская отчетность</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Доходы" href="?page=content_page&title=income&spage=reports">Отчет о прибылях и убытках</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_bservice.png" alt="" /></td><td style="color:#aaaaaa">Информация об услугах, работах по содержанию и ремонту</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="По содержанию дома" href="?page=content_page&title=basic&spage=about">Базовые услуги</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Электротехнические" href="?page=content_page&title=platnie&spage=about">Платные</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_service.png" alt="" /></td><td style="color:#aaaaaa">Порядок и условия оказания услуг по содержание и ремонт</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Договор" href="?page=content_page&title=dogovor&spage=about">Договор управления МКД</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="План работ по содержанию и ремонту" href="?page=content_page&title=plan_rabot&spage=about">План работ по содержанию и ремонту</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Меры по снижению расходов на работу" href="?page=content_page&title=meri_rashod&spage=about">Меры по снижению расходов на работу</a></td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Нарушения" href="?page=content_page&title=narusheni&spage=about">Нарушения</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Соответствие качеству" href="?page=content_page&title=kachthestvo&spage=about">Соответствие качеству</td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_report.png" alt="" /></td><td style="color:#aaaaaa">Содержание, периодичность, результат, стоимость работ по содержанию и ремонту</td></tr>
                                                        <tr><td class="rascr_img"></td><td class="rascr_text"><a title="Тарифы на коммунальные ресурсы" href="?page=content_page&title=communal_resources&spage=rates">Тарифы на коммунальные ресурсы</a></td></tr>

                                                        <tr><td class="rascr_img"><img src="/i/i_violation.png" alt="" /></td><td class="rascr_text"><a title="Случаи привлечения к ответственности" href="?page=content_page&title=otvetstv&spage=about">Случаи привлечения к ответственности</a></td></tr>

                                                    </table>

                                                </div>
                                            </td>
                                            <td style="height: 515px; width: 308px; padding: 0px;">
                                                <div style="padding: 20px;">
                                                    <div class="rzdtitle">Жизненные ситуации</div><br/>

                                                    <?php  $_smarty_tpl->tpl_vars['faq_t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('faq_title_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['faq_t']->key => $_smarty_tpl->tpl_vars['faq_t']->value){
?>
                                                        <div>
                                                            <img src="/i/<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['question'];?>
" class="faq_t_img" />
                                                            <a  href="?page=faq&action=view&id=<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['faq_t']->value['is_situation']==1){?>&is_situation=1<?php }?>" class="faq_t" ><?php echo $_smarty_tpl->tpl_vars['faq_t']->value['question'];?>
</a>
                                                        </div><br/>
                                                    <?php }} ?>

                                                </div>
                                            </td>
                                            <td style="height: 515px; width: 288px; background-image: url(i/derevoright.jpg); background-repeat: no-repeat; background-position: right bottom; padding: 0px;">
                                                <div style="padding: 20px;"> <div class="rzdtitle">Оплата</div> </div>
                                            </td>
                                        </tr>
                                    </table>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 342px; background-color: #ebebeb;">

                                <table>
                                    <tr>
                                        <td style="width: 464px;">
                                            <div>
                                                <div style="color: #0e426b; padding: 10px 0px 0px 60px; font-size: 14pt;">Контакты</div>
                                                <div style="color: #2191d0; font-size: 28pt; padding: 50px 0px 0px 60px;"><span style="color: #5f5e5d; font-size: 12pt; vertical-align: text-top;">8 (3842)</span> 56 00 00</div>
                                            </div>
                                        </td>
                                        <td style="width: 536px; background-image: url(i/banner.jpg); background-repeat: no-repeat;">&nbsp;</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td class="nizfon">
                                <table>
                                    <tr>
                                        <td style="vertical-align: middle;"><div style="color: #ffffff; padding-left: 40px; font-size: 12pt;">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 "<?php echo $_smarty_tpl->getVariable('title')->value;?>
" </div></td>
                                        <td style="padding: 0px; text-align: right; vertical-align: middle; padding-right: 40px;"><img src="i/invoice.jpg" alt="invoice" /></td>
                                    </tr>
                                </table>


                            </td>
                        </tr>
                    </table>

                </td>
                <td style="padding: 0px;">
                    <?php $_template = new Smarty_Internal_Template("border.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </td>
            </tr>
        </table>

    </body>
</html>
