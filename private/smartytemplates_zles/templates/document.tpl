<h2>Документы</h2>

{if $document != false}
<a href="?page={$page}"><< Назад</a>
<h4>{$document.title}</h4>
{/if}

<table width="100%" cellpadding="5" cellspacing="2">
{foreach from=$document_list item=document}

{if $document.is_folder}
<tr><td class="pem"><div><img src="/img/folder.png" /> <a href="?page={$page}&root={$document.id}">{$document.title}</a></div>
{else}
<tr><td class="peem"><div><img src="/img/page_word.png" /> <a href="{$siteurl}temp_files/{$document.file}" title="{$document.short_text}" target="_blank">{$document.title}</a></div>
{/if}
</td></tr>
{/foreach}
</table>