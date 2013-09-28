<div class="page_title">Общие сведения о лицевом счете</div>
<div class="page_title_und">&nbsp;</div>

<br/>

<table class="cab-table">
    <tr>
        <td class="cab-header">Л/С</td>
        <td class="cab-value">{$about_ls.KOD}</td>
    </tr>
    <tr>
        <td class="cab-header">ФИО собственника</td>
        <td class="cab-value">{$about_ls.SOBSTV}</td>
    </tr>
    <tr>
        <td class="cab-header">Адрес</td>
        <td class="cab-value">{$about_ls.ADRES}</td>
    </tr>
    <tr>
        <td class="cab-header">Общая площадь</td>
        <td class="cab-value">{$about_ls.OB_PL}</td>
    </tr>
    {*
    <tr>
        <td class="cab-header">Жилая площадь</td>
        <td class="cab-value">{$about_ls.JIL_PL}</td>
    </tr>
    *}
    <tr>
        <td class="cab-header">Число постоянно зарегистрированных</td>
        <td class="cab-value">{$about_ls.KOL_POST_ZAREG}</td>
    </tr>
    <tr>
        <td class="cab-header">Число временно зарегистрированных</td>
        <td class="cab-value">{$about_ls.KOL_VREM_ZAREG}</td>
    </tr>
    {*
    <tr>
        <td class="cab-header">{$about_ls.KOD}</td>
        <td class="cab-value">{$about_ls.KOL_POST_PROJ}</td>
    </tr>
    <tr>
        <td class="cab-header">{$about_ls.KOD}</td>
        <td class="cab-value">{$about_ls.KOL_VREM_PROJ}</td>
    </tr>
     *}
    <tr>
        <td class="cab-header">Общая задолженность</td>
        <td class="cab-value">{$about_ls.DOLG}</td>
    </tr>
    <tr>
        <td class="cab-header">Пеня</td>
        <td class="cab-value">{$about_ls.PENYA}</td>
    </tr>
</table>

<br/>

{if $about_jilci}
<table class="cab-table">
    <tr>
        <td class="cab-header">№</td>
        <td class="cab-header">ФИО</td>
        <td class="cab-header">Дата рождения</td>
        <td class="cab-header">Тип регистрации</td>
        <td class="cab-header">Дата регистрации</td>
        <td class="cab-header">Проживает</td>
        <td class="cab-header">Дата окончания временной регистрации</td>
    </tr>
{foreach from=$about_jilci item=jilci name=_jilci}
    <tr>
        <td class="cab-value">{$smarty.foreach._jilci.iteration}</td>
        <td class="cab-value">{$jilci->FIO}</td>
        <td class="cab-value">{$jilci->DATA_ROJD}</td>
        <td class="cab-value">{$jilci->TYPE_REGISTR}</td>
        <td class="cab-value">{$jilci->DATA_REGISTR}</td>
        <td class="cab-value">{$jilci->PROJIVAET}</td>
        <td class="cab-value">{$jilci->DATA_OKONCH_REGISTR}</td>
    </tr>
{/foreach}
</table>
{/if}