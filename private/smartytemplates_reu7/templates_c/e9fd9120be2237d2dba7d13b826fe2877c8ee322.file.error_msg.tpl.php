<?php /* Smarty version Smarty-3.0.7, created on 2011-10-07 16:01:02
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/error_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9936047544e8ebfce810e77-90862647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9fd9120be2237d2dba7d13b826fe2877c8ee322' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/error_msg.tpl',
      1 => 1317977906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9936047544e8ebfce810e77-90862647',
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