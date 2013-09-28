<?php /* Smarty version Smarty-3.0.7, created on 2012-07-20 15:19:17
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1987670937500914858a1b70-75276918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04859d6ed90713da8005682276ee6aa2a896341d' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/share/foot.tpl',
      1 => 1342772355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987670937500914858a1b70-75276918',
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
                                        <td style="padding: 0px; text-align: right; vertical-align: middle; padding-right: 40px;">
                                            <?php if ($_smarty_tpl->getVariable('domen')->value=='xn----htbdepbihnfb8cyg.xn--p1ai'){?>

                                                <!-- Yandex.Metrika informer -->
                                                <a href="http://metrika.yandex.ru/stat/?id=15999511&amp;from=informer"
                                                target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/15999511/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try { Ya.Metrika.informer( { i:this,id:15999511,type:0,lang:'ru' } );return false } catch(e) {  } "/></a>
                                                <!-- /Yandex.Metrika informer -->

                                                <!-- Yandex.Metrika counter -->
                                                <script type="text/javascript">
                                                (function (d, w, c) {
                                                    (w[c] = w[c] || []).push(function() {
                                                        try {
                                                            w.yaCounter15999511 = new Ya.Metrika( { id:15999511, enableAll: true, webvisor:true } );
                                                        } catch(e)  { }
                                                    });

                                                    var n = d.getElementsByTagName("script")[0],
                                                        s = d.createElement("script"),
                                                        f = function () { n.parentNode.insertBefore(s, n); };
                                                    s.type = "text/javascript";
                                                    s.async = true;
                                                    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                                                    if (w.opera == "[object Opera]") {
                                                        d.addEventListener("DOMContentLoaded", f);
                                                    } else { f(); }
                                                })(document, window, "yandex_metrika_callbacks");
                                                </script>
                                                <noscript><div><img src="//mc.yandex.ru/watch/15999511" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                                                <!-- /Yandex.Metrika counter -->

                                            <?php }?>
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
