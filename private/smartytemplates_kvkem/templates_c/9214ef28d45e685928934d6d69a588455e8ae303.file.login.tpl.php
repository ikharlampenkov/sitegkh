<?php /* Smarty version Smarty-3.0.7, created on 2012-11-12 19:40:52
         compiled from "/home/dnevnik/private/smartytemplates_kvkem/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196526454650a0fc64180b83-20135372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9214ef28d45e685928934d6d69a588455e8ae303' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_kvkem/templates/login.tpl',
      1 => 1352727623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196526454650a0fc64180b83-20135372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="DESCRIPTION" content="<?php echo $_smarty_tpl->getVariable('description')->value;?>
" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('keywords')->value;?>
" />
        <meta name="author-corporate" content="" />
        <meta name="publisher-email" content="" />

        <style>
            html, body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                font-family: tahoma, sans-serif;
            }
        </style>

        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

    </head>

    <body>

        <?php if ($_smarty_tpl->getVariable('login')->value==false){?>

            <table style="width: 100%; height: 100%;" cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td valign="middle" align="center">
                        <form method="post" style="margin:0; padding:0;">

                            <table cellpadding="10" cellspacing="0" border="0" style="background-color: #0893db; width: 300px; height: 100px;">

                                <tr>
                                    <td style="font-size:26px; color: white;padding-left: 25px;" colspan="2"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</td>
                                </tr>
                                <tr>
                                    <td style="color:white">Логин: </td>
                                    <td><input name="personal_account" type="text" style="width:190px;border:10px;font-size: 16px;" /></td>
                                </tr>
                                <tr>
                                    <td style="color:white">Пароль:</td>
                                    <td><input name="psw" type="password" style="width:190px;border:10px;font-size: 16px;" /></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" value="Войти" style="width:190px;font-size: 16px;"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><?php if (isset($_smarty_tpl->getVariable('login_fail',null,true,false)->value)){?><div style="color:white; font-weight:bold; font-size:12px;">Невервный логин и пароль.</div><?php }?></td>
                                </tr>


                            </table>
                        </form>

                    </td>
                </tr>
            </table>
        <?php }?>

    </body>
</html>