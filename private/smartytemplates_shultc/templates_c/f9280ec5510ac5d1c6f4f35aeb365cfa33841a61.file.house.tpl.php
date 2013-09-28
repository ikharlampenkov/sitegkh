<?php /* Smarty version Smarty-3.0.7, created on 2012-02-12 06:38:43
         compiled from "/home/dnevnik/private/smartytemplates_ourhouse/templates/house.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20922776264f36fc03d7abc8-36868950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9280ec5510ac5d1c6f4f35aeb365cfa33841a61' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_ourhouse/templates/house.tpl',
      1 => 1328859591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20922776264f36fc03d7abc8-36868950',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">Ваш дом</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

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
                <table border="0" width="100%" cellspacing="2">
                    <tr>
                        <td class="pim" align="center" style="color:#aaaaaa">Дом</td>
                        <td class="pim" align="center" style="color:#aaaaaa">Площадь</td>

            <?php if ($_smarty_tpl->getVariable('category')->value=='all'||$_smarty_tpl->getVariable('category')->value=='plan'){?>
            <td class="pim" align="center" style="color:#aaaaaa">План работ по содержанию и ремонту</td>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>
            <td class="pim" align="center" style="color:#aaaaaa">Доходы и расходы</td>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('category')->value=='all'||$_smarty_tpl->getVariable('category')->value!='plan'){?>
            <td class="pim" align="center" style="color:#aaaaaa">Выполненные работы</td>
            <?php }?>

                    </tr>
<?php  $_smarty_tpl->tpl_vars['house'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['street']->value['houses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['house']->key => $_smarty_tpl->tpl_vars['house']->value){
?>
                    <tr>
                        <td class="pim" align="center"><?php echo $_smarty_tpl->tpl_vars['house']->value['number'];?>
<?php echo $_smarty_tpl->tpl_vars['house']->value['subnumber'];?>
</td>
                        <td class="pim" align="center"><?php echo $_smarty_tpl->tpl_vars['house']->value['area'];?>
</td>


            <?php if ($_smarty_tpl->getVariable('category')->value=='all'||$_smarty_tpl->getVariable('category')->value=='plan'){?>
            <td class="pim" align="center">
            <?php if (!empty($_smarty_tpl->tpl_vars['house']->value['file_repair_plan'])){?>
            <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['house']->value['file_repair_plan'];?>
" target="_blank">Скачать</a>
            <?php }?>
            </td>
            <?php }?>

            <?php if ($_smarty_tpl->getVariable('category')->value=='all'){?>
            <td class="pim" align="center">
            <?php if (!empty($_smarty_tpl->tpl_vars['house']->value['file_costs_income'])){?>
            <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['house']->value['file_costs_income'];?>
" target="_blank">Скачать</a>
            <?php }?>
            </td>
            <?php }?>

            <?php if ($_smarty_tpl->getVariable('category')->value=='all'||$_smarty_tpl->getVariable('category')->value!='plan'){?>
            <td class="pim" align="center">
            <?php if (!empty($_smarty_tpl->tpl_vars['house']->value['file_performed_repair'])){?>
            <a href="<?php echo $_smarty_tpl->getVariable('siteurl')->value;?>
temp_files/<?php echo $_smarty_tpl->tpl_vars['house']->value['file_performed_repair'];?>
">Скачать</a>
            <?php }?>
            </td>
            <?php }?>

                    </tr>
<?php }} ?>
                </table>
            </div>
        </td>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['_house_list']['iteration']%3==0){?></tr><tr valign="top"><?php }?>
<?php }} ?>
    </tr>
</table>

<?php }?>