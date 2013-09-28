<?php /* Smarty version Smarty-3.0.7, created on 2013-03-27 16:29:23
         compiled from "/home/dnevnik/private/smartytemplates_molod/templates/share/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18474618285152ca034b2f80-49740238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1ad577d51bc8701fd696f4cf2c8d80fc2ab7b8' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_molod/templates/share/head.tpl',
      1 => 1364380159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18474618285152ca034b2f80-49740238',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link title="Screen" rel="stylesheet" type="text/css" href="/css/main.css" media="all"/>
    <link title="Screen" rel="stylesheet" type="text/css" href="/js/jqueryui/css/redmond/jquery-ui.css"/>

    <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.placeholder.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/main.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>

    <?php if (isset($_smarty_tpl->getVariable('firstPage',null,true,false)->value)&&$_smarty_tpl->getVariable('firstPage')->value){?>
        <script type="text/javascript" language="javascript" src="/js/jqueryui/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/js/firstPage.js"></script>
    <?php }?>

    <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
</head>
<body>

<?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?><?php $_template = new Smarty_Internal_Template("admin/top_menu.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

<table>
    <tr>
        <td style="padding: 0px;">
            <?php $_template = new Smarty_Internal_Template("border.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </td>
        <td class="mainblock">

            <table>
                <tr>
                    <td style="height: 51px; text-align: center; vertical-align: middle;">
                        <?php if ($_smarty_tpl->getVariable('login')->value){?>
                            <span><?php echo $_smarty_tpl->getVariable('user')->value;?>
</span>
                            &nbsp;
                            <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>
                        <?php }else{ ?>
                            <form action="/" method="post" style="margin:0px; padding:0px;">
                                <input type="text" name="personal_account" value="Лицевой счет" onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Лицевой счет';" class="loginfield"/>
                                <input type="text" name="psw" value="Пароль" onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Пароль';" class="loginfield"/>
                                <input type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px;"/>
                            </form>
                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <td style="height: 138px; padding: 0px;">

                        <table border="0">
                            <tr>
                                <td></td>
                                <td style="width: 650px;">
                                    <?php if ($_smarty_tpl->getVariable('razdel_type')->value=='admin'){?>
                                        <?php $_template = new Smarty_Internal_Template("admin/menu_molod.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                    <?php }else{ ?>
                                        <?php $_template = new Smarty_Internal_Template("menu_molod.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                    <?php }?>
                                </td>
                                <td style="width: 226px; text-align: center; vertical-align: top;"></td>
                            </tr>
                        </table>


                    </td>
                </tr>
                <tr>
                    <td style="height: 346px; padding: 0px;">

                        <table>
                            <tr>
                                <td class="imgl">
                                    <div class="imgl_block">
                                        <div class="rzdtitle_mini">На заметку</div>
                                        <div class="imgl_link_block">
                                            <a href="?page=faq" class="imgl">Вопрос-ответ</a><br/>
                                            <a href="?page=content_page&title=helpful_information" class="imgl">Полезная информация</a><br/>
                                            <a href="?page=document" class="imgl">Документы</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="imgc">

                                    <table style="width: 368px; height: 346px;">
                                        <tr>
                                            <td colspan="3" style="width: 368px; height: 15px; background-image: url(/i/verh.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 14px; height: 261px; background-image: url(/i/left.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                            <td style="width: 340px; height: 261px; padding: 0px; vertical-align: middle;">
                                                <img src="/i/yk_molod.png" alt="<?php echo $_smarty_tpl->getVariable('title')->value;?>
"/>
                                            </td>
                                            <td style="width: 14px; height: 261px; background-image: url(/i/right.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="width: 368px; height: 69px; background-image: url(/i/niz.jpg); background-repeat: no-repeat; background-position: bottom; padding: 0px;"></td>
                                        </tr>
                                    </table>

                                </td>
                                <td class="imgr">
                                    <div class="imgr_block">
                                        <div class="rzdtitle_mini">Звоните</div>
                                        <div class="imgr_link_block">
                                            <?php  $_smarty_tpl->tpl_vars['phones_mp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('phones_mp_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['phones_mp']->key => $_smarty_tpl->tpl_vars['phones_mp']->value){
?>
                                                <span class="imgr_title"><?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['title'];?>
</span>
                                                <br/>
                                                <span class="imgr_text">(<?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['phone_code'];?>
) <?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['phone'];?>
</span>
                                                <br/>
                                                <span class="imgr_text"><?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['comment'];?>
</span>
                                                <br/>
                                            <?php }} ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px;">