<?php /* Smarty version Smarty-3.0.7, created on 2011-11-28 11:21:50
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15734774874ed30c5e59eac1-11510019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04859d6ed90713da8005682276ee6aa2a896341d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/share/foot.tpl',
      1 => 1322454108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15734774874ed30c5e59eac1-11510019',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?></td>
                        </tr>
                        <tr>
                            <td style="height: 342px; background-color: #ebebeb;">

                                <table>
                                    <tr>
                                        <td style="width: 464px;">
                                            <div>
                                                <div style="color: #0e426b; padding: 10px 0px 0px 60px; font-size: 14pt;">Контакты</div>
                                                <div style="color: #2191d0; font-size: 24pt; padding: 50px 0px 0px 60px;"><span style="color: #5f5e5d; font-size: 12pt; vertical-align: text-top;">8 (3842)</span>
                                                    <?php if ($_smarty_tpl->getVariable('domen')->value=='xn----htbdepbihnfb8cyg.xn--p1ai'){?>
                                                        31-21-12
                                                    <?php }elseif($_smarty_tpl->getVariable('domen')->value=='xn----2-fddihw2arbyke.xn--p1ai'){?>
                                                        34-68-36, 34-57-60
                                                    <?php }else{ ?>
                                                        56 00 00
                                                    <?php }?></div>
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
