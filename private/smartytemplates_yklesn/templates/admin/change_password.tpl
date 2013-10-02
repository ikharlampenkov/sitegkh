<div class="page_title">Смена пароля</div>
<div class="page_title_und">&nbsp;</div>
<br/>

{if $isNotEq}
    <div style="font-weight: bold;">Пароли не совпадают</div><br/>
    {/if}

<form action="?page={$page}" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="200">Пароль</td>
            <td><input name="data[password]" value=""/></td>
        </tr>
        <tr>
            <td>Подтверждение пароля</td>
            <td><input name="data[sec_password]" value=""/></td>
        </tr>
    </table>
    <input id="save" name="save" type="submit" value="Сохранить"/>
</form>