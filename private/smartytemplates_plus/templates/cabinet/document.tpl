<h2>Документы</div>


<a href="?page={$page}"><< Назад</a>
{if $document != false}
<h4>{$document.title}</h4>
{/if}



<table width="100%" cellpadding="5" cellspacing="2">
{foreach from=$document_list item=document}
{if $document.is_folder}
<tr><td class="pem"><img src="/img/folder.png" /> <a href="?page={$page}&root={$document.id}">{$document.title}</a></td></tr>
{else}
<tr><td class="peem"><img src="/img/page_word.png" /> <a href="{$siteurl}temp_files/{$document.file}" title="{$document.short_text}" target="_blank">{$document.title}</a></td></tr>
{/if}
{/foreach}
</table>