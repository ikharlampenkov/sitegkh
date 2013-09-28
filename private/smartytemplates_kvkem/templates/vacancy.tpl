
<div class="page_title">Вакансии</div>
<div class="page_title_und">&nbsp;</div>

{if $vacancy_list!==false}

<table cellpadding="10">
    <tr>
       <td class="pom"><b>Должность<b></td>
       <td class="pom"><b>Требования<b></td>
       <td class="pom"><b>Заработная плата<b></td>
       <td class="pom"><b>Куда присылать резюме<b></td>
       <td class="pom"><b>К кому обращаться<b></td>
    </tr>
{foreach from=$vacancy_list item=vacancy}
    <tr>
	<td class="pem">{$vacancy.position}</td>
        <td class="pem">{$vacancy.requirements}</td>
        <td class="pem">{$vacancy.salary}</td>
        <td class="pem">{$vacancy.contact}</td>
        <td class="pem">{$vacancy.who}</td>
    </tr>
{/foreach}
</table>

{else}
    
    <div style="font-size: 14pt; font-weight: bold;">Вакансий нет</div>

{/if}