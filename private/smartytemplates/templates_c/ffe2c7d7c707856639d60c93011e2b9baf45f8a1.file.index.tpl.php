<?php /* Smarty version Smarty-3.0.7, created on 2011-05-16 12:39:50
         compiled from "/home/dnevnik/private/smartytemplates/templates/reu/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15954215804dd0b8a66be832-23468327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe2c7d7c707856639d60c93011e2b9baf45f8a1' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/reu/index.tpl',
      1 => 1305306768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15954215804dd0b8a66be832-23468327',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"></meta>
<meta name="DESCRIPTION" content="<?php echo $_smarty_tpl->getVariable('description')->value;?>
"></meta>
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
"></meta>
<meta name="author-corporate" content=""></meta>
<meta name="publisher-email" content=""></meta>

<style type="text/css">
table {
    width: 100%;
}

tr {
   vertical-align: top;
}

input {
    width: 99%;
}

textarea {
    width: 99%;
    height: 200px;
}

#save {
    width: 100px;
}

#check {
    font-size: 14px;
}

</style>

<script type="text/javascript" language="javascript" src="/js/jquery.js" ></script>
<script type="text/javascript" language="javascript" src="/js/main.js" ></script>

<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

</head>
<body>
<?php $_template = new Smarty_Internal_Template("error_msg.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="1">
  <tr>
    <td valign="top" height="150">

        <table width="100%" height="150" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td>ЖКХИНФОРМ.РФ</td>
                <td width="300">

                    <div><?php echo $_smarty_tpl->getVariable('user')->value;?>
</div> <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
?logout">Выйти</a>

                </td>
            </tr>
        </table>


    </td>
  </tr>
  <tr>
    <td>

        <table border="1" width="100">
            <tr>
                <td width="230">

                    <a href="?page=contact">Контакты</a><br /><br />
                    <a href="?page=personal-account">Управление лицевыми счетами</a><br /><br />
                    <a href="?page=auto-inf">Управление авто-информатором</a><br /><br />
                    <a href="?page=messaging">Рассылка универсальных сообщений</a><br /><br />
                    <a href="?page=support">Тех. поддержка</a><br /><br />

                </td>
                <td>

                    <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
                        <?php if ($_smarty_tpl->getVariable('page')->value=="contact"){?>
                            <?php $_template = new Smarty_Internal_Template("reu/contact.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('page')->value=="personal-account"){?>
                            <?php $_template = new Smarty_Internal_Template("reu/personal-account.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('page')->value=="auto-inf"){?>
                            <?php $_template = new Smarty_Internal_Template("reu/auto-inf.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('page')->value=="messaging"){?>
                            <?php $_template = new Smarty_Internal_Template("reu/messaging.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('page')->value=="support"){?>
                            <?php $_template = new Smarty_Internal_Template("reu/support.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                        <?php }?>
                    <?php }?>

                </td>
            </tr>
        </table>

    </td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
</table>



</body>
</html>