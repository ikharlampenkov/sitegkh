<?php /* Smarty version Smarty-3.0.7, created on 2011-10-12 08:44:15
         compiled from "/home/dnevnik/private/smartytemplates_reu7/templates/cabinet/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18527919924e94f0ef7e7198-50369141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2f3c0eab55dfdcc118db14592627bb62a6b70d8' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_reu7/templates/cabinet/support.tpl',
      1 => 1317977903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18527919924e94f0ef7e7198-50369141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/dnevnik/private/classes/smarty/plugins/modifier.truncate.php';
?><div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;"><?php echo $_smarty_tpl->getVariable('module_title')->value;?>
</div>
                                            <div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>


<?php if ($_smarty_tpl->getVariable('action')->value=="question"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="200" class="pom" align="center">Вопрос</td>
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
</h2>
<div><?php echo $_smarty_tpl->getVariable('ticket')->value['title'];?>
</div>
<br />

<?php if ($_smarty_tpl->getVariable('ticket')->value['post_list']){?>
<table>
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket')->value['post_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
?>
    <tr>
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
<?php }} ?>
</table>
<?php }?>

<h4><?php echo $_smarty_tpl->getVariable('action_title')->value;?>
</h4>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('ticket')->value['id'];?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="200" class="pom" align="center">Вопрос</td>
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

<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('ticket_list')->value!==false){?>
<table cellpadding="10">
   <tr>
       <td  class="pom" align="center"><b>Номер</td>
       <td class="pom" align="center"><b>Дата</td>
       <td class="pom" align="center"><b>Заголовок</td>
       <td class="pom" align="center"><b>Состояние</td>
       <td class="pom" align="center"><b>&nbsp;</td>
    </tr> 
<?php  $_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ticket_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->key => $_smarty_tpl->tpl_vars['ticket']->value){
?>
    <tr>
        <td  class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
</td>
        <td  class="pem" align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ticket']->value['date'],"%d.%m.%Y %H:%M");?>
</td>
        <td  class="pem" align="center"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['ticket']->value['title']),30,'');?>
</td>
        <td  class="pem" align="center"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['status'];?>
</td>
        <td  class="pem" align="center"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view_ticket&id=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['id'];?>
&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
">просмотреть</a><br /> </td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<br />
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=question&category=<?php echo $_smarty_tpl->getVariable('category')->value;?>
"><?php echo $_smarty_tpl->getVariable('action_title')->value;?>
</a>

<?php }?>	 	 		 