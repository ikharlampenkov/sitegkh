<?php /* Smarty version Smarty-3.0.7, created on 2013-08-29 23:40:30
         compiled from "/home/dnevnik/private/smartytemplates_domashni/templates/share/foot.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1029035529521f797eb81165-78560692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c665182a2ea766025bd63420b6ae1eb968e63ed2' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_domashni/templates/share/foot.tpl',
      1 => 1377794411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1029035529521f797eb81165-78560692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="footer">
    <div class="center">

        <div class="contacts">
            <h3>Контакты</h3>

            <p>ООО "Домашний уют"</p>
            <p>г. Киселевск, ул. Коммунальная, 5</p>

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

        <div class="made"><a href="/"></a></div>
    </div>
</div>

</body>
</html>