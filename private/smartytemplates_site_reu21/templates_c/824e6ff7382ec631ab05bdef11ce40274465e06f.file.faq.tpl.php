<?php /* Smarty version Smarty-3.0.7, created on 2011-07-04 23:56:51
         compiled from "/home/dnevnik/private/smartytemplates_site/templates/faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2795267664e11f0d35586f3-59487309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '824e6ff7382ec631ab05bdef11ce40274465e06f' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_site/templates/faq.tpl',
      1 => 1309798604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2795267664e11f0d35586f3-59487309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;"><?php if (isset($_smarty_tpl->getVariable('is_situation',null,true,false)->value)&&$_smarty_tpl->getVariable('is_situation')->value==1){?>Жизненные ситуации<?php }else{ ?>Вопрос-ответ<?php }?></div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>


<table width="100%" cellpadding="5" cellspacing="2">
<?php if (isset($_smarty_tpl->getVariable('path_to_faq',null,true,false)->value)){?>
<tr><td class="pim"><a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
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
</td></tr>
<?php }?>


<?php if (isset($_smarty_tpl->getVariable('faq',null,true,false)->value)&&$_smarty_tpl->getVariable('faq')->value!=false){?>
<tr><td class="pem"><b><?php echo $_smarty_tpl->getVariable('faq')->value['question'];?>
</b></td></tr>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['faq'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('faq_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['faq']->key => $_smarty_tpl->tpl_vars['faq']->value){
?>
<?php if ($_smarty_tpl->tpl_vars['faq']->value['is_folder']){?>
<tr><td class="pem"><img src="/img/folder.png" /> <a href="?page=<?php echo $_smarty_tpl->getVariable('page')->value;?>
&root=<?php echo $_smarty_tpl->tpl_vars['faq']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['faq']->value['question'];?>
</a>
<?php }else{ ?>
<tr><td class="pem"><a href="javascript:showAnswer(<?php echo $_smarty_tpl->tpl_vars['faq']->value['id'];?>
);"><?php echo $_smarty_tpl->tpl_vars['faq']->value['question'];?>
</a></div>
<div id="question_<?php echo $_smarty_tpl->tpl_vars['faq']->value['id'];?>
" style="display:none;background-color: #ffffff;padding:10px;"><?php echo nl2br($_smarty_tpl->tpl_vars['faq']->value['answer']);?>
</div>
<?php }?>
<?php }} ?>
</table>