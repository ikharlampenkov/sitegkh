<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="DESCRIPTION" content="{$description}" />
        <meta name="keywords" content="{$keywords}" />
        <meta name="author-corporate" content="" />
        <meta name="publisher-email" content="" />

        <style>
            html, body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                font-family: tahoma, sans-serif;
            }
        </style>

        <title>{$title}</title>

    </head>

    <body>

        {if $login==false}

            <table style="width: 100%; height: 100%;" cellpadding="10" cellspacing="10" border="0">
                <tr>
                    <td valign="middle" align="center">
                        <form method="post" style="margin:0; padding:0;">

                            <table cellpadding="10" cellspacing="0" border="0" style="background-color: #0893db; width: 300px; height: 100px;">

                                <tr>
                                    <td style="font-size:26px; color: white;padding-left: 25px;" colspan="2">{$title}</td>
                                </tr>
                                <tr>
                                    <td style="color:white">Логин: </td>
                                    <td><input name="personal_account" type="text" style="width:190px;border:10px;font-size: 16px;" /></td>
                                </tr>
                                <tr>
                                    <td style="color:white">Пароль:</td>
                                    <td><input name="psw" type="password" style="width:190px;border:10px;font-size: 16px;" /></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><input type="submit" value="Войти" style="width:190px;font-size: 16px;"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{if isset($login_fail)}<div style="color:white; font-weight:bold; font-size:12px;">Невервный логин и пароль.</div>{/if}</td>
                                </tr>


                            </table>
                        </form>

                    </td>
                </tr>
            </table>
        {/if}

    </body>
</html>