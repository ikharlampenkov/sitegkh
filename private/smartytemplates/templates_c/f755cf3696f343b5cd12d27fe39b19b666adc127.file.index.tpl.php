<?php /* Smarty version Smarty-3.0.7, created on 2011-03-27 23:09:15
         compiled from "H:/www/gkh/private/smartytemplates/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4124d8f612be19aa1-21347056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f755cf3696f343b5cd12d27fe39b19b666adc127' => 
    array (
      0 => 'H:/www/gkh/private/smartytemplates/templates/index.tpl',
      1 => 1301242152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4124d8f612be19aa1-21347056',
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

<div style="text-align:center; vertical-align:middle;">
<div style="border:1px solid black; width:250px; height:120px; padding:10px; text-align:left;">
<?php if (isset($_smarty_tpl->getVariable('login_fail',null,true,false)->value)){?><div style="color:red; font-weight:bold; font-size:12px;">Вы ввели неправильный логин и пароль!</div><?php }?>
<form method="post" style="margin:0px; padding:0px;">
<div><span style="width:70px">Логин: </span><input name="login" type="text" style="width:150px;"></div>
<div><span style="width:70px">Пароль: </span><input name="psw" type="password" style="width:150px;"></div>
<div><input type="submit" value="Войти" style="width:70px;"></div>
</form>
</div>
</div>

                </td>
            </tr>
        </table>

    
    </td>
  </tr>
  <tr>
    <td>

        <h4><?php echo $_smarty_tpl->getVariable('about')->value['title'];?>
</h4>
        <div><?php echo $_smarty_tpl->getVariable('about')->value['content'];?>
</div>

        <h4><?php echo $_smarty_tpl->getVariable('how_connect')->value['title'];?>
</h4>
        <div><?php echo $_smarty_tpl->getVariable('how_connect')->value['content'];?>
</div>

        <h4><?php echo $_smarty_tpl->getVariable('how_much')->value['title'];?>
</h4>
        <div><?php echo $_smarty_tpl->getVariable('how_much')->value['content'];?>
</div>

    </td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
</table>



</body>
</html>