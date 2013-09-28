<?php /* Smarty version Smarty-3.0.7, created on 2012-09-26 16:00:54
         compiled from "/home/dnevnik/private/smartytemplates_city/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3020212735062c4463e9607-18195275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed0ee1db914a852393998b43649e93dd6117c18c' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_city/templates/share/foot.tpl',
      1 => 1348650051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3020212735062c4463e9607-18195275',
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
                                                  38 75 15 <br/> </div>
                                                <span style="color: #5f5e5d; font-size: 12pt; vertical-align: text-top;">Аварийно - Диспетчерская служба (круглосуточно)</span>                                              
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
                                        <td style="vertical-align: middle;">
                                            <div style="color: #ffffff; padding-left: 40px; font-size: 12pt; float: left;">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->getVariable('title')->value;?>
 </div>

                                        <?php if (!$_smarty_tpl->getVariable('login')->value){?>
                                        <div style="float: right;">
                                                                        <form action="/" method="post" style="margin:0px; padding:0px;">
                                                                            <input type="text" name="personal_account" value="Лицевой счет" onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Лицевой счет';" class="loginfield" />
                                                                            <input type="text" name="psw" value="Пароль"  onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Пароль';" class="loginfield" />
                                                                            <input type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px;" />
                                                                        </form>
                                        </div>
                                        <?php }?>

                                        </td>
                                        <td style="padding: 0px; text-align: right; vertical-align: middle; padding-right: 40px;">
                                            <img src="i/invoice.jpg" alt="invoice" />
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
