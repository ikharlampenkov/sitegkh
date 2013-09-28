<?php /* Smarty version Smarty-3.0.7, created on 2013-05-03 16:01:17
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152949090851837cdd6ecdf8-95336833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0bce1a65cb0d94416f7f6a5d31637050fd5602a' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/admin/index.tpl',
      1 => 1340031223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152949090851837cdd6ecdf8-95336833',
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

<img src="/ckfinder/userfiles/images/indexfoto.jpg" width="100%"/>
<table style="width: 100%; height: 100%; margin: 0 auto;">
    <tr>
        <td style="width: 70%">
            <div class="inner_block">
                <div class="rascr_text" style="text-align: justify;">
                    <?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>

                </div>

        </td>
        <td style="width: 30%; vertical-align: top;">
            <img src="/ckfinder/userfiles/images/tel2.jpg" width="80%" style="float:right"/>

            <p>&nbsp;</p>

            <div class="rzdtitle inline-block" style="margin: 0 auto; font-weight: bold; width: 80px; line-height: 40px; background: url('/i_yklesn/news.jpg') left no-repeat; padding-left: 50px; vertical-align: middle;">
                Новости
            </div>

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
                    <table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 100%; margin: 0 auto;">
                        <tbody>
                        <tr>
                            <td colspan="3" style="text-align: center;">
                                <span style="color:rgb(0,160,191);"><strong><span style="font-size: 16px;"><span style="font-family: arial,helvetica,sans-serif;">Наши партнёры:</span></span></strong></span></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <strong><span style="font-size:14px;"><span style="font-family: arial,helvetica,sans-serif;">Администрация<br/>
				г. Кемерово.</span></span></strong></td>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <strong><span style="font-size:14px;"><span style="font-family: arial,helvetica,sans-serif;">ОАО &quot;СКЭК&quot;</span></span></strong></td>
                            <td style="text-align: center; width: 150px;">
                                <span style="font-size:14px;"><span style="font-family: arial,helvetica,sans-serif;"><strong>ООО ХК &quot;СДС-Энерго&quot;</strong></span></span></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <a href="http://www.kemerovo.ru"><img alt="" src="/ckfinder/userfiles/images/adm1.jpg" style="width: 100px; height: 136px;"/></a></td>
                            <td style="text-align: center; vertical-align: middle; width: 150px;">
                                <a href="http://skek.ru/"><img alt="" src="/ckfinder/userfiles/images/eskk1.jpg" style="width: 100px; height: 100px;"/></a></td>
                            <td style="text-align: center; width: 150px;">
                                <a href="http://www.sdsenergo.ru"><img alt="" src="/ckfinder/userfiles/images/cds1.jpg" style="width: 100px; height: 75px;"/></a></td>
                        </tr>
                        </tbody>
                    </table>
                </tr>
            </table>
            <br/>
            </div>
        </td>
    </tr>
</table>

<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>