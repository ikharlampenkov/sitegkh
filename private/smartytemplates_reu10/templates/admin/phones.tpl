<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #9c9a9a; padding-bottom: 10px;">Персонал</div>
<div style="font-size: 5px; border-top: 1px dashed #9c9a9a; margin-top: 1px; ">&nbsp;</div>
{if $action=="add" || $action=="edit"}

<h2>{$txt}</h2>

<form action="?page={$page}&action={$action}{if $action=="edit"}&id={$phones.id}{/if}" method="post" enctype="multipart/form-data">
    <table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
        <tr class="pem">
            <td width="200">Название</td>
            <td><input name="data[title]" value="{$phones.title}" /></td>
        </tr> 
        <tr class="pem">
            <td>Код</td>
            <td><input name="data[phone_code]" value="{$phones.phone_code}" /></td>
        </tr>
        <tr class="pem">
            <td>Телефон</td>
            <td><input name="data[phone]" value="{$phones.phone}" /></td>
        </tr>
        <tr class="pem">
            <td>Комментарий</td>
            <td><input name="data[comment]" value="{$phones.comment}" /></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить" />
</form>

{else}
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page={$page}&action=add">ДОБАВИТЬ ТЕЛЕФОН</a>
</td>
</table>
{if $phones_list!==false}
<table width="100%" cellpadding="5" cellspacing="2" style="font-size:14px">
    <tr>
       <td class="pum">Название</td>
       <td class="pum">Код</td>
       <td class="pum">Телефон</td>
       <td class="pum">Комментарий</td>
       <td>&nbsp;</td>
    </tr>
{foreach from=$phones_list item=phones}
    <tr>
	<td class="pem">{$phones.title}</td>
        <td class="pem">{$phones.phone_code}</td>
        <td class="pem">{$phones.phone}</td>
        <td class="pem">{$phones.comment}</td>
        <td class="pom"><a href="?page={$page}&action=edit&id={$phones.id}">редактировать</a><br />
            <a href="?page={$page}&action=del&id={$phones.id}">удалить</a></td>
    </tr>
{/foreach}
</table>
{/if}
<table cellpadding="5" border="0" style="font-size:14px;">
<td class="pom" align="center">
<a href="?page={$page}&action=add">ДОБАВИТЬ ТЕЛЕФОН</a>
</td>
</table>



{/if}