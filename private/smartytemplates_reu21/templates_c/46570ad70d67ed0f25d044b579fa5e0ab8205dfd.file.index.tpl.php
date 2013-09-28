<?php /* Smarty version Smarty-3.0.7, created on 2011-10-18 23:45:39
         compiled from "F:/www/gkh/private/smartytemplates_site/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121734e9dad33624185-46908122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46570ad70d67ed0f25d044b579fa5e0ab8205dfd' => 
    array (
      0 => 'F:/www/gkh/private/smartytemplates_site/templates/admin/index.tpl',
      1 => 1318176720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121734e9dad33624185-46908122',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'F:\www\gkh\private\classes\smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
    <div style="padding: 20px;">
        <?php $_template = new Smarty_Internal_Template("admin/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>