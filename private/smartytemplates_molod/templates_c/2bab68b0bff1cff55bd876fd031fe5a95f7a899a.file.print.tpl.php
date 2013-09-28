<?php /* Smarty version Smarty-3.0.7, created on 2011-06-30 23:53:48
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/cabinet/print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2031920634e0caa1c3920c9-01356984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bab68b0bff1cff55bd876fd031fe5a95f7a899a' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/cabinet/print.tpl',
      1 => 1309108090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2031920634e0caa1c3920c9-01356984',
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

        <link title="Screen" rel="stylesheet" type="text/css" href="/css/css.css" media="all"</link>

        <script type="text/javascript" language="javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/js/main.js" ></script>
        <script type="text/javascript" language="javascript" src="/js/common.js"></script>

        <title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 Личный кабинет</title>
        
    </head>
    <body onload="window.print();">
        <?php $_template = new Smarty_Internal_Template("cabinet/receipt.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </body>
</html>