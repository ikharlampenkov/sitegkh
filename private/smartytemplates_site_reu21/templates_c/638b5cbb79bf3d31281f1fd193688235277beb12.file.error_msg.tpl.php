<?php /* Smarty version Smarty-3.0.7, created on 2011-06-27 00:08:43
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/error_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14653961624e07679bdae796-80640218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '638b5cbb79bf3d31281f1fd193688235277beb12' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/error_msg.tpl',
      1 => 1309108095,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14653961624e07679bdae796-80640218',
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