<?php /* Smarty version Smarty-3.0.7, created on 2012-11-15 16:04:33
         compiled from "/home/dnevnik/private/smartytemplates_kvkem/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160830249550a4be31481206-63414644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbbc315f2e4809323c6f98a6e77f3221cc10ed32' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_kvkem/templates/index.tpl',
      1 => 1352973870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160830249550a4be31481206-63414644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
<div style="padding: 0; width:100%; height: 100%; min-height: 500px; margin: 0 auto;">
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    <?php }else{ ?>

<div class="right_column">
    <div class="item">
        <div class="h2">Полезные ссылки</div>

        <ul>
            <li>
                <a href="/">Администрация города Кемерово</a>

                <p>Официальный сайт</p>
            </li>
            <li>
                <a href="/">Совет народных депутатов (Кемеровской области)</a>

                <p>Официальный сайт</p>
            </li>

        </ul>
    </div>

    <div class="item">
        <div class="h2">Новости</div>


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

    </div>
</div>
<div class="center">


    <div class="content_center">

        <?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>


    </div>


</div>



<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>