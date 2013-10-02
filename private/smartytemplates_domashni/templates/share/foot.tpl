<div id="footer">
    <div class="center">

        <div class="contacts">
            <h3>Контакты</h3>

            <p>ООО "Домашний уют"</p>
            <p>г. Киселевск, ул. Коммунальная, 5</p>

            {foreach from=$phones_mp_list item=phones_mp}
                <p class="imgr_title">{$phones_mp.title}</p>
                <p class="imgr_text">({$phones_mp.phone_code}) {$phones_mp.phone}</p>
                <p class="imgr_text">{$phones_mp.comment}</p>
                <br/>
            {/foreach}

        </div>

        {*
        <div class="service">
        <h3>Услуги</h3>

        <ul>
        <li><a href="/">>  Услуга перая , платная.</a></li>
        <li><a href="/">>  Услуга вторая , платная.</a></li>
        <li><a href="/">>  Услуга третья , платная.</a></li>
        <li><a href="/">>  Услуга четвертая , платная.</a></li>
        <li><a href="/">>  Услуга пятая , платная.</a></li>
        </ul>
        </div>
        *}

        <div class="made"><a href="/"></a></div>
    </div>
</div>

</body>
</html>