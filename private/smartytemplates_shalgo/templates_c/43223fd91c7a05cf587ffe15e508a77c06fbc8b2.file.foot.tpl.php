<?php /* Smarty version Smarty-3.0.7, created on 2013-05-08 12:08:45
         compiled from "/home/dnevnik/private/smartytemplates_shalgo/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19870168245189dddd49af43-44990343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43223fd91c7a05cf587ffe15e508a77c06fbc8b2' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_shalgo/templates/share/foot.tpl',
      1 => 1367989674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19870168245189dddd49af43-44990343',
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
                            <?php if ($_smarty_tpl->getVariable('domen')->value=='xn----htbdepbihnfb8cyg.xn--p1ai'){?>
                                31-21-12
                            <?php }elseif($_smarty_tpl->getVariable('domen')->value=='xn----2-fddihw2arbyke.xn--p1ai'){?>
                                34-68-36, 34-57-60
                            <?php }elseif($_smarty_tpl->getVariable('domen')->value=='xn--19-kmcm3c.xn--p1ai'){?>
                                54-26-19
                            <?php }else{ ?>
                            <?php }?></div>
                    </div>
                </td>
                <td style="width: 536px; height: 341px;">

                    <table style="width: 536px; height: 341px;">
                        <tr>
                            <td style="width: 8px; height: 341px; background: url(/i/bottom_banner_left.png) no-repeat; padding: 0;" rowspan="3"></td>
                            <td style="width: 459px; height: 41px; background: url(/i/bottom_banner_top.png) no-repeat; padding: 0;"></td>
                            <td style="width: 69px; height: 341px; background: url(/i/bottom_banner_right.png) no-repeat; padding: 0;" rowspan="3"></td>
                        </tr>
                        <tr>

                            <td style="width: 459px; height: 260px; padding: 0; vertical-align: middle;">&nbsp;  </td>

                        </tr>
                        <tr>
                            <td style="width: 8px; height: 40px; background: url(/i/bottom_banner_bottom.jpg) no-repeat; padding: 0;"></td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>

    </td>
</tr>
<tr>
    <td class="nizfon">
        <table>
            <tr>
                <td style="vertical-align: middle;">
                    <div style="color: #ffffff; padding-left: 40px; font-size: 12pt;">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->getVariable('title')->value;?>
 </div>
                </td>
                <td style="padding: 0px; text-align: right; vertical-align: middle; padding-right: 40px;">
                    <img src="i/invoice.jpg" alt="invoice"/>
                </td>
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
