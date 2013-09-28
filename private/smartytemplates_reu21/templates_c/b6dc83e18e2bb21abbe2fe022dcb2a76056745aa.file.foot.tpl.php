<?php /* Smarty version Smarty-3.0.7, created on 2012-04-26 18:18:58
         compiled from "/home/dnevnik/private/smartytemplates_reu21/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18922225974f99211205ccb8-65697670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6dc83e18e2bb21abbe2fe022dcb2a76056745aa' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu21/templates/share/foot.tpl',
      1 => 1335435532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18922225974f99211205ccb8-65697670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?></td>
                        </tr>
<?php if ($_smarty_tpl->getVariable('domen')->value=='xn----htbdepbihnfb8cyg.xn--p1ai'){?>
<tr>
    <td><img src="/i/yk_molod_banner.jpg" alt=""></td>
</tr>
<?php }?>
                        <tr>
                            <td style="height: 342px; background-color: #ebebeb;">

                                <table>
                                    <tr>
                                        <td style="width: 464px;">
                                            <div>
                                                <div style="color: #0e426b; padding: 10px 0px 0px 60px; font-size: 14pt;">Контакты</div>
                                                <div style="color: #2191d0; font-size: 24pt; padding: 50px 0px 0px 60px;"><span style="color: #5f5e5d; font-size: 12pt; vertical-align: text-top;">8 (3842)</span>
                                                   75-62-46</div>
                                            </div>
                                        </td>
                                        <td style="width: 536px; background-image: url(i/banner.jpg); background-repeat: no-repeat;">&nbsp;</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr>
                            <td class="nizfon">
                                <table>
                                    <tr>
                                        <td style="vertical-align: middle;"><div style="color: #ffffff; padding-left: 40px; font-size: 12pt;">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->getVariable('title')->value;?>
 </div></td>
                                        <td style="padding: 0px; text-align: right; vertical-align: middle; padding-right: 40px;"><img src="i/invoice.jpg" alt="invoice" /></td>
                                    </tr>
                                </table>


                            </td>
                        </tr>
                    </table>

                </td>
                <td style="padding: 0px;">
                    <?php $_template = new Smarty_Internal_Template("border.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </td>
            </tr>
        </table>

    </body>
</html>
