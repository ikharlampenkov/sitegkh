<?php /* Smarty version Smarty-3.0.7, created on 2012-11-15 12:18:16
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177038466950a48928a166d4-49270724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56d818ad152823d60c5496d1caf26c3a81fc57c3' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/admin/index.tpl',
      1 => 1321601215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177038466950a48928a166d4-49270724',
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
<?php $_template = new Smarty_Internal_Template("admin/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    <?php }else{ ?>

<table style="width: 900px; height: 100%; margin: 0 auto;">
    <tr>
        <td style="width: 50%">
            <div class="inner_block">

                <div class="rzdtitle"><img src="/i_yklesn/info.png"/>&nbsp;Об организации</div>
                <br/>

                <div class="rascr_text" style="text-align: justify;">
                    <b>ООО «Управляющая компания «Лесная поляна»</b> осуществляет эксплуатацию жилищного фонда на территории жилого района Лесная поляна г.Кемерово с октября 2008года.<br/><br/>
                    <b>Основные функции Управляющей компании:</b><br/>
                    <ul>
                    <li>обеспечение бесперебойного функционирования инженерных систем и оборудования дома;</li>
                    <li>комплексная уборка мест общего пользования дома и придомовой территории;</li>
                    <li>вывоз бытового и крупногабаритного мусора;</li>
                    <li>проведение работ по дезинсекции, дератизации;</li>
                    <li>организация круглосуточного аварийного - диспетчерского обслуживания;</li>
                    <li>предоставление коммунальных услуг (тепло-, водо-, электроснабжение);</li>
                    <li>осуществление регистрационного учета граждан.</li>
                    </ul><br/>
                    В настоящий момент в управлении находятся 15 жилых многоквартирных домов общей площадью <b>47,7 тыс. м<sup>2</sup></b>.
                </div>
                <br/>


            </div>
        </td>
        <td style="width: 50%">
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

                <table cellspacing="4">
                    <tr>
                        <td><img src="/i_yklesn/ako.jpg" boreder="0" width="60" height="60"/></td>
                        <td style="vertical-align: middle;"><a href="http://www.ako.ru/" class="lk_text">Администрация
                            Кемеровской области</a></td>
                    </tr>
                    <tr>
                        <td><img src="/i_yklesn/kem.jpg" boreder="0" width="60" height="60"/></td>
                        <td style="vertical-align: middle;"><a href="http://www.kemerovo.ru/" class="lk_text">Администрация
                            города Кемерово</a></td>
                    </tr>
                </table>
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