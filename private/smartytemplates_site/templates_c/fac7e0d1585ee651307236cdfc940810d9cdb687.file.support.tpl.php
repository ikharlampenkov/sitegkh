<?php /* Smarty version Smarty-3.0.7, created on 2013-03-21 15:36:52
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/admin/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:392016189514ad4b4516505-82523364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac7e0d1585ee651307236cdfc940810d9cdb687' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/admin/support.tpl',
      1 => 1309823683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392016189514ad4b4516505-82523364',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.truncate.php';
?>
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;"><?php echo $_smarty_tpl->getVariable('module_title')->value;?>
</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

<?php if ($_smarty_tpl->getVariable('action')->value=="answer"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('tech_support_post')->value['id'];?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
" method="post">
    <table>
        <tr class="pem">
            <td width="200">Дата вороса</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('tech_support_post')->value['date_question'],"%d.%m.%Y %H:%M");?>
</td>
        </tr>
        <tr class="pem">
            <td width="200">Вопрос</td>
            <td><?php echo $_smarty_tpl->getVariable('tech_support_post')->value['question'];?>
</td>
        </tr>
        <tr class="pem">
            <td width="200">Ответ</td>
            <td><textarea name="data[answer]"><?php echo $_smarty_tpl->getVariable('tech_support_post')->value['answer'];?>
</textarea></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }elseif($_smarty_tpl->getVariable('action')->value=="question"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>От кого</td>
            <td><select name="data[personal_account_id]">
                <?php  $_smarty_tpl->tpl_vars['pa'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pa_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pa']->key => $_smarty_tpl->tpl_vars['pa']->value){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['pa']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pa']->value['fio'];?>
</option>
                <?php }} ?>
                </select></td>
        </tr>
        <tr>
            <td width="200">Вопрос</td>
            <td><textarea name="data[question]"></textarea></td>
        </tr>
		<tr>
            <td width="200">Прикрепит файл</td>
            <td>
			<div id="file_list">
			<input type="file" name="qfile1" />
			</div>
			<input type="hidden" id="file_count" value="2" />
			<a href="#" onclick="addFile('file_list', 'file_count')">Прикрепить еще один файл</a>
			</td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }elseif($_smarty_tpl->getVariable('action')->value=='view_ticket'){?>

<h2><?php echo $_smarty_tpl->getVariable('ticket_title')->value;?>
 № <?php echo $_smarty_tpl->getVariable('ticket')->value['id'];?>
 от <?php echo $_smarty_tpl->getVariable('pa_info')->value['fio'];?>
</h2>
<div><?php echo $_smarty_tpl->getVariable('ticket')->value['title'];?>
</div>
<br />

<?php if ($_smarty_tpl->getVariable('ticket')->value['post_list']){?>
<table>
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket')->value['post_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['post']->iteration=0;
if ($_smarty_tpl->tpl_vars['post']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
 $_smarty_tpl->tpl_vars['post']->iteration++;
 $_smarty_tpl->tpl_vars['post']->last = $_smarty_tpl->tpl_vars['post']->iteration === $_smarty_tpl->tpl_vars['post']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_post']['last'] = $_smarty_tpl->tpl_vars['post']->last;
?>
    <tr class="pem">
        <td style="background-color: #e0e0e0;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_question'],"%d.%m.%Y %H:%M");?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['post']->value['question'];?>

                <?php if ($_smarty_tpl->tpl_vars['post']->value['file_list']!=false){?>
            <div>
                    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['file_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']++;
?>
                <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_support/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" target="_blank">Файл <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_file']['iteration'];?>
</a><br />
                    <?php }} ?>
            </div>
                <?php }?>
        </td>
    </tr>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['_post']['last']){?>
    <tr class="pem">
        <td>
            <form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('ticket')->value['id'];?>
&pa_id=<?php echo $_smarty_tpl->getVariable('ticket')->value['personal_account_id'];?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
" method="post">
		Ответ<br />
                <textarea name="data[answer]"><?php echo $_smarty_tpl->tpl_vars['post']->value['answer'];?>
</textarea><br />

                Прикрепит файл<br />
                <div id="file_list">
                    <input type="file" name="qfile1" />
                </div>
                <input type="hidden" id="file_count" value="2" />
                <a href="#" onclick="addFile('file_list', 'file_count')">Прикрепить еще один файл</a><br /><br />
                
                Статус<br />
                <select name="data[tech_support_ticket_status_id]">
                    <?php  $_smarty_tpl->tpl_vars['ticket_status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket_status_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ticket_status']->key => $_smarty_tpl->tpl_vars['ticket_status']->value){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['ticket_status']->value['id'];?>
" <?php if ($_smarty_tpl->getVariable('ticket')->value['ticket_status_id']==$_smarty_tpl->tpl_vars['ticket_status']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ticket_status']->value['title'];?>
</option>
                    <?php }} ?>
                </select><br /><br />

                <input name="data[id]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" />
                <input id="save" name="save" type="submit" value="Сохранить" />
            </form>
        </td>
    </tr>
		<?php }else{ ?>
    <tr>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_answer'],"%d.%m.%Y %H:%M");?>
<br />
                <?php echo $_smarty_tpl->tpl_vars['post']->value['answer'];?>

            <?php if ($_smarty_tpl->tpl_vars['post']->value['answer_file_list']!=false){?>
            <div>
                    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post']->value['answer_file_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']++;
?>
                <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_support/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" target="_blank">Файл <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_file']['iteration'];?>
</a><br />
                    <?php }} ?>
            </div>
                <?php }?>
        </td>
    </tr>
		<?php }?>
<?php }} ?>
</table>
<?php }?>

<?php }elseif($_smarty_tpl->getVariable('action')->value=="add_status"||$_smarty_tpl->getVariable('action')->value=="edit_status"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ('edit'){?>&id=<?php echo $_smarty_tpl->getVariable('ticket_status')->value['id'];?>
<?php }?>&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
" method="post">
    <table>
        <tr>
            <td width="200">Название</td>
            <td><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('ticket_status')->value['title'];?>
" /></td>
        </tr>
        <tr>
            <td width="200">Рейтинг</td>
            <td><input name="data[rating]" value="<?php echo $_smarty_tpl->getVariable('ticket_status')->value['rating'];?>
" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>



<h4><?php echo $_smarty_tpl->getVariable('module_title')->value;?>
</h4>

<?php if ($_smarty_tpl->getVariable('ticket_list')->value!==false){?>
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
    <tr>
       <td class="pum">Номер</td>
       <td class="pum">Дата</td>
       <td class="pum">От кого</td>
       <td class="pum">Заголовок</td>
       <td class="pum">Состояние</td>
       <td class="pum">&nbsp;</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->key => $_smarty_tpl->tpl_vars['ticket']->value){
?>
    <tr>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
</td>
        <td class="pem"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ticket']->value['date'],"%d.%m.%Y %H:%M");?>
</td>
	<td class="pem"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['fio'];?>
</td>
        <td class="pem"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['ticket']->value['title']),30,'');?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['status'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view_ticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
&pa_id=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['personal_account_id'];?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
">открыть</a><br /> </td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<br />
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=question&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
"><?php echo $_smarty_tpl->getVariable('action_title')->value;?>
</a>
<hr width="100%" size="1" />

<h4>Статусы заявок</h4>

<?php if ($_smarty_tpl->getVariable('ticket_status_list')->value!==false){?>
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
<?php  $_smarty_tpl->tpl_vars['ticket_status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket_status_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ticket_status']->key => $_smarty_tpl->tpl_vars['ticket_status']->value){
?>
    <tr class="pem">
        <td><?php echo $_smarty_tpl->tpl_vars['ticket_status']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ticket_status']->value['rating'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit_status&id=<?php echo $_smarty_tpl->tpl_vars['ticket_status']->value['id'];?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
">редактировать</a><br />
            <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del_status&id=<?php echo $_smarty_tpl->tpl_vars['ticket_status']->value['id'];?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
">удалить</a> </td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add_status&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
">добавить статус заявки</a>

<?php }?>