<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">{if $is_situation==1}Жизненные ситуации{else}Вопрос-ответ{/if}</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>
<br/>

{if $action == 'view'}

<a href="?page={$page}{if $is_situation==1}&is_situation=1{/if}"><< Назад</a><br/><br/>

<h4>{$faq_info.question}</h4>

<div>{$faq_info.answer}</div>

    {else}

    {if $isComplite}
    <div style="font-weight: bold;">Ваша заявка отправлена</div><br/>
    {/if}

<table width="100%" cellpadding="5" cellspacing="2">
    {if isset($path_to_faq)}
        <tr>
            <td class="pim"><a href="?page={$page}"><< Назад</a>
                {section name=path_doc loop=count($path_to_faq) step=-1 max=count($path_to_faq)-1}
                    <a href="?page={$page}&root={$path_to_faq[path_doc].id}">{$path_to_faq[path_doc].question}</a>{if !$smarty.section.path_doc.last} / {/if}
                {/section}
            </td>
        </tr>
    {/if}


    {if isset($faq) && $faq != false}
        <tr>
            <td class="pem"><b>{$faq.question}</b></td>
        </tr>
    {/if}

    {foreach from=$faq_list item=faql}
        {if $faql.is_folder}
            <tr>
                <td class="pem"><img src="/img/folder.png"/> <a href="?page={$page}&root={$faql.id}{if $faql.is_situation==1}&is_situation=1{/if}">{$faql.question}</a></td>
            </tr>
            {else}
            <tr>
                <td class="pem">{*<img src="/img/page_word.png" /> *}<a href="?page={$page}&action=view&id={$faql.id}{if $faql.is_situation==1}&is_situation=1{/if}">{$faql.question}</a>
                {*<div id="question_{$faq.id}" style="display:none;background-color: #ffffff;padding:10px;">{$faq.answer|nl2br}</div>*}
                </td>
            </tr>
        {/if}
    {/foreach}
</table>
<br/>

<a href="#" style="" onclick="showQuestionForm();">Задать вопрос</a>
<br/>

<div id="questionForm" style="display: none;">
    <form action="?page=faq&action=question{if isset($faq) && $faq != false}&root={$faq.id}{/if}" method="post">

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
                    <option value="0" {if !isset($faq)}selected="selected"{/if}>корень</option>
                    {foreach from=$folder_list item=folder}
                        <option value="{$folder.id}" {if isset($faq.id) && $faq.id==$folder.id}selected="selected"{/if}>{$folder.question}</option>
                    {/foreach}
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

{/if}