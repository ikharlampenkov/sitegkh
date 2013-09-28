<?php /* Smarty version Smarty-3.0.7, created on 2013-04-22 22:30:04
         compiled from "/home/dnevnik/private/smartytemplates_sbor/templates/ncab/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11414485065175577c08fbf1-48127192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38dbf5b905a4a86b0061740bb0338e17fe46331e' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_sbor/templates/ncab/index.tpl',
      1 => 1341325589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11414485065175577c08fbf1-48127192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div style="padding: 20px;">

    <table border="0" width="100">
        <tr>
            <td width="230" style="font-size: 16px; vertical-align: top;">
                <a href="?page=about" style="font-size: 14px;">Общие сведения</a><br/><br/>
                <a href="?page=debt" style="font-size: 14px;">Задолженность</a><br/><br/>
                <a href="?page=accruals" style="font-size: 14px;">Начисления</a><br/><br/>
                <a href="?page=pmeters" style="font-size: 14px;">Приборы учета</a><br/><br/>
            </td>
            <td style="font-size: 14px;">

            <?php if (isset($_smarty_tpl->getVariable('cab_exception',null,true,false)->value)){?>
                <div><?php echo $_smarty_tpl->getVariable('cab_exception')->value;?>
</div>
            <?php }?>

            <?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
            <?php if ($_smarty_tpl->getVariable('page_ncab')->value=='0'){?>
            <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                <?php }else{ ?>
            <?php $_template = new Smarty_Internal_Template("ncab/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <?php }?>
            <?php }?>

            </td>
        </tr>
    </table>
</div>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>