<div class="page_title">{$module_title}</div>
<div class="page_title_und">&nbsp;</div>

<br/>


{if $action=="question"}

<h2>{$txt}</h2>

<form action="?page={$page}&action={$action}&category={$category}" method="post" enctype="multipart/form-data">
    <table class="cab-table">
        <tr>
            <td width="150" class="cab-header">Вопрос</td>
            <td class="cab-value"><textarea name="data[question]"></textarea></td>
        </tr>
        <tr>
            <td class="cab-header">Прикрепит файл</td>
            <td class="cab-value">
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

{elseif $action==view_ticket}

<h2>{$ticket_title} № {$ticket.id}</h2>
{* <div>{$ticket.title}</div> *}
<br />

{if $ticket.post_list}
<table class="cab-table">
{foreach from=$ticket.post_list item=post}
    <tr>
        <td class="cab-header" style="text-align: left;">{$post.date_question|date_format:"%d.%m.%Y %H:%M"}<br />
                {$post.question}
                {if $post.file_list != false}
            <div>
                    {foreach from=$post.file_list item=file name=_file}
                <a href="{$siteurl}temp_support/{$file}" target="_blank">Файл {$smarty.foreach._file.iteration}</a><br />
                    {/foreach}
            </div>
                {/if}
        </td>
    </tr>
    {if $post.answer}
    <tr>
        <td class="cab-value">{$post.date_answer|date_format:"%d.%m.%Y %H:%M"}<br />
                {$post.answer}
            {if $post.answer_file_list != false}
            <div>
                    {foreach from=$post.answer_file_list item=file name=_file}
                <a href="{$siteurl}temp_support/{$file}" target="_blank">Файл {$smarty.foreach._file.iteration}</a><br />
                    {/foreach}
            </div>
                {/if}
        </td>
    </tr>
    {/if}
{/foreach}
</table>
{/if}

<h4>{$action_title}</h4>

<form action="?page={$page}&action={$action}&id={$ticket.id}&category={$category}" method="post" enctype="multipart/form-data">
    <table class="cab-table">
        <tr>
            <td width="150" class="cab-header">Вопрос</td>
            <td class="cab-value"><textarea name="data[question]"></textarea></td>
        </tr>
        <tr>
            <td class="cab-header">Прикрепит файл</td>
            <td class="cab-value">
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

{else}

{if $ticket_list!==false}
<table class="cab-table">
   <tr>
       <td class="cab-header"><b>Номер</td>
       <td class="cab-header"><b>Заголовок</td>
       <td class="cab-header"><b>Дата</td>
       <td class="cab-header"><b>Состояние</td>
       <td class="cab-header"><b>&nbsp;</td>
    </tr> 
{foreach from=$ticket_list item=ticket}
    <tr>
        <td  class="cab-value">{$ticket.id}</td>
        <td  class="cab-value"><a href="?page={$page}&action=view_ticket&id={$ticket.id}&category={$category}">{$ticket.title|strip_tags:false}</a></td>
        <td  class="cab-value">{$ticket.date|date_format:"%d.%m.%Y %H:%M"}</td>
        <td  class="cab-value">{$ticket.status}</td>
        <td  class="cab-value">
            <a href="?page={$page}&action=del_ticket&id={$ticket.id}&category={$category}">удалить</a><br />
        </td>
    </tr>
{/foreach}
</table>
{/if}

<br />
<a href="?page={$page}&action=question&category={$category}" style="font-size: 14px;">{$action_title}</a>

{/if}	 	 		 