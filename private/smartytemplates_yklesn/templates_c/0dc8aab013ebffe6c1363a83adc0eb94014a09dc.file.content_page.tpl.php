<?php /* Smarty version Smarty-3.0.7, created on 2012-11-15 12:18:18
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/admin/content_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35395387450a4892ad9e039-19409844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc8aab013ebffe6c1363a83adc0eb94014a09dc' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/admin/content_page.tpl',
      1 => 1320592884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35395387450a4892ad9e039-19409844',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title"><?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>
</div>
<div class="page_title_und">&nbsp;</div>


<?php if ($_smarty_tpl->getVariable('action')->value=="add"||$_smarty_tpl->getVariable('action')->value=="edit"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
<?php if ('edit'){?>&id=<?php echo $_smarty_tpl->getVariable('conpage')->value['id'];?>
<?php }?>" method="post" enctype="multipart/form-data">
    <table>
        <tr><td width="200">Название страницы (англ)</td>
        <tr><td><input name="data[page_title]" value="<?php echo $_smarty_tpl->getVariable('conpage')->value['page_title'];?>
" /></td></tr>
        <tr>
            <td>Название страницы</td>
            <tr><td><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('conpage')->value['title'];?>
" /></td>
        </tr>
        <tr>
            <td>Текст</td>
            <tr><td><?php echo $_smarty_tpl->getVariable('ckeditor')->value;?>
  </td>
        </tr>
        <tr>
            <td>Описание</td>
            <tr><td><textarea name="data[description]"><?php echo $_smarty_tpl->getVariable('conpage')->value['description'];?>
</textarea></td>
        </tr>
        <tr>
            <td>Прикрепить файл</td>
            <tr><td>
                <?php if (isset($_smarty_tpl->getVariable('conpage',null,true,false)->value['file_list'])&&$_smarty_tpl->getVariable('conpage')->value['file_list']!==false){?>
                <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('conpage')->value['file_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_file']['iteration']++;
?>
                <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" target="_blank">Файл <?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_file']['iteration'];?>
</a>&nbsp;<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del_pic&id=<?php echo $_smarty_tpl->getVariable('conpage')->value['id'];?>
&fname=<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
">удалить</a><br /> 
                <?php }} ?>
                <?php }?>
                
                <div id="file_list">
		<input type="file" name="file1" />
		</div>
		<input type="hidden" id="file_count" value="2" />
		<a href="#" onclick="addFile('file_list', 'file_count')">Прикрепить еще один файл</a>
            </td>
        
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }else{ ?>

<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ КОНТЕНТ СРАНИЦУ</a>
</td>
</table>
<?php if ($_smarty_tpl->getVariable('conpage_list')->value!==false){?>
                                               
<table cellpadding="5" border="0" style="font-size:14px;">
<?php  $_smarty_tpl->tpl_vars['conpage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('conpage_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['conpage']->key => $_smarty_tpl->tpl_vars['conpage']->value){
?>
    <tr>
        <td class="pem" style="color:#aaaaaa"><?php echo $_smarty_tpl->tpl_vars['conpage']->value['page_title'];?>
</td>
        <td class="pem"><?php echo $_smarty_tpl->tpl_vars['conpage']->value['title'];?>
</td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['conpage']->value['id'];?>
">редактировать</a></td>
        <td class="pom"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=del&id=<?php echo $_smarty_tpl->tpl_vars['conpage']->value['id'];?>
">удалить</a> </td>
    </tr>
<?php }} ?>
</table>
<?php }?>
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=add">ДОБАВИТЬ КОНТЕНТ СРАНИЦУ</a>
</td>
</table>
<br>
<?php }?>