<?php /* Smarty version Smarty-3.0.7, created on 2011-03-28 18:34:29
         compiled from "H:/www/gkh/private/smartytemplates/templates/reu/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151244d907245476c79-97015135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bccf00ddb7975893584df89c2c95bd73e9a21716' => 
    array (
      0 => 'H:/www/gkh/private/smartytemplates/templates/reu/support.tpl',
      1 => 1301312065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151244d907245476c79-97015135',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'H:\www\gkh\private\classes\smarty\plugins\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'H:\www\gkh\private\classes\smarty\plugins\modifier.truncate.php';
?><h1>Техническая поддержка</h1>


<?php if ($_smarty_tpl->getVariable('action')->value=="question"){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>

<form action="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=<?php echo $_smarty_tpl->getVariable('action')->value;?>
" method="post">
    <table>
        <tr>
            <td width="200">Вопрос</td>
            <td><textarea name="data[question]"></textarea></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

<?php }elseif($_smarty_tpl->getVariable('action')->value=='view_question'){?>

<h2><?php echo $_smarty_tpl->getVariable('txt')->value;?>
</h2>
    <table>
        <tr>
            <td width="200">Дата вороса</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('tech_support_post')->value['date_question'],"%d.%m.%Y %H:%M");?>
</td>
        </tr>
        <tr>
            <td width="200">Вопрос</td>
            <td><?php echo $_smarty_tpl->getVariable('tech_support_post')->value['question'];?>
</td>
        </tr>
        <tr>
            <td width="200">Дата ответа</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('tech_support_post')->value['date_answer'],"%d.%m.%Y %H:%M");?>
</td>
        </tr>
        <tr>
            <td width="200">Ответ</td>
            <td><?php echo $_smarty_tpl->getVariable('tech_support_post')->value['answer'];?>
</td>
        </tr>
    </table>

<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('tech_support_post_list')->value!==false){?>
<table>
<?php  $_smarty_tpl->tpl_vars['tech_support_post'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tech_support_post_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tech_support_post']->key => $_smarty_tpl->tpl_vars['tech_support_post']->value){
?>
    <tr>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tech_support_post']->value['date_question'],"%d.%m.%Y %H:%M");?>
</td>
        <td><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['tech_support_post']->value['question']),30,'');?>
</td>
        <td><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['tech_support_post']->value['answer']),30,'');?>
</td>
        <td><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=view_question&id=<?php echo $_smarty_tpl->tpl_vars['tech_support_post']->value['id'];?>
">просмотреть</a><br /> </td>
    </tr>
<?php }} ?>
</table>
<?php }?>

<a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&action=question">Задать вопрос</a>

<?php }?>