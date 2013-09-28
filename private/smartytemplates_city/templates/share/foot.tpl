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
                                            <div style="color: #ffffff; padding-left: 40px; font-size: 12pt; float: left;">&copy; {$smarty.now|date_format:"%Y"} {$title} </div>

                                        {if !$login}
                                        <div style="float: right;">
                                                                        <form action="/" method="post" style="margin:0px; padding:0px;">
                                                                            <input type="text" name="personal_account" value="Лицевой счет" onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Лицевой счет';" class="loginfield" />
                                                                            <input type="text" name="psw" value="Пароль"  onfocus="if (this.value == this.defaultValue) this.value = '';" onmouseout="if (this.value == '') this.value = 'Пароль';" class="loginfield" />
                                                                            <input type="image" src="/i/button.jpg" name="" style="width: 77px; height: 26px;" />
                                                                        </form>
                                        </div>
                                        {/if}

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
                    {include file="border.tpl"}
                </td>
            </tr>
        </table>

    </body>
</html>
