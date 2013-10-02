<?php /* Smarty version Smarty-3.0.7, created on 2013-09-02 09:06:51
         compiled from "/home/dnevnik/private/smartytemplates_reu10/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14105790155223f2bbcbdf52-93569806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a0918f29d288068381dc9dc6dd3e3ebec71391f' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu10/templates/share/foot.tpl',
      1 => 1378054869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14105790155223f2bbcbdf52-93569806',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?>        <tr>
            <td class="leftShadow"></td>
            <td id="footer">
                <div class="wrapper">
                    <div id="smallLogo">
                        <a href="/"></a>
                    </div>
                    <div id="contact">
                        &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->getVariable('title')->value;?>

                        <br/><br/>
                        Наш адрес: 650066, г. Кемерово, пр. Ленина,58, <br>тел: +7 (3842) 72-24-88, факс: +7 (3842) 72-23-90
                        <br/>
                        email: <a href="mailto:reu-10@mail.ru">reu-10@mail.ru</a>

                    </div>
                    <div id="development">
                        <div>
                            <!--LiveInternet counter-->
                            <script type="text/javascript"><!--
                                document.write("<a href='http://www.liveinternet.ru/click' " +
                                        "target=_blank><img src='//counter.yadro.ru/hit?t20.3;r" +
                                        escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
                                        ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                                                screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                                        ";" + Math.random() +
                                        "' alt='' title='LiveInternet: показано число просмотров за 24" +
                                        " часа, посетителей за 24 часа и за сегодня' " +
                                        "border='0' width='88' height='31'><\/a>");
                                //--></script>
                            <!--/LiveInternet-->

                        </div>
                        <img src="i/invoice.jpg" alt="invoice"/>
                    </div>
                </div>
            </td>
            <td class="rightShadow"></td>
        </tr>
    </table>
</div>
</body>
</html>