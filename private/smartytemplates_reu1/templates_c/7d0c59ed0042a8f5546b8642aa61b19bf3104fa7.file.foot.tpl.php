<?php /* Smarty version Smarty-3.0.7, created on 2013-07-17 21:34:43
         compiled from "/home/dnevnik/private/smartytemplates_plus/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34703176951e6ab83e5d195-31381620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d0c59ed0042a8f5546b8642aa61b19bf3104fa7' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_plus/templates/share/foot.tpl',
      1 => 1374070762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34703176951e6ab83e5d195-31381620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
?><div id="footer">
    <div class="center">

        <div class="contacts">
            <h3>Контакты
                <h3>
                    <p>дополнительная информация о фирме</p>

                    <p>ИНН, КПП</p>

                    <?php  $_smarty_tpl->tpl_vars['phones_mp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('phones_mp_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['phones_mp']->key => $_smarty_tpl->tpl_vars['phones_mp']->value){
?>
                        <p class="imgr_title"><?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['title'];?>
</p>
                        <p class="imgr_text">(<?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['phone_code'];?>
) <?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['phone'];?>
</p>
                        <p class="imgr_text"><?php echo $_smarty_tpl->tpl_vars['phones_mp']->value['comment'];?>
</p>
                        <br/>
                    <?php }} ?>

        </div>
        <div class="service">
            <h3>Услуги
                <h3>
                    <ul>
                        <li><a href="/">> Услуга перая , платная.</a></li>
                        <li><a href="/">> Услуга вторая , платная.</a></li>
                        <li><a href="/">> Услуга третья , платная.</a></li>
                        <li><a href="/">> Услуга четвертая , платная.</a></li>
                        <li><a href="/">> Услуга пятая , платная.</a></li>
                    </ul>

        </div>
        <div class="foot_news">
            <?php if ($_smarty_tpl->getVariable('news_list')->value){?>
            <h3>Свежие новости</h3>

            <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
                <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],"%d.%m.%Y");?>
 - <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
            <?php }} ?>
            <?php }?>

        </div>
        <div class="made"><a href="/"></a></div>
    </div>
</div>

</body>
</html>