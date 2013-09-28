<?php /* Smarty version Smarty-3.0.7, created on 2013-06-25 09:38:52
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107423328751c902bcca6211-03115529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec7d908f6ab44e06e5375045c88ddc823d060b3' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/index.tpl',
      1 => 1372127927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107423328751c902bcca6211-03115529',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
<div style="padding: 20px 50px 0px 50px; width:900px; height: 100%; min-height: 500px; margin: 0 auto;">
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    <?php }else{ ?>
       
<table style="width: 900px; height: 100%; margin: 0 auto;">
    <tr>
        <td style="width: 40%">
            <div class="inner_block">

                
<div class="rzdtitle"><img src="/i_yklesn/news.jpg"/>&nbsp;Новости</div>
                <br/>
                <table>
                    <tr>
                        <td>
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
"
                                       class="news_text_link"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</a>
                                    <?php }else{ ?>
                                    <div class="news_text_link"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</div>
                                <?php }?>
                                <br/>

                            <?php }} ?>
                        </td>
                    </tr>
                </table>
                <br/>

                <div class="rzdtitle">Полезные ссылки</div>

                <table cellspacing="4" border="0">
                	<tr>
                                      <td><img src="/i_yklesn/ako.jpg" boreder="0" width="60" height="60"/></td>
                         <td valign="middle"><a href="http://www.ako.ru/default.asp"  style="font-size: 14px; color: black">Администрация&nbsp;Кемеровской области</span></span></a></p></td>
                    </tr>
                    <tr>
                        <td><img src="/i_yklesn/kem.jpg" boreder="0" width="60" height="60"/></td>
                        <td style="vertical-align: middle;"><a href="http://www.kemerovo.ru/" class="lk_text" style="font-size: 14px; color: black">Администрация города Кемерово</a></td>
                    </tr>
					<tr>
                        <td><img src="/i_yklesn/ref_gkh.gif" boreder="0" width="60" height="60"/></td>
                        <td style="vertical-align: middle;"><a href="http://www.reformagkh.ru/mymanager/company?nid=7050429&tid=2382789" class="lk_text" style="font-size: 14px; color: black">Реформа ЖКХ</a></td>
                    </tr>
                </table>
               


            </div>
        </td>
        <td style="width: 60%">
            <div class="inner_block">

                <div class="rzdtitle"><img src="/i_yklesn/info.png"/>&nbsp;Об организации</div>
             		
 					<div class="rascr_text" style="text-align: justify;">
 					<img src="/i_yklesn/Untitled-2.jpg" align="right" style="padding-left: 10px; padding-bottom: 10px;"/>
                    <p><b>ООО «Управляющая компания «Лесная поляна»</b> осуществляет эксплуатацию жилищного фонда на территории жилого района Лесная поляна г.Кемерово с октября 2008года.<br/><br/>
                    <p>В ноябре 2011 года включена в Реестр энергоснабжающих организаций Кемеровской области, в отношении которых осуществляется государственное регулирование  по поставке, передаче и распределению тепловой энергии.</p>
                    <p>Управляющая компания «Лесная поляна» – молодая, перспективная компания. Мы располагаем штатом высоквалифицированных специалистов,  имеющих большой опыт в сфере управления, обслуживания и эксплуатации  объектов жилищного фонда. 
В настоящий момент в управлении находятся <b>19</b> жилых многоквартирных домов общей площадью <b>107,5 тыс. кв.м.</b><p/>
                    
                    <p><b>Основные функции Управляющей компании:</b><p/>
                    <ul>
                    <li>обеспечение бесперебойного функционирования инженерных систем и оборудования дома;</li>
                    <li>комплексная уборка мест общего пользования дома и придомовой территории;</li>
                    <li>вывоз бытового и крупногабаритного мусора;</li>
                    <li>проведение работ по дезинсекции, дератизации;</li>
                    <li>организация круглосуточного аварийного - диспетчерского обслуживания;</li>
                    <li>предоставление коммунальных услуг (тепло-, водо-, электроснабжение);</li>
                    <li>осуществление регистрационного учета граждан.</li>
                    </ul>
                    <b>Наша цель –</b> создавать и поддерживать качественную систему эксплуатации жилищного фонда, максимально комфортные условия проживания граждан и рациональный расход денежных средств собственников жилья.
                    <p>Мы стараемся найти индивидуальный подход к каждому и надеемся на эффективное и продолжительное сотрудничество!<p/>
                    
               		<br/>

        </div>
            </div>
        </td>
    </tr>
</table>


</td>
</tr>
<tr>
<td style="height: 60px; padding: 0px;">

    <table style="width: 900px; margin: 0 auto;">
        <tr>
            <td style="width: 50%; height: 54px; background-image: url(/i_yklesn/center_fon_left_1.jpg); background-repeat: no-repeat; padding: 0px;"></td>
            <td style="width: 50%; height: 54px; background-image: url(/i_yklesn/center_fon_right_1.jpg); background-repeat: no-repeat; padding: 0px;"></td>
        </tr>
        <tr>
            <td style="width: 50%; background-image: url(/i_yklesn/center_fon_left_2.jpg); background-color: #feeaab; background-repeat: no-repeat; padding: 0px;">

                <div class="inner_block_2">
                    &nbsp;
                </div>

            </td>
            <td style="width: 50%; background-image: url(/i_yklesn/center_fon_right_2.jpg); background-color: #feeaab; background-repeat: no-repeat; padding: 0px;">

                <div class="inner_block_3">
                </div>

            </td>
        </tr>
    </table>

<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
