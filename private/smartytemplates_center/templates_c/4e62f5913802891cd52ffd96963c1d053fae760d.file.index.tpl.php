<?php /* Smarty version Smarty-3.0.7, created on 2012-07-25 15:58:27
         compiled from "/home/dnevnik/private/smartytemplates_center/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:555163785500fb533380f83-53467685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e62f5913802891cd52ffd96963c1d053fae760d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_center/templates/index.tpl',
      1 => 1343206705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555163785500fb533380f83-53467685',
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

<div class="content">

    <h1 class="text_heading">
        О нас
    </h1>

    <div class="cont_text">
        <?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>

    </div>
</div>
<div class="sidebar">
    <h1 class="text_heading">Новости</h1>


    <?php if ($_smarty_tpl->getVariable('news_list')->value!==false){?>
        <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
            <div class="item">
                <div class="img"><img src="/i_center/news.jpg"/></div>
                <div class="descript">
                    <p class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</p>
                    <p class="title"><a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a></p>
                </div>
            </div>
        <?php }} ?>
    <?php }?>

</div>
<div class="clear"></div>
<div class="map">
    Карта проезда
    <div class="y_map"></div>
</div>
<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>