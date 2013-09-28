<?php /* Smarty version Smarty-3.0.7, created on 2013-09-03 16:28:40
         compiled from "/home/dnevnik/private/smartytemplates_reu10/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11983494195225abc8ce0673-22617632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '742c3e9dcb9a8ab88c5026bfa40132ac14d7f5d6' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu10/templates/index.tpl',
      1 => 1378200373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11983494195225abc8ce0673-22617632',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<tr>
    <td class="leftShadow"></td>
    <td valign="top">


        <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
            <table id="contentTable">
                <tr>
                    <td id="content">
                        <div class="wrapper">
                            <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        </div>
                    </td>
                </tr>
            </table>
        <?php }else{ ?>
            <table id="contentTable">
                <tr>
                    <td id="leftMenu">
                        <?php if (!empty($_smarty_tpl->getVariable('news_list',null,true,false)->value)){?>
                            <div id="news">
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
                        <?php }?>
                    </td>
                    <td id="content">
                        <div class="wrapper">
                            <?php echo $_smarty_tpl->getVariable('conpage_first')->value['content'];?>

                        </div>
                    </td>
                </tr>
            </table>
        <?php }?>


    </td>
    <td class="rightShadow"></td>
</tr>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>