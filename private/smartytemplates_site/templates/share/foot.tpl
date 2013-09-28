</td>
                        </tr>
{if $domen=='xn----htbdepbihnfb8cyg.xn--p1ai'}
<tr>
    <td><img src="/i/yk_molod_banner.jpg" alt=""></td>
</tr>
{/if}
                        <tr>
                            <td style="height: 342px; background-color: #ebebeb;">

                                <table>
                                    <tr>
                                        <td style="width: 464px;">
                                            <div>
                                                <div style="color: #0e426b; padding: 10px 0px 0px 60px; font-size: 14pt;">Контакты</div>
                                                <div style="color: #2191d0; font-size: 24pt; padding: 50px 0px 0px 60px;"><span style="color: #5f5e5d; font-size: 12pt; vertical-align: text-top;">8 (3842)</span>
                                                    {if $domen=='xn----htbdepbihnfb8cyg.xn--p1ai'}
                                                        31-21-12
                                                    {elseif $domen=='xn----2-fddihw2arbyke.xn--p1ai'}
                                                        34-68-36, 34-57-60
                                                    {elseif $domen=='xn--19-kmcm3c.xn--p1ai'}
                                                        54-26-19
                                                    {else}
                                                        {*56 00 00*}
                                                    {/if}</div>
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
                                        <td style="vertical-align: middle;"><div style="color: #ffffff; padding-left: 40px; font-size: 12pt;">&copy; {$smarty.now|date_format:"%Y"} {$title} </div></td>
                                        <td style="padding: 0px; text-align: right; vertical-align: middle; padding-right: 40px;">
                                            {if $domen=='xn----htbdepbihnfb8cyg.xn--p1ai'}

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

                                            {/if}
                                            <img src="i/invoice.jpg" alt="invoice" />
                                        </td>
                                    </tr>
                                </table>


                            </td>
                        </tr>
                    </table>

                </td>
                <td style="padding: 0px;">
                    {include file="border.tpl"}
                </td>
            </tr>
        </table>

    </body>
</html>
