<?php /* Smarty version Smarty-3.0.7, created on 2012-10-17 16:29:04
         compiled from "/home/dnevnik/private/smartytemplates_zles/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2061041603507e7a6016a008-63188976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b6dd36e5f69f7dcd0e466427ddb5eb9723f10a5' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_zles/templates/admin/index.tpl',
      1 => 1350466140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2061041603507e7a6016a008-63188976',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
<?php $_template = new Smarty_Internal_Template("admin/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <?php }else{ ?>

<div class="pathway">
    <a href="/">Общая информация</a> <span class="separator">&gt;&gt;</span> О нас
</div>
<div class="phone"></div>

<div id="block" class="about">
    <h2>О нас</h2>
    <img src="/i_zles/img.jpg"/>

    <p></p>

    <div class="shadow"></div>
</div>

<div id="block" class="services">
    <h2>Услуги</h2>

    <p>В этом разделе речь пойдёт о многообразии услуг, предоставляемых управляющей компанией конечному потребителю.
        Можно в кратце пояснить на каких условиях и в какие сроки могут быть рпедоставлены эти самые услуги.</p>

    <p>Ну и конечно же следует вспомнить о том что, смысл жизни профанирует принцип восприятия, отрицая очевидное.
        Жизнь философски ассоциирует напряженный постмодернизм. Объект деятельности означает </p>
    <a href="/" class="further"></a>

    <div class="shadow"></div>
</div>

<div id="block" class="educational">
    <h2>Ликбез</h2>

    <p>В этом разжеле, можно открыть клиенту глаза на необходимые нюансы , для юолее эффективного взаимодейсвия с
        управляющей компанией.
        Данный раздел призван устранить ряд недопониманий, возникающих в процессе работы с управляющей
        компанией. </p>

    <p>Опять же можно напомнить о том что, Смысл жизни профанирует принцип восприятия, отрицая очевидное. Жизнь
        философски ассоциирует напряженный постмодернизм.
        Объект деятельности означает </p>
    <a href="/" class="further"></a>

    <div class="shadow"></div>
</div>
<div class="clear"></div>

<div id="block" class="news">
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
"
                   class="further"></a>
            <?php }?>
        </div>
    <?php }} ?>

    <div class="shadow"></div>
</div>

<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>