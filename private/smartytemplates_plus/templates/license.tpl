<h2>Достижения</h2>


{if $license_list!==false}
<table>
{foreach from=$license_list item=license}
    <tr>
        <td>
    {if $license.img_prew}<a href="{$siteurl}temp_files/{$license.img}" target="_blank"><img src="{$siteurl}temp_files/{$license.img_prew}" alt="{$license.description|truncate:50}" border="0" /></a>{else}&nbsp;{/if}<br />
        <div>{$license.description|truncate:50}</div>
        </td>
    </tr>
{/foreach}
</table>
{/if}