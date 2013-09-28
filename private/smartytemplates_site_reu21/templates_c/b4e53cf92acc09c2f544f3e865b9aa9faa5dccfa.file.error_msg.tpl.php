<?php /* Smarty version Smarty-3.0.7, created on 2011-09-26 10:20:39
         compiled from "/home/dnevnik/private/smartytemplates_site_reu21/templates/error_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18483512864e7fef87e4b9d9-69547504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e53cf92acc09c2f544f3e865b9aa9faa5dccfa' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site_reu21/templates/error_msg.tpl',
      1 => 1317007005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18483512864e7fef87e4b9d9-69547504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('exception')->value){?>
<script>
function closeErrorMsg()
{
 o_errorblock = document.getElementById("errorblock");
 o_errorblock.style.display = "none";
}
</script>
<div style="background-color:#ffffd7; border : 1px solid Black; font-size:12px; color:#000000; width:400px;" id="errorblock">
<div>Сообщение об ошибке: <?php echo $_smarty_tpl->getVariable('e_message')->value;?>
</div>
<div>Код ошибки: <?php echo $_smarty_tpl->getVariable('e_code')->value;?>
</div>
<input type="button" value="Закрыть" onclick="closeErrorMsg();">
</div>
<?php }?>