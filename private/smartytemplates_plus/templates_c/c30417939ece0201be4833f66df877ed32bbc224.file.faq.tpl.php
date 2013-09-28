<?php /* Smarty version Smarty-3.0.7, created on 2013-07-17 21:38:30
         compiled from "/home/dnevnik/private/smartytemplates_plus/templates/faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18703878951e6ac666945d9-58472870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c30417939ece0201be4833f66df877ed32bbc224' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_plus/templates/faq.tpl',
      1 => 1374071447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18703878951e6ac666945d9-58472870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<h2><?php if ($_smarty_tpl->getVariable('is_situation')->value==1){?>Жизненные ситуации<?php }else{ ?>Вопрос-ответ<?php }?></h2>


<?php if ($_smarty_tpl->getVariable('action')->value=='view'){?>
    <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
<?php if ($_smarty_tpl->getVariable('is_situation')->value==1){?>&is_situation=1<?php }?>"><< Назад</a>
    <br/>
    <br/>
    <h4><?php echo $_smarty_tpl->getVariable('faq_info')->value['question'];?>
</h4>
    <div><?php echo $_smarty_tpl->getVariable('faq_info')->value['answer'];?>
</div>
<?php }else{ ?>
    <?php if ($_smarty_tpl->getVariable('isComplite')->value){?>
        <div style="font-weight: bold;">Ваша заявка отправлена</div>
        <br/>
    <?php }?>

    <table width="100%" cellpadding="5" cellspacing="2">
        <?php if (isset($_smarty_tpl->getVariable('path_to_faq',null,true,false)->value)){?>
            <tr>
                <td class="pim"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
"><< Назад</a>
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['name'] = 'path_doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['loop'] = is_array($_loop=count($_smarty_tpl->getVariable('path_to_faq')->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['step'] = ((int)-1) == 0 ? 1 : (int)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['max'] = (int)count($_smarty_tpl->getVariable('path_to_faq')->value)-1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['path_doc']['total']);
?>
                        <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&root=<?php echo $_smarty_tpl->getVariable('path_to_faq')->value[$_smarty_tpl->getVariable('smarty')->value['section']['path_doc']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('path_to_faq')->value[$_smarty_tpl->getVariable('smarty')->value['section']['path_doc']['index']]['question'];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['path_doc']['last']){?> / <?php }?>
                    <?php endfor; endif; ?>
                </td>
            </tr>
        <?php }?>


        <?php if (isset($_smarty_tpl->getVariable('faq',null,true,false)->value)&&$_smarty_tpl->getVariable('faq')->value!=false){?>
            <tr>
                <td class="pem"><b><?php echo $_smarty_tpl->getVariable('faq')->value['question'];?>
</b></td>
            </tr>
        <?php }?>

        <?php  $_smarty_tpl->tpl_vars['faq'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('faq_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['faq']->key => $_smarty_tpl->tpl_vars['faq']->value){
?>
            <?php if ($_smarty_tpl->tpl_vars['faq']->value['is_folder']){?>
                <tr>
                    <td class="pem"><img src="/img/folder.png"/> <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&root=<?php echo $_smarty_tpl->tpl_vars['faq']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['faq']->value['is_situation']==1){?>&is_situation=1<?php }?>"><?php echo $_smarty_tpl->tpl_vars['faq']->value['question'];?>
</a></td>
                </tr>
            <?php }else{ ?>
                <tr>
                    <td class="pem"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view&id=<?php echo $_smarty_tpl->tpl_vars['faq']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['faq']->value['is_situation']==1){?>&is_situation=1<?php }?>"><?php echo $_smarty_tpl->tpl_vars['faq']->value['question'];?>
</a>
                    </td>
                </tr>
            <?php }?>
        <?php }} ?>
    </table>

    <br/>
    <a href="#" style="" onclick="showQuestionForm();">Задать вопрос</a>
    <br/>
    <div id="questionForm" style="display: none;">
        <form action="?page=faq&action=question<?php if (isset($_smarty_tpl->getVariable('faq',null,true,false)->value)&&$_smarty_tpl->getVariable('faq')->value!=false){?>&root=<?php echo $_smarty_tpl->getVariable('faq')->value['id'];?>
<?php }?>" method="post">

            <table>
                <tr>
                    <td style="width: 180px;">Фамилия имя отчество<span class="red">*</span></td>
                    <td><input type="text" name="question[fio]" value=""/></td>
                </tr>
                <tr>
                    <td>Адрес<span class="red">*</span></td>
                    <td><input type="text" name="question[address]" value=""/></td>
                </tr>
                <tr>
                    <td>Телефон<span class="red">*</span></td>
                    <td><input type="text" name="question[phone]" value=""/></td>
                </tr>
                <tr>
                    <td>E-mail<span class="red">*</span></td>
                    <td><input type="text" name="question[email]" value=""/></td>
                </tr>
                <tr>
                    <td>Раздел<span class="red">*</span></td>
                    <td><select name="question[parent]">
                            <option value="0" <?php if (!isset($_smarty_tpl->getVariable('faq',null,true,false)->value)){?>selected="selected"<?php }?>>корень</option>
                            <?php  $_smarty_tpl->tpl_vars['folder'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('folder_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['folder']->key => $_smarty_tpl->tpl_vars['folder']->value){
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['folder']->value['id'];?>
" <?php if (isset($_smarty_tpl->getVariable('faq',null,true,false)->value['id'])&&$_smarty_tpl->getVariable('faq')->value['id']==$_smarty_tpl->tpl_vars['folder']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['folder']->value['question'];?>
</option>
                            <?php }} ?>
                        </select></td>
                </tr>
                <tr>
                    <td>Текст сообщения<span class="red">*</span></td>
                    <td><textarea name="question[question]"></textarea></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Отправить">

            <br/><br/>

            <div><span class="red">*</span> - обязательные поля</div>

        </form>
    </div>
<?php }?>