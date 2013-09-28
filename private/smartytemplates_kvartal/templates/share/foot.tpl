</td>
</tr>

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
                            77-36-37
                            {/if}</div>
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

                            <td style="width: 459px; height: 260px; padding: 0; vertical-align: middle;">&nbsp; {*<img src="/i/bb_molod.jpg" />*} </td>

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
                    <div style="color: #ffffff; padding-left: 40px; font-size: 12pt;">&copy; {$smarty.now|date_format:"%Y"} {$title} </div>
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
    {include file="border.tpl"}
</td>
</tr>
</table>

</body>
</html>
