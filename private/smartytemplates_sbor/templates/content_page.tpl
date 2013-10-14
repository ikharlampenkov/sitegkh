<div class="page_title">{$conpage.title}</div>
<div class="page_title_und">&nbsp;</div>


{if !empty($conpage.description)}
    <div>{$conpage.description}</div>
    <br/>
    <br/>
{/if}

<div>{$conpage.content}</div>

{if isset($conpage.file_list) && $conpage.file_list !== false}
    {foreach from=$conpage.file_list item=file name=_file}
        <a href="{$siteurl}temp_files/{$file.file}" target="_blank">Файл {$smarty.foreach._file.iteration}</a>
        <br/>
        <br/>
    {/foreach}
{/if}