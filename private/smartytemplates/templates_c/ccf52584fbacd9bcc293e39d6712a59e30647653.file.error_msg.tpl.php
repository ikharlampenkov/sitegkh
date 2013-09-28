<?php /* Smarty version Smarty-3.0.7, created on 2011-05-14 00:14:16
         compiled from "/home/dnevnik/private/smartytemplates/templates/error_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5117139184dcd66e87140c1-15888193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf52584fbacd9bcc293e39d6712a59e30647653' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates/templates/error_msg.tpl',
      1 => 1305306770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5117139184dcd66e87140c1-15888193',
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