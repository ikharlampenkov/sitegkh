<?php /* Smarty version Smarty-3.0.7, created on 2013-02-27 20:56:45
         compiled from "/home/dnevnik/private/smartytemplates_zles/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:700592562512e1ead0bba02-58034615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902aaf9ff70f83fce76dc9ee52e787fcd1a4f564' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_zles/templates/index.tpl',
      1 => 1361976990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700592562512e1ead0bba02-58034615',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
<div style="background-color: #ffffff; min-height: 500px;">
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    <?php }else{ ?>

<div id="block" class="about" style="overflow-y: scroll;">

    <p><?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>
</p>

    <div class="shadow"></div>
</div>

<div id="block" class="services">
    <h2 class="h2">Услуги</h2>

    <p><?php echo $_smarty_tpl->getVariable('conpage_service')->value['content'];?>
 </p>
</div>

<div id="block" class="educational">
    <h2 class="h2">Ликбез</h2>

    <p><?php echo $_smarty_tpl->getVariable('conpage_educational')->value['content'];?>
</p>
</div>



<div class="clear"></div>
<div class="news">

    <h2>Новости</h2>

    <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
        <div class="item">
            <div class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
</div>
            <div class="title"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['news']->value['short_text'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['news']->value['full_text']){?>
                <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?page=news&action=view_news&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['news']->value['news_category_id'];?>
" class="further"></a>
            <?php }?>
        </div>
    <?php }} ?>

    <div class="shadow"></div>
</div>

<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>