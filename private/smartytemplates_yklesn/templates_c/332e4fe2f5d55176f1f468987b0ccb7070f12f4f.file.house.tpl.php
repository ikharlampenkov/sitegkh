<?php /* Smarty version Smarty-3.0.7, created on 2012-11-26 02:06:10
         compiled from "/home/dnevnik/private/smartytemplates_yklesn/templates/house.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84639149550b27a32838548-94380755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '332e4fe2f5d55176f1f468987b0ccb7070f12f4f' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_yklesn/templates/house.tpl',
      1 => 1320654022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84639149550b27a32838548-94380755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="page_title">Ваш дом</div>
<div class="page_title_und">&nbsp;</div>

<br/>
<div>Выберите улицу:</div><br/><br/>

<?php if ($_smarty_tpl->getVariable('action')->value=="view"){?>

<h4>Дом </h4>


    <?php if (!empty($_smarty_tpl->getVariable('house',null,true,false)->value['file_repair_plan'])){?>
    <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->getVariable('house')->value['file_repair_plan'];?>
" target="_blank">План работ по содержанию и ремонту</a><br /><br />
    <?php }?>



<?php }else{ ?>

<table width="100%" cellpadding="5" cellspacing="2">
    <tr valign="top">
<?php  $_smarty_tpl->tpl_vars['street'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('house_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_house_list']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_house_list']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['street']->key => $_smarty_tpl->tpl_vars['street']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_house_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['_house_list']['index']++;
?>
        <td class="pem" style="font-size:14px" width="33%">
            <span><a href="javascript:showHouse(<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_house_list']['index'];?>
)"><?php echo $_smarty_tpl->tpl_vars['street']->value['street']['street'];?>
</a></span>
            <div id="house_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['_house_list']['index'];?>
" style="display: none;">
                <table border="0" width="100%" cellspacing="2" style="border-collapse:collapse;">
                    <tr>
                        <td class="pim" align="center" style="color:#aaaaaa; border:#008630 solid 1px;">Дом</td>
                        <td class="pim" align="center" style="color:#aaaaaa; border:#008630 solid 1px;">Площадь</td>

                    </tr>
<?php  $_smarty_tpl->tpl_vars['house'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['street']->value['houses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['house']->key => $_smarty_tpl->tpl_vars['house']->value){
?>
                    <tr>
                        <td class="pim" align="center" style="border:#008630 solid 1px;"><?php echo $_smarty_tpl->tpl_vars['house']->value['number'];?>
<?php echo $_smarty_tpl->tpl_vars['house']->value['subnumber'];?>
</td>
                        <td class="pim" align="center" style="border:#008630 solid 1px;"><?php echo $_smarty_tpl->tpl_vars['house']->value['area'];?>
</td>

                    </tr>
<?php }} ?>
                </table>
            </div>
        </td>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['_house_list']['iteration']%3==0){?></tr><tr valign="top"><?php }?>
<?php }} ?>
    </tr>
</table>

    <br/><br/>
    <div style="font-size: 14pt;">В 2010 году договоров расторжения нет</div>

<?php }?>