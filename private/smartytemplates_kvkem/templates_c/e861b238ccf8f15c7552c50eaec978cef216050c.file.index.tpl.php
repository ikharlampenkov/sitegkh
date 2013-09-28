<?php /* Smarty version Smarty-3.0.7, created on 2012-10-10 23:21:24
         compiled from "/home/dnevnik/private/smartytemplates_kvkem/templates/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5158656935075a0844bf487-15011005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e861b238ccf8f15c7552c50eaec978cef216050c' => 
    array (
      0 => '/home/dnevnik/private/smartytemplates_kvkem/templates/admin/index.tpl',
      1 => 1349886081,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5158656935075a0844bf487-15011005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("share/head.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('page',null,true,false)->value)&&!empty($_smarty_tpl->getVariable('page',null,true,false)->value)){?>
<div style="padding: 20px 50px 0px 50px; width:900px; height: 100%; min-height: 500px; margin: 0 auto;">
<?php $_template = new Smarty_Internal_Template("admin/".($_smarty_tpl->getVariable('page')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    <?php }else{ ?>

<div class="left_column">
    <div class="item">
        <div class="h2">Пользователям</div>
        <p>Главная</p>
        <ul>
            <li><a href="/">Отчеты по домам 2010г</a></li>
            <li><a href="/">Отчеты по домам 2011г</a></li>
        </ul>
    </div>
    <div class="item">
        <div class="h2">Информация</div>

        <ul>
            <li><a href="/">ЖКУ</a></li>
            <li><a href="/">Оплата ЖКУ</a></li>
            <li><a href="/">Обслуживание</a></li>
            <li><a href="/">Правовые документы</a></li>
            <li><a href="/">Правовые документы в сфере теплоснабжения</a></li>
            <li><a href="/">Правовые документы в сфере водоснабжения</a></li>
        </ul>
    </div>
    <div class="item">
        <div class="h2">Полезные ссылки</div>

        <ul>
            <li>
                <a href="/">Администрация города Кемерово</a>

                <p>Официальный сайт</p>
            </li>
            <li>
                <a href="/">Совет народных депутатов (Кемеровской области)</a>

                <p>Официальный сайт</p>
            </li>

        </ul>
    </div>

</div>
<div class="right_column">
    <div class="item">
        <div class="h2">Ваше мнение №1</div>
        <p>Что Вас больше интересует на этом сайте?</p>

        <form>
            <ul>
                <li><input type="radio" name="q" id="q1" value="1"/><label for="q1">Новости ЖКХ</label></li>
                <li><input type="radio" name="q" id="q2" value="2"/><label for="q2">Законодательство</label></li>
                <li><input type="radio" name="q" id="q3" value="3"/><label for="q3">Информация</label></li>
                <li><input type="radio" name="q" id="q4" value="4"/><label for="q4">Статьи о ЖКХ</label></li>
                <li><input type="radio" name="q" id="q5" value="5"/><label for="q5">Что-то другое</label></li>
            </ul>
            <p>
                <input type="submit" name="submit_poll" class="submit_poll" value="OK"/>
                <input type="submit" name="result_poll" class="result_poll" value="ИТОГИ"/>
            </p>
        </form>
    </div>
</div>
<div class="center">


    <div class="content_center">

        <h2>Интернет-конференция депутатов горсовета</h2>

        <div class="date_create">18.06.2012 14:38</div>

        <p>Интернет-конференция депутатов горсовета</p>

        <p>26 июня с 15.00 до 16.00 часов состоится интернет – конференция по теме: «Подготовка к отопительному сезону в Кемерово: задачи, проблемы, перспективы»</p>

        <p>Интернет- конференцию проведут депутаты Кемеровского городского Совета народных депутатов.</p>

        <p>Как идет работа по ремонту и реконструкции объектов городского теплоснабжения? Когда включат отопление? Будет ли в наших квартирах зимой тепло? </p>

        <p>На эти и многие другие вопросы ответят депутаты Кемеровского городского Совета.</p>

        <p>С ними можно связаться в режиме он-лайн, войдя в скайп с использованием логина kemgorsov3 либо оставить свой вопрос заранее на сайте горсовета <a href="http://www.kemgorsovet.ru/">http://www.kemgorsovet.ru/</a>, прислать по электронной почте pressa@kemgorsovet.ru или позвонить по телефону 36-77-26.</p>


        <div class="page_bar">
            <a href="/" class="prev">Предыдущая</a>
            <a href="/">1</a>
            <a href="/">2</a>
            <a href="/">3</a>
            <a href="/">4</a>
            <span>5</span>
            <a href="/">6</a>
            <a href="/">7</a>
            <a href="/">8</a>
            <a href="/">9</a>
            <a href="/" class="next">Следующая</a>
        </div>
    </div>


</div>

<?php }?>

<?php $_template = new Smarty_Internal_Template("share/foot.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>