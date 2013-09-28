<?php /* Smarty version Smarty-3.0.7, created on 2013-08-07 14:06:31
         compiled from "/home/dnevnik/private/smartytemplates_reu1/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6178183295201f1f7c16895-08888752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2d7c85a0a479edb159313cd40760f1f9ee356d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu1/templates/admin/index.tpl',
      1 => 1375628394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6178183295201f1f7c16895-08888752',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
    <div class="page center">
        <?php $_template = new Smarty_Internal_Template("admin/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
<?php }else{ ?>
    <div class="page center">
        <div class="content">
            <div class="artical">

                <h2>Раскрытие информации</h2>

                <div class="clear"></div>
                <p><?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>
</p>
            </div>
        </div>

        <div class="sidebar">
            <div class="news">
                <h2>Новости</h2>
                <?php if ($_smarty_tpl->getVariable('news_list')->value){?>
                    <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
                        <div class="item">

                            <img src="/i_plus/news.jpg"/>

                            <div class="description">
                                <div class="title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</div>
                                <div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
</div>
                                <p>
                                    <?php if ($_smarty_tpl->tpl_vars['news']->value['full_text']){?>
                                        <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_category_id'];?>
" class="news_text_link"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</a>
                                    <?php }else{ ?>
                                        <?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>

                                    <?php }?>
                                </p>
                            </div>
                        </div>
                    <?php }} ?>
                <?php }?>

                <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news" class="further"></a>

                <div class="clear"></div>
            </div>
        </div>


    </div>
<?php }?>

<div class="clear"></div>
<div class="pad"></div>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>