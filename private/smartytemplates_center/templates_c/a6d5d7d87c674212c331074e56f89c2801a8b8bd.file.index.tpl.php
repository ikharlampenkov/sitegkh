<?php /* Smarty version Smarty-3.0.7, created on 2012-06-09 13:30:06
         compiled from "/home/dnevnik/private/smartytemplates_center/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19967253924fd2df5ec5e598-41280605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6d5d7d87c674212c331074e56f89c2801a8b8bd' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_center/templates/admin/index.tpl',
      1 => 1339219697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19967253924fd2df5ec5e598-41280605',
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
        <?php $_template = new Smarty_Internal_Template("admin/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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