
<div style="color: #838383; font-size: 21px; border-bottom: 2px solid #89b4be; padding-bottom: 10px;">{if $is_situation==1}Жизненные ситуации{else}Вопрос-ответ{/if}</div>
<div style="font-size: 5px; border-top: 1px dashed #89b4be; margin-top: 1px; ">&nbsp;</div>

{if $action == 'view'}

    <a href="?page={$page}{if $is_situation==1}&is_situation=1{/if}"><< Назад</a><br/><br/>

    <h4>{$faq_info.question}</h4>

    <div>{$faq_info.answer}</div>

{else}

    <table width="100%" cellpadding="5" cellspacing="2">
        {if isset($path_to_faq)}
            <tr><td class="pim"><a href="?page={$page}"><< Назад</a> 
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

        {foreach from=$faq_list item=faq}
            {if $faq.is_folder}
                <tr>
                    <td class="pem"><img src="/img/folder.png" /> <a href="?page={$page}&root={$faq.id}{if $faq.is_situation==1}&is_situation=1{/if}">{$faq.question}</a></td>
                </tr>
            {else}
                <tr>
                    <td class="pem">{*<img src="/img/page_word.png" /> *}<a href="?page={$page}&action=view&id={$faq.id}{if $faq.is_situation==1}&is_situation=1{/if}">{$faq.question}</a>
                        {*<div id="question_{$faq.id}" style="display:none;background-color: #ffffff;padding:10px;">{$faq.answer|nl2br}</div>*}
                    </td>
                </tr>
            {/if}
        {/foreach}
    </table>

{/if}