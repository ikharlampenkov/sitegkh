<?php /* Smarty version Smarty-3.0.7, created on 2012-02-22 10:26:03
         compiled from "/home/dnevnik/private/smartytemplates_gilservice/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18212881194f44604bdfc757-34995449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a69bb044807472a82c55487f7fcecfdecb170429' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_gilservice/templates/index.tpl',
      1 => 1329881158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18212881194f44604bdfc757-34995449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
<div style="padding: 20px;">
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    <?php }else{ ?>

<table>
    <tr>
        <td style="width: 60%; padding: 0px;"> 
            <div style="padding: 20px;">

                <div class="rzdtitle">Раскрытие информации</div>
                <br/>
                
                <?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>

            </div>
        </td>
        <td style="width: 40%;">
            <div style="padding: 20px;">
                <div class="rzdtitle">Новости</div>
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
" class="news_text_link"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
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

            </div>
        </td>
    </tr>
    <tr>
        <td style="height: 380px; background-image: url(i/derevoleft.jpg); background-repeat: no-repeat; background-position: left bottom; padding: 0px;">
            <div style="padding: 20px;">

                <div class="rzdtitle">Жизненные ситуации</div>
                <br/>

                <?php  $_smarty_tpl->tpl_vars['faq_t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('faq_title_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['faq_t']->key => $_smarty_tpl->tpl_vars['faq_t']->value){
?>
                    <div>
                        <img src="/i/<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['question'];?>
" class="faq_t_img"/>
                        <a href="?page=faq&action=view&id=<?php echo $_smarty_tpl->tpl_vars['faq_t']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['faq_t']->value['is_situation']==1){?>&is_situation=1<?php }?>" class="faq_t"><?php echo $_smarty_tpl->tpl_vars['faq_t']->value['question'];?>
</a>
                    </div>
                    <br/>
                <?php }} ?>

            </div>
        </td>
        <td style="height: 380px; width: 50%; padding: 0px;">
            <div style="padding: 20px;">


            </div>
        </td>
    </tr>
</table>
<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
